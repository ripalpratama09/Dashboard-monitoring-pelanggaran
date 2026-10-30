/**
 * ============================================================
 * PROFIL & BERITA INTERACTION SCRIPT
 * ============================================================
 */

document.addEventListener("DOMContentLoaded", () => {
    // 1. Tampilkan Area Konten dan Top Nav Menu saat klik tombol Hero 'Selengkapnya >>'
    const heroBtn = document.getElementById("btnHeroSelengkapnya") || document.querySelector(".profile-detail-button");
    const expandedArea = document.getElementById("profileExpandedArea");
    const targetSection = document.getElementById("profil-section");
    const topNavMenu = document.getElementById("topNavProfileMenu");

    // Fungsi untuk membuka konten dan memunculkan navbar menu atas
    const showProfileContent = (smoothScroll = true) => {
        // Tampilkan menu navigasi atas (Home, Profil Kabupaten, Profil Satpol PP)
        if (topNavMenu) {
            topNavMenu.classList.remove("profile-menu-hidden");
            topNavMenu.classList.add("profile-menu-visible");
        }

        // Tampilkan area konten profil
        if (expandedArea && !expandedArea.classList.contains("show")) {
            expandedArea.classList.add("show");
        }

        // Scroll halus ke target section
        if (smoothScroll && targetSection) {
            setTimeout(() => {
                targetSection.scrollIntoView({
                    behavior: "smooth",
                    block: "start"
                });
            }, 60);
        }
    };

    if (heroBtn) {
        heroBtn.addEventListener("click", (e) => {
            e.preventDefault();
            showProfileContent(true);
        });
    }

    // Cek jika URL memiliki hash #profil-section atau serupa saat load awal
    if (window.location.hash === "#profil-section" || window.location.hash === "#profileExpandedArea") {
        showProfileContent(false);
    }
});

