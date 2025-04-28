// Función para mostrar/ocultar el menú lateral
function toggleMenu() {
    var menu = document.getElementById("efecto_menu");
    if (menu.style.width === "200px") {
        menu.style.width = "0";
    } else {
        menu.style.width = "200px";
    }
}
