<?php

// Evita inyección SQL y caracteres especiales
function sanitizarEntrada($conexion, $dato) {
    $dato = trim($dato); // Elimina espacios innecesarios
    $dato = stripslashes($dato); // Elimina barras invertidas
    $dato = htmlspecialchars($dato); // Convierte caracteres especiales en entidades HTML
    $dato = mysqli_real_escape_string($conexion, $dato); // Escapa caracteres para SQL
    return $dato;
}

// Valida que una cadena no tenga caracteres no deseados
function validarTexto($texto) {
    // Define un patrón, por ejemplo, solo letras y espacios
    return preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/", $texto);
}

// Ejemplo de validación de correo electrónico
function validarCorreo($correo) {
    return filter_var($correo, FILTER_VALIDATE_EMAIL);
}

// Más funciones generales...
?>
