const button = document
    .getElementById("hamburger")
    .addEventListener("click", show);
const menu = document.getElementById("menu");

function show() {
    menu.style.display = "hidden";
}
