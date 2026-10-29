<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SedataService;
use App\Services\BeritaService;
use App\Models\DataPelanggaran;

class DashboardController extends Controller
{
    /**
     * ============================================================
     * DASHBOARD UTAMA
     * ============================================================
     */
    public function dashboard(
        Request $request,
        SedataService $sedataService
    ) {

        $selectedKapanewon = $request->get(
            'kapanewon',
            'Semua Kapanewon'
        );


        $dashboard = $sedataService->getDashboard(
            $selectedKapanewon
        );


        return view(
            'dashboards.dashboard',
            compact(
                'dashboard',
                'selectedKapanewon'
            )
        );
    }


    /**
     * ============================================================
     * STATISTIK
     * ============================================================
     */
    public function statistik(
        Request $request,
        SedataService $sedataService
    ) {

        /*
        |--------------------------------------------------------------------------
        | FILTER
        |--------------------------------------------------------------------------
        */

        $tahun = $request->filled('tahun')
            ? (int) $request->tahun
            : null;


        $jenis = $request->filled('jenis')
            ? $request->jenis
            : null;


        $tingkatWilayah = $request->get(
            'tingkat_wilayah',
            'Kapanewon'
        );


        $wilayah = ($tingkatWilayah === 'Kapanewon' && $request->filled('wilayah'))
            ? $request->wilayah
            : null;


        /*
        |--------------------------------------------------------------------------
        | DAFTAR TAHUN
        |--------------------------------------------------------------------------
        */

        $tahunList = DataPelanggaran::query()
            ->select('tahun')
            ->distinct()
            ->orderByDesc('tahun')
            ->pluck('tahun');


        /*
        |--------------------------------------------------------------------------
        | DAFTAR JENIS PELANGGARAN
        |--------------------------------------------------------------------------
        |
        | Hanya mengambil indikator pelanggaran utama.
        |
        | Tidak mengambil:
        |
        | - Jumlah Aparat
        | - Patroli
        | - Penyelesaian
        | - Persentase
        | - Peta rawan
        |
        */

        $jenisList = DataPelanggaran::query()
            ->where(
                'tingkat_wilayah',
                $tingkatWilayah
            )
            ->where(function ($query) {

                $query
                    ->where(
                        'jenis_pelanggaran',
                        'like',
                        'Jumlah pelanggaran perda pada ketertiban%'
                    )
                    ->orWhere(
                        'jenis_pelanggaran',
                        'like',
                        'Jumlah pelanggaran trantibum%'
                    );
            })
            ->select(
                'jenis_pelanggaran'
            )
            ->distinct()
            ->orderBy(
                'jenis_pelanggaran'
            )
            ->pluck(
                'jenis_pelanggaran'
            );


        /*
        |--------------------------------------------------------------------------
        | PENYESUAIAN JENIS JIKA GANTI TINGKAT WILAYAH
        |--------------------------------------------------------------------------
        */
        if ($jenis && ! $jenisList->contains($jenis)) {
            $matchedJenis = $jenisList->first(function ($item) use ($jenis) {
                foreach (['gelandangan dan pengemis', 'lingkungan', 'minuman berakohol', 'pedagang kaki lima', 'pelacuran', 'reklame', 'sampah', 'trantibum'] as $keyword) {
                    if (str_contains(strtolower($jenis), $keyword) && str_contains(strtolower($item), $keyword)) {
                        return true;
                    }
                }
                return false;
            });

            $jenis = $matchedJenis ?: null;
        }


        /*
        |--------------------------------------------------------------------------
        | DAFTAR WILAYAH (KAPANEWON)
        |--------------------------------------------------------------------------
        |
        | Mengambil daftar Kapanewon untuk opsi dropdown wilayah saat tingkat
        | wilayah Kapanewon dipilih.
        |
        */

        $wilayahList = DataPelanggaran::query()
            ->where(
                'tingkat_wilayah',
                'Kapanewon'
            )
            ->select(
                'wilayah'
            )
            ->whereNotNull(
                'wilayah'
            )
            ->where(
                'wilayah',
                '!=',
                ''
            )
            ->distinct()
            ->orderBy(
                'wilayah'
            )
            ->pluck(
                'wilayah'
            );


        /*
        |--------------------------------------------------------------------------
        | DATA STATISTIK
        |--------------------------------------------------------------------------
        |
        | Mengambil data statistik secara langsung (default: Semua Tahun,
        | Semua Jenis Pelanggaran, Tingkat Wilayah Kapanewon).
        |
        */

        $dashboard = $sedataService->getStatistik(
            $tahun,
            $jenis,
            $tingkatWilayah,
            $wilayah
        );


        /*
        |--------------------------------------------------------------------------
        | KIRIM DATA KE VIEW
        |--------------------------------------------------------------------------
        */

        return view(
            'dashboards.statistik',
            compact(

                'dashboard',

                'tahunList',

                'jenisList',

                'wilayahList',

                'tahun',

                'jenis',

                'tingkatWilayah',

                'wilayah'

            )
        );
    }


    /**
     * ============================================================
     * PETA
     * ============================================================
     */
    public function peta(
        SedataService $sedataService
    ) {
        $dashboard = $sedataService->getDashboard();

        return view(
            'dashboards.peta',
            compact('dashboard')
        );
    }


    /**
     * ============================================================
     * DATA
     * ============================================================
     */
    public function data()
    {
        return view(
            'dashboards.data'
        );
    }


    /**
     * ============================================================
     * PROFIL
     * ============================================================
     */
    public function profil()
    {
        return view(
            'dashboards.profil'
        );
    }


    /**
     * ============================================================
     * PROFIL KABUPATEN
     * ============================================================
     */
    public function profilKabupaten()
    {
        return view(
            'dashboards.profil-kabupaten'
        );
    }


    /**
     * ============================================================
     * PROFIL SATPOL PP
     * ============================================================
     */
    public function profilSatpol()
    {
        return view(
            'dashboards.profil-satpol'
        );
    }


    /**
     * ============================================================
     * DETAIL BERITA & JURNAL
     * ============================================================
     */
    public function beritaDetail(
        $id,
        BeritaService $beritaService
    ) {
        $berita = $beritaService->getBeritaById($id);

        if (!$berita) {
            abort(404);
        }

        $beritaLainnya = $beritaService->getRecentBerita($id, 4);

        return view(
            'dashboards.berita-detail',
            compact('berita', 'beritaLainnya')
        );
    }


    /**
     * ============================================================
     * UPLOAD LOGO
     * ============================================================
     */
    public function uploadLogo(
        Request $request
    ) {

        $request->validate([
            'logo' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
        ]);


        $logo = $request->file(
            'logo'
        );


        $filename = 'logo-satpolpp.png';


        $logo->move(
            public_path('images'),
            $filename
        );


        return back()->with(
            'status',
            'Logo berhasil diunggah dan akan tampil di sidebar.'
        );
    }
}
