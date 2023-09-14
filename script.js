const navbar = document.querySelector("navbar");
const navLinks = document.querySelector(".nav-links-wrapper");
const menuBtn = document.querySelector(".navbar .bx-menu");
const closeBtn = document.querySelector(".nav-menu-close-btn");

const openModal = document.getElementById("modal-open");
const closeModal = document.getElementById("modal-close");
const modal = document.getElementById("modal");

menuBtn.addEventListener("click", () => {
  navLinks.style.left = "0";
});

closeBtn.addEventListener("click", () => {
  navLinks.style.left = "-100%";
});

openModal.addEventListener("click", () => modal.classList.add("show-modal"));

closeModal.addEventListener("click", () =>
  modal.classList.remove("show-modal")
);

window.addEventListener("click", (e) =>
  e.target == modal ? modal.classList.remove("show-modal") : false
);
