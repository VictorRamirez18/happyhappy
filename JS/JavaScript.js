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