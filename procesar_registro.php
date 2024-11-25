<?php
include 'conexion.php';
require 'functions.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar entradas
    $nombre = sanitizarEntrada($conn, $_POST['nombre']);
    $correo = sanitizarEntrada($conn, $_POST['correo']);
    $celular = $conn->real_escape_string($_POST['celular']);
    $contra1 = $conn->real_escape_string($_POST['contra1']);
    $contra2 = $conn->real_escape_string($_POST['contra2']);

    // Validar entradas
    if (!validarTexto($nombre)) {
        echo "<script>alert('El nombre contiene caracteres no válidos');</script>";
    } elseif (!validarCorreo($correo)) {
        echo "<script>alert('El correo no es válido');</script>";
    } elseif (!is_numeric($celular) || strlen($celular) != 8) { // Ejemplo de validación para celular
        echo "<script>alert('El número de celular no es válido');</script>";
    } elseif ($contra1 !== $contra2) {
        echo "<script>alert('Las contraseñas no coinciden');</script>";
    } else {
        // Encriptar la contraseña
        $hash_contra = password_hash($contra1, PASSWORD_DEFAULT);

        // Intentar insertar los datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, correo, celular, contraseña) VALUES ('$nombre', '$correo', '$celular', '$hash_contra')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Usuario registrado correctamente'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Error al registrar el usuario: " . $conn->error . "');</script>";
        }
    }
}
?>
