function toggleMenu() {
    const menu = document.getElementById("menu-main-menu");
    if (menu.style.display === "flex") {
        menu.style.display = "none";
    } else {
        menu.style.display = "flex";
    }
}