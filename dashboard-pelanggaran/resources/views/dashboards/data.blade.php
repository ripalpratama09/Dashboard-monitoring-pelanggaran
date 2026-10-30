@extends('layouts.app')

@section('title', 'Data')

@section('content')

@include('partials.sidebar')

<div id="sidebarOverlay" class="sidebar-overlay"></div>

<div class="main-content">

    @include('partials.navbar')

    <div class="container-fluid p-4">

        <!-- Modal -->
        <div class="modal fade"
            id="sedataModal"
            tabindex="-1"
            data-bs-backdrop="static"
            data-bs-keyboard="false">

            <div class="modal-dialog modal-dialog-centered">

                <div class="modal-content border-0 shadow-lg">

                    <div class="modal-header border-0">

                        <h5 class="modal-title">
                            Portal Data Resmi
                        </h5>

                        <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                        </button>

                    </div>

                    <div class="modal-body text-center">

                        <img
                            src="{{ asset('images/logosedatabantul.png') }}"
                            class="img-fluid mb-4"
                            style="max-width:220px;">

                        <h4 class="fw-bold">

                            Data Pelanggaran Satpol PP

                        </h4>

                        <p class="text-muted mt-3">

                            Data lengkap pelanggaran Satpol PP Kabupaten Bantul
                            tersedia pada Portal Sedata Bantul.

                            <br><br>

                            Klik tombol di bawah untuk membuka website resmi.

                        </p>

                        <a
                            href="https://data.bantulkab.go.id/search?search_data=&sortdata=statistik&instansi=&tp=Topik&rangeyear=2024+-+2026&indicator_class=Klasifikasi&topik_category=Topik&bidang_urusan=1.05&nama_instansi=11300&kategori_geo=&owner_geo=&ppage=200"
                            target="_blank"
                            class="btn btn-success px-4">

                            <i class="bi bi-box-arrow-up-right me-2"></i>

                            Kunjungi Portal Sedata

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const modalElement = document.getElementById('sedataModal');
        const modal = new bootstrap.Modal(modalElement);

        modal.show();

        modalElement.addEventListener('hidden.bs.modal', function() {

            // Hapus backdrop Bootstrap
            document.querySelectorAll('.modal-backdrop').forEach(el => el.remove());

            // Kembalikan body seperti semula
            document.body.classList.remove('modal-open');
            document.body.style.overflow = '';
            document.body.style.paddingRight = '';

            // ===== Buka sidebar otomatis =====
            const sidebar = document.querySelector(".sidebar");
            const overlay = document.getElementById("sidebarOverlay");
            const mainContent = document.querySelector(".main-content");
            const openBtn = document.getElementById("toggleSidebar");

            sidebar?.classList.add("show");
            overlay?.classList.add("show");
            mainContent?.classList.add("shift");

            if (openBtn) {
                openBtn.style.opacity = "0";
            }

        });

    });
</script>
@endpush