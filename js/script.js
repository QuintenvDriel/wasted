let nav = document.getElementById("nav");

let hamburgerMenu = document.getElementById("HamburgerMenu");
hamburgerMenu.addEventListener("click", sideNavToggle);

let hidden = true;

function sideNavToggle() {
    if (hidden) {
        nav.classList.remove("navHide");
        nav.classList.add("navShow");
        hidden = false;
    } else {
        nav.classList.remove("navShow");
        nav.classList.add("navHide");
        hidden = true;
    }
}