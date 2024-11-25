<?php
session_start();
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar la contraseña
        if (password_verify($password, $user['contraseña'])) {
            // Guardar información en la sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['nombre'];
            header("Location: index.php");
        } else {
            echo "<script>alert('Contraseña incorrecta'); window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('No se encontró una cuenta con ese correo'); window.location.href = 'login.php';</script>";
    }
}
?>
