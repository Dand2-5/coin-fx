let profileNav = document.querySelector("#profile-nav");

function showPnav() {
  profileNav.classList.toggle("pn-gone");
}

let hamburger = document.querySelector(".hamburger");
let asideNav = document.querySelector(".sidebar");
let dtDrawer = document.querySelector(".dt-drawer");

function hamburgerClick() {
  asideNav.classList.toggle("sideCome");
}
