const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");
const navLink = document.querySelectorAll(".nav-link");

hamburger.addEventListener("click", openMenu);
navLink.forEach(n => n.addEventListener("click", closeMenu));

function openMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

function closeMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.remove("active");
}



//mail validation function

