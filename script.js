const toggleSearch = document.getElementById("toggleSearch");
const searchBox = document.getElementById("searchBox");

toggleSearch.addEventListener("click", () => {
    // Alternar visibilidad de la barra de búsqueda
    if (searchBox.style.display === "none" || !searchBox.style.display) {
        searchBox.style.display = "flex";
    } else {
        searchBox.style.display = "none";
    }
});

const searchButton = document.getElementById("searchButton");
searchButton.addEventListener("click", () => {
    const nombre = document.getElementById("nombre").value;
    const marca = document.getElementById("marca").value;
    const modelo = document.getElementById("modelo").value;
    const anio = document.getElementById("anio").value;

    console.log("Buscando...");
    console.log(`Nombre: ${nombre}, Marca: ${marca}, Modelo: ${modelo}, Año: ${anio}`);
    alert(`Buscando: \nNombre: ${nombre}\nMarca: ${marca}\nModelo: ${modelo}\nAño: ${anio}`);
});
