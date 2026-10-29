const sidebar = document.querySelector(".sidebar");
const overlay = document.getElementById("sidebarOverlay");
const mainContent = document.querySelector(".main-content");

const openBtn = document.getElementById("toggleSidebar");
const closeBtn = document.getElementById("closeSidebar");

function openSidebar() {
    sidebar.classList.add("show");

    overlay.classList.add("show");

    mainContent.classList.add("shift");

    openBtn.style.opacity = "0";
}

function closeSidebar() {
    sidebar.classList.remove("show");

    overlay.classList.remove("show");

    mainContent.classList.remove("shift");

    openBtn.style.opacity = "1";
}

openBtn?.addEventListener("click", openSidebar);

closeBtn?.addEventListener("click", closeSidebar);
