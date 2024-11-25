<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link rel="Stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Inventario</h1>
    </header>
    <nav> 
        <a href="index.php" class="botonesIndex">
            <div class="contIcono">
                <img src="IMG/home.png" alt="iconoHome" class="iconos">
            </div>
        </a>
        <a href="registrar.php" class="botonesIndex">
            <div class="contIcono">
                <img src="IMG/formulario.png" title="Registro" alt="iconoRegistro" class="iconos">
            </div>
        </a>
        <div class="search-container">
            <button id="toggleSearch">🔍 Buscar</button>
            <div class="search-box" id="searchBox">
                <input type="text" id="nombre" placeholder="Nombre">
                <input type="text" id="marca" placeholder="Marca">
                <input type="text" id="modelo" placeholder="Modelo">
                <div class="filter">
                    <label for="anio">Filtrar por año:</label>
                    <select id="anio">
                        <option value="">Seleccionar</option>
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                        <option value="2020">2020</option>
                        <option value="2019">2019</option>
                        <option value="2018">2018</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                    </select>
                </div>
                <button id="searchButton">Buscar</button>
            </div>
        </div>
        <script src="script.js"></script>

        <a href="login.php" class="botonesIndex">
            <div class="contIcono">
                <img src="IMG/exit.png" alt="iconoSalir" class="iconos">
            </div>
        </a>
    </nav>

    <main>

        <h2>RESULTADOS PARA: </h2>

        <div class="items">
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
            <a class="enlace" href="">
                <div class="contenedorMasVendidos">
                    <img class="imagenProducto" src="IMG/defensaDelKiaPic.webp" alt="DefensaDelanteraKIAPicanto" >
                    <p class="descripcionProducto">Defensa delantera KIA Picanto</p>
                </div>
            </a>
        </div>

    </main>
    
</body>
</html>