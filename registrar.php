<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Inventario</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Inventario</h1>
    </header>
    <nav> 
        <a href="index.php" class="botonesIndex">
            <div class="contIcono">
                <img src="IMG/home.png" title="Ir a Inicio" alt="iconoHome" class="iconos">
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
                <img src="IMG/exit.png" title="Cerrar Sesión" alt="iconoSalir" class="iconos">
            </div>
        </a>
    </nav>

    <main>
        <div class="registroParte">
            <form class="registrarForm" action="registro_parte.php" method="POST" enctype="multipart/form-data">
                <h2>Registrar Nueva Parte</h2>
                
                <label for="nombre">Nombre de la Parte:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ej. Bujía de encendido" required>

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" placeholder="Ej. Toyota" required>

                <label for="modelo">Modelo del Auto:</label>
                <input type="text" id="modelo" name="modelo" placeholder="Ej. Corolla" required>

                <label for="anio">Año:</label>
                <input type="number" id="anio" name="anio" min="1900" max="2100" placeholder="Ej. 2023" required>

                <label for="descripcion">Descripción Breve:</label>
                <textarea id="descripcion" name="descripcion" rows="4" placeholder="Ej. Pieza nueva, compatible con modelos entre 2010 y 2020" required></textarea>

                <label for="ubicacion">Ubicación del Punto de Venta:</label>
                <select id="ubicacion" name="ubicacion" required>
                    <option value="Taller UTP">Taller UTP</option>
                    <option value="Taller Marquez">Taller Marquez</option>
                    <option value="Taller Oscar">Taller Oscar</option>
                </select>

                <label for="imagen">Imagen del Producto:</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" required>

                <button type="submit">Registrar</button>
            </form>
        </div>
        
    </main>
    
</body>
</html>