<?php

namespace App\Services;

class BeritaService
{
    /**
     * Data Master Berita & Jurnal
     */
    protected array $beritaList = [
        1 => [
            'id' => 1,
            'slug' => 'rapat-koordinasi-pembangunan-infrastruktur',
            'category' => 'PEMERINTAHAN',
            'badgeClass' => 'badge-gov',
            'date' => '12 Okt 2024',
            'title' => 'Rapat Koordinasi Pembangunan Infrastruktur',
            'image' => 'images/baghround-profil2.png',
            'author' => 'Humas Pemerintah Kabupaten Bantul',
            'excerpt' => 'Pemerintah Kabupaten Bantul menggelar rapat koordinasi lintas sektoral untuk membahas percepatan pembangunan infrastruktur strategis daerah dan optimalisasi pengawasan tata ruang.',
            'content' => '
                <p class="lead">Pemerintah Kabupaten Bantul menggelar rapat koordinasi lintas sektoral untuk membahas percepatan pembangunan infrastruktur strategis daerah dan optimalisasi pengawasan tata ruang.</p>
                <p><strong>BANTUL</strong> — Rapat koordinasi ini dihadiri oleh jajaran Forkopimda, Satuan Polisi Pamong Praja (Satpol PP), Dinas Pekerjaan Umum, Perumahan dan Kawasan Permukiman (DPUPKP), serta para Panewu dari 17 Kapanewon se-Kabupaten Bantul.</p>
                <p>Fokus utama rapat adalah sinkronisasi rencana pembangunan fasilitas publik, rehabilitasi jalan penghubung antar-kapanewon, peningkatan drainase perkotaan guna mengantisipasi musim hujan, serta penataan kawasan pedestrian.</p>
                <p>Bupati Bantul menegaskan pentingnya kolaborasi aktif dan penegakan peraturan daerah (Perda) secara humanis agar setiap proyek pembangunan dapat berjalan lancar tanpa mengganggu ketenteraman dan ketertiban umum masyarakat sekitar.</p>
                <div class="news-quote-box">
                    <p class="mb-0">"Pembangunan infrastruktur harus berorientasi pada pemerataan kesejahteraan masyarakat Bantul serta menjaga keasrian tata ruang daerah."</p>
                </div>
                <p>Satpol PP Kabupaten Bantul turut memperkuat komitmen dalam pengawasan ruang publik, penertiban izin reklame liar di sepanjang koridor jalan utama, dan memastikan kepatuhan terhadap regulasi daerah selama proses pembangunan berlangsung.</p>
            '
        ],
        2 => [
            'id' => 2,
            'slug' => 'festival-budaya-dan-umkm-tingkatkan-ekonomi-warga',
            'category' => 'MASYARAKAT',
            'badgeClass' => 'badge-community',
            'date' => '10 Okt 2024',
            'title' => 'Festival Budaya dan UMKM Tingkatkan Ekonomi Warga',
            'image' => 'images/baghround-profil3.png',
            'author' => 'Dinas Kebudayaan & Koperasi UKM Bantul',
            'excerpt' => 'Ribuan warga antusias menghadiri festival kebudayaan tahunan yang memamerkan ratusan produk unggulan UMKM lokal dan ragam seni pertunjukan tradisional.',
            'content' => '
                <p class="lead">Ribuan warga antusias menghadiri festival kebudayaan tahunan yang memamerkan ratusan produk unggulan UMKM lokal dan ragam seni pertunjukan tradisional.</p>
                <p><strong>BANTUL</strong> — Lapangan Paseban Bantul dipadati masyarakat dan wisatawan yang ingin menyaksikan Festival Seni Budaya sekaligus berbelanja aneka produk kerajinan khas Bantul, mulai dari gerabah Kasongan, batik tulis Giriloyo, kerajinan kulit Manding, hingga aneka olahan kuliner tradisional.</p>
                <p>Acara tahunan ini menjadi momentum strategis bagi para pelaku usaha mikro untuk bangkit, memperluas jaringan pasar, serta mengenalkan inovasi produk lokal Bantul kepada pasar yang lebih luas.</p>
                <p>Selain pameran ekonomi kreatif, festival juga dimeriahkan dengan pawai bregada rakyat, pertunjukan wayang kulit, dan festival musik etnik yang memukau ribuan penonton dari berbagai kalangan.</p>
                <div class="news-quote-box quote-warning">
                    <p class="mb-0">"Festival budaya adalah wadah bertemunya pelestarian kearifan lokal dan penguatan kemandirian ekonomi rakyat Bantul."</p>
                </div>
                <p>Jajaran Satpol PP Bantul bersama unsur Linmas dan kepolisian mengawal jalannya acara sehingga suasana tetap tertib, aman, bersih, dan nyaman bagi seluruh pengunjung.</p>
            '
        ],
        3 => [
            'id' => 3,
            'slug' => 'peluncuran-aplikasi-pelayanan-publik-terpadu',
            'category' => 'LAYANAN',
            'badgeClass' => 'badge-service',
            'date' => '08 Okt 2024',
            'title' => 'Peluncuran Aplikasi Pelayanan Publik Terpadu',
            'image' => 'images/baghround-profil4.png',
            'author' => 'Diskominfo Kabupaten Bantul',
            'excerpt' => 'Aplikasi baru resmi diluncurkan guna mempermudah masyarakat Kabupaten Bantul dalam mengakses pengurusan perizinan dan administrasi secara digital.',
            'content' => '
                <p class="lead">Aplikasi baru resmi diluncurkan guna mempermudah masyarakat Kabupaten Bantul dalam mengakses pengurusan perizinan, administrasi kependudukan, dan kanal aduan secara cepat dan transparan.</p>
                <p><strong>BANTUL</strong> — Pemerintah Kabupaten Bantul terus mempercepat transformasi digital birokrasi melalui peresmian Portal Pelayanan Publik Terpadu Satu Pintu.</p>
                <p>Melalui portal ini, masyarakat dapat mengajukan permohonan berbagai dokumen resmi, mengecek status perizinan usaha, serta menyampaikan aduan terkait pelanggaran ketertiban umum langsung dari ponsel pintar mereka.</p>
                <p>Sistem ini terintegrasi langsung dengan dashboard pemantauan pelanggaran Satpol PP Bantul, memungkinkan petugas lapangan untuk menindaklanjuti setiap laporan masyarakat secara real-time dan akuntabel.</p>
                <div class="news-quote-box">
                    <p class="mb-0">"Digitalisasi layanan publik hadir untuk memangkas birokrasi, meningkatkan transparansi, dan memberikan pelayanan terbaik bagi seluruh warga Bantul."</p>
                </div>
                <p>Layanan ini kini sudah dapat diakses oleh seluruh warga masyarakat melalui portal web resmi maupun aplikasi mobile yang telah tersedia.</p>
            '
        ],
        4 => [
            'id' => 4,
            'slug' => 'operasi-simpatik-penegakan-perda-trantibum',
            'category' => 'KETERTIBAN',
            'badgeClass' => 'badge-order',
            'date' => '05 Okt 2024',
            'title' => 'Operasi Simpatik Penegakan Perda Trantibum',
            'image' => 'images/baghround-profil.jpg',
            'author' => 'Satuan Polisi Pamong Praja Kabupaten Bantul',
            'excerpt' => 'Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Bantul mengintensifkan patroli simpatik dan edukatif guna menegakkan Peraturan Daerah serta menjaga kenyamanan ruang publik.',
            'content' => '
                <p class="lead">Satuan Polisi Pamong Praja (Satpol PP) Kabupaten Bantul mengintensifkan patroli simpatik dan edukatif guna menegakkan Peraturan Daerah serta menjaga kenyamanan ruang publik.</p>
                <p><strong>BANTUL</strong> — Dalam rangka memelihara ketertiban umum dan ketenteraman masyarakat (Trantibum), jajaran Satpol PP Bantul melakukan penertiban terhadap reklame tidak berizin dan pedagang yang menempati trotoar fasilitas umum.</p>
                <p>Kegiatan penertiban dilaksanakan dengan mengedepankan pendekatan dialogis dan humanis, memberikan pemahaman kepada warga serta pelaku usaha tentang pentingnya menaati regulasi tata ruang dan izin penyelenggaraan reklame.</p>
                <p>Masyarakat menyambut baik langkah preventif ini demi terciptanya estetika kota dan keamanan pengguna jalan di seluruh wilayah Kabupaten Bantul.</p>
                <div class="news-quote-box quote-danger">
                    <p class="mb-0">"Ketertiban dan ketenteraman wilayah dapat terwujud secara optimal melalui kepatuhan bersama terhadap Peraturan Daerah yang berlaku."</p>
                </div>
                <p>Satpol PP Bantul terus mengimbau seluruh lapisan masyarakat untuk bersama-sama menjaga ketertiban fasilitas umum demi kenyamanan kita bersama.</p>
            '
        ],
        5 => [
            'id' => 5,
            'slug' => 'peresmian-jembatan-baru-tingkatkan-konektivitas-antar-kecamatan',
            'category' => 'PEMBANGUNAN',
            'badgeClass' => 'badge-gov',
            'date' => '12 Okt 2024',
            'title' => 'Peresmian Jembatan Baru Tingkatkan Konektivitas Antar-Kecamatan',
            'image' => 'images/baghround-profil2.png',
            'author' => 'Humas Pemerintah Kabupaten Bantul',
            'excerpt' => 'Proyek pembangunan jembatan strategis yang menghubungkan dua kapanewon utama di Kabupaten Bantul telah resmi dibuka untuk mendukung kelancaran distribusi logistik dan aktivitas warga.',
            'content' => '
                <p class="lead">Proyek pembangunan jembatan strategis yang menghubungkan dua kapanewon utama di Kabupaten Bantul telah resmi dibuka untuk mendukung kelancaran distribusi logistik dan aktivitas warga.</p>
                <p><strong>BANTUL</strong> — Peresmian jembatan ini menjadi bukti nyata komitmen Pemerintah Kabupaten Bantul dalam mempercepat pemerataan konektivitas infrastruktur antar-wilayah.</p>
                <p>Dengan beroperasinya jembatan baru ini, waktu tempuh antar-kapanewon dapat dipangkas signifikan, mempermudah akses pendidikan, layanan kesehatan, serta memicu pertumbuhan sentra-sentra ekonomi baru di pedesaan.</p>
                <div class="news-quote-box quote-warning">
                    <p class="mb-0">"Konektivitas jembatan baru ini diharapkan memperkuat integrasi ekonomi masyarakat Bantul secara merata dan berkeadilan."</p>
                </div>
                <p>Pemerintah Kabupaten Bantul mengimbau masyarakat untuk bersama-sama merawat fasilitas jembatan ini agar memberikan manfaat jangka panjang bagi perkembangan ekonomi daerah.</p>
            '
        ],
        6 => [
            'id' => 6,
            'slug' => 'festival-budaya-tahunan-tarik-ribuan-wisatawan-domestik-dan-mancanegara',
            'category' => 'BUDAYA',
            'badgeClass' => 'badge-community',
            'date' => '09 Okt 2024',
            'title' => 'Festival Budaya Tahunan Tarik Ribuan Wisatawan Domestik dan Mancanegara',
            'image' => 'images/baghround-profil3.png',
            'author' => 'Dinas Kebudayaan Kabupaten Bantul',
            'excerpt' => 'Pemerintah daerah kembali menggelar gelaran akbar festival kebudayaan daerah yang menampilkan kekayaan kesenian tradisional, pameran kriya, dan kuliner khas Bantul.',
            'content' => '
                <p class="lead">Pemerintah daerah kembali menggelar gelaran akbar festival kebudayaan daerah yang menampilkan kekayaan kesenian tradisional, pameran kriya, dan kuliner khas Bantul.</p>
                <p><strong>BANTUL</strong> — Festival budaya tahunan ini berhasil menarik perhatian ribuan wisatawan yang memadati area panggung seni dan stan kerajinan.</p>
                <p>Event ini menjadi sarana edukasi kebudayaan bagi generasi muda sekaligus wadah promosi strategis bagi para pengrajin gerabah Kasongan, batik Giriloyo, dan pelaku industri kreatif daerah.</p>
                <div class="news-quote-box quote-warning">
                    <p class="mb-0">"Melestarikan nilai budaya luhur sekaligus membangkitkan ekonomi kreatif warga Kabupaten Bantul."</p>
                </div>
                <p>Dinas Kebudayaan terus berkomitmen mendukung ekosistem pelestarian tradisi lokal melalui sinergi bersama para seniman dan komunitas masyarakat se-Kabupaten Bantul.</p>
            '
        ],
        7 => [
            'id' => 7,
            'slug' => 'luncurkan-aplikasi-lapor-warga-untuk-pelayanan-publik-cepat-dan-tanggap',
            'category' => 'PELAYANAN',
            'badgeClass' => 'badge-service',
            'date' => '07 Okt 2024',
            'title' => 'Luncurkan Aplikasi \'Lapor Warga\' untuk Pelayanan Publik Cepat dan Tanggap',
            'image' => 'images/baghround-profil4.png',
            'author' => 'Diskominfo Kabupaten Bantul',
            'excerpt' => 'Sebagai langkah percepatan digitalisasi birokrasi, Pemkab Bantul merilis kanal pengaduan digital terpadu \'Lapor Warga\' untuk merespons kebutuhan masyarakat secara transparan.',
            'content' => '
                <p class="lead">Sebagai langkah percepatan digitalisasi birokrasi, Pemkab Bantul merilis kanal pengaduan digital terpadu \'Lapor Warga\' untuk merespons kebutuhan masyarakat secara transparan.</p>
                <p><strong>BANTUL</strong> — Aplikasi \'Lapor Warga\' memungkinkan masyarakat menyampaikan keluhan terkait infrastruktur, gangguan ketertiban umum, hingga administrasi kependudukan langsung dari gawai pintar.</p>
                <p>Setiap aduan akan diteruskan ke dinas teknis dan Satpol PP Bantul dengan sistem pelacakan status penanganan yang dapat dipantau langsung oleh pelapor.</p>
                <div class="news-quote-box quote-warning">
                    <p class="mb-0">"Layanan publik yang cepat, transparan, dan akuntabel demi kepuasan dan kenyamanan seluruh warga."</p>
                </div>
                <p>Masyarakat dapat mengunduh aplikasi ini secara gratis melalui portal resmi Kabupaten Bantul maupun toko aplikasi di smartphone.</p>
            '
        ],
        8 => [
            'id' => 8,
            'slug' => 'catatan-lapangan-pendekatan-humanis-dalam-penertiban',
            'category' => 'JURNAL KEGIATAN',
            'badgeClass' => 'badge-order',
            'date' => '15 Okt 2024',
            'title' => 'Catatan Lapangan: Pendekatan Humanis dalam Penertiban',
            'image' => 'images/baghround-profil.jpg',
            'author' => 'Satuan Polisi Pamong Praja Kabupaten Bantul',
            'excerpt' => 'Catatan mengenai komunikasi, edukasi, dan koordinasi petugas saat melaksanakan penertiban dengan tetap memperhatikan hak masyarakat.',
            'content' => '
                <p class="lead">Penegakan peraturan daerah berjalan lebih baik ketika masyarakat memahami tujuan aturan dan memperoleh ruang untuk menyampaikan kondisi yang dihadapi.</p>
                <p><strong>BANTUL</strong> — Dalam kegiatan penertiban, petugas mengawali pelaksanaan dengan komunikasi dan penyampaian informasi mengenai ketentuan yang berlaku. Pendekatan ini membantu warga dan pelaku usaha memahami langkah yang perlu dilakukan.</p>
                <p>Petugas juga berkoordinasi dengan perangkat daerah terkait agar penanganan persoalan sesuai kewenangan. Apabila diperlukan, warga diarahkan untuk memperoleh informasi mengenai layanan atau tindak lanjut yang tersedia.</p>
                <div class="news-quote-box quote-warning">
                    <p class="mb-0">Penegakan aturan dilakukan secara profesional, proporsional, dan mengedepankan sikap humanis.</p>
                </div>
                <p>Catatan kegiatan ini menekankan pentingnya dialog, pencatatan yang tertib, serta koordinasi dalam mendukung ketenteraman dan ketertiban umum.</p>
            '
        ]
    ];

    /**
     * Ambil semua daftar berita
     */
    public function getAllBerita(): array
    {
        return $this->beritaList;
    }

    /**
     * Ambil berita berdasarkan ID
     */
    public function getBeritaById($id): ?array
    {
        $id = (int) $id;
        return $this->beritaList[$id] ?? null;
    }

    /**
     * Ambil berita terbaru selain ID yang sedang dibuka
     */
    public function getRecentBerita($excludeId = null, int $limit = 4): array
    {
        $result = [];
        $count = 0;

        foreach ($this->beritaList as $item) {
            if ($excludeId !== null && (int)$item['id'] === (int)$excludeId) {
                continue;
            }

            $result[] = $item;
            $count++;

            if ($count >= $limit) {
                break;
            }
        }

        return $result;
    }
}
