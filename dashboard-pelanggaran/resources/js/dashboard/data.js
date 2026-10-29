document.addEventListener("DOMContentLoaded", () => {
    const modalElement = document.getElementById("sedataModal");

    if (!modalElement) return;

    const modal = new bootstrap.Modal(modalElement);

    modal.show();
});
