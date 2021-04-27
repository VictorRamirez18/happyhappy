function page() {
    pagina = document.getElementById('title').text;
    switch (pagina) {
        case "Happy Happy":
            document.getElementById('navIndex').style.background = "#CFE8E1";
            break;
        case "Productos Happy Happy":
            document.getElementById('navProductos').style.background = "#CFE8E1";
            break;
        case "Empresa Happy Happy":
            document.getElementById('navEmpresa').style.background = "#CFE8E1";
            break;
        case "Sucursales Happy Happy":
            document.getElementById('navSucursal').style.background = "#CFE8E1";
            break;
    }
}
ScrollReveal().reveal('.aniBottom', {
    duration: 1500,
    origin: "bottom",
    distance: "-100px"
});
ScrollReveal().reveal('.aniTop', {
    duration: 1500,
    origin: "top",
    distance: "-100px"
});
ScrollReveal().reveal('.aniRight', {
    duration: 3000,
    origin: "rigth",
    distance: "-100px"
});
ScrollReveal().reveal('.aniLeft', {
    duration: 4000,
    origin: "left",
    distance: "-100px"
});
ScrollReveal().reveal('.aniOpacity', {
    duration: 2000,
    opacity: 0.1,
});
ScrollReveal().reveal('.aniWhatsapp', {
    duration: 5000,
    origin: "left",
    distance: "-100px"
});
ScrollReveal().reveal('.aniCardProducto', {
    duration: 2000,
    opacity: 0.4
});
ScrollReveal().reveal('.aniRotate', {
    duration: 3000,
    rotate: {
        x: 0,
        y: 180,
    }
});