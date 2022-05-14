const hamburger = document.querySelector(".hamburger-bars")
const mainNavToggle = document.querySelector(".main-nav")
const mainNavItem = document.querySelectorAll(".main-nav__item")

mainNavToggle.addEventListener("click", e => {
    document.body.classList.toggle("is-open")
})


//OLD VERSION

// openMenu);
// mainNavItem.forEach(n => n.addEventListener("click", closeMenu));

// function openMenu() {
//     hamburger.classList.toggle("active");
//     mainNav.classList.toggle("active");
// }

// function closeMenu() {
//     hamburger.classList.toggle("active");
//     mainNav.classList.remove("active");
// }



//mail validation function

