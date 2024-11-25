<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Inventario</h1>
    </header>
    <nav>
        
    </nav>
    <main>
        <div class="entradaRegistro">
            <form class="registroForm" action="procesar_registro.php" method="POST">
                <h2>Registro</h2>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre" required>
                
                <label for="correo">Correo:</label>
                <input type="email" id="correo" name="correo" placeholder="Ingresa tu correo" required>

                <label for="celular">Celular:</label>
                <input type="numer" id="celular" name="celular" placeholder="Ingresa tu numero celular" required>

                <label for="contra1">Contraseña:</label>
                <input type="password" id="contra1" name="contra1" placeholder="Ingresa tu contraseña" required>

                <label for="contra2">Repetir contraseña:</label>
                <input type="password" id="contra2" name="contra2" placeholder="Ingresa tu contraseña" required>

                <button type="submit">Registrarme</button>
            </form>
            <div class="contenedorRegresar">
                <a href="login.php" class="enlace">Regresar a Iniciar sesión</a>
            </div>
        </div>
    </main>

</body>
</html>
