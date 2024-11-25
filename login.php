<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="IMG/favicon.ico">
    <link rel="Stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Sistema de Inventario</h1>
    </header>

    <main>
        <div class="entradaLogin">
            <form class="loginForm" action="procesar_login.php" method="POST">
                <h2>Iniciar Sesión</h2>
                <label for="email">Correo:</label>
                <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>

                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                
                <button type="submit">Iniciar Sesión</button>
            </form>
            <div class="contenedorRegresar">
                <a href="registro.php" class="enlace">Registrarme</a>
            </div>
        </div>
    </main>

</body>
</html>
