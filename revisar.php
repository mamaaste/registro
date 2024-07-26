<?php
session_start();
include "conexcion1.php";

// Recuperar las credenciales del formulario
$nombre = $_POST['nombres'];
$pass = md5($_POST['contraseña']); // Encriptar contraseña

// Verificar en la tabla de administrador
$sql_admin = "SELECT * FROM administrador WHERE nombres = '$nombre' AND contraseña = '$pass'";
$resultado_admin = mysqli_query($conn, $sql_admin);

if (mysqli_num_rows($resultado_admin) === 1) {
    // Usuario administrador encontrado
    $row = mysqli_fetch_assoc($resultado_admin);
    $_SESSION['nombres'] = $row['nombres'];
    $_SESSION['id'] = $row['id'];
    header("Location: login.php");
} else {
    // Verificar en la tabla de profesores
    $sql_profesor = "SELECT * FROM profesores WHERE nombre = '$nombre' AND contraseña = '$pass'";
    $resultado_profesor = mysqli_query($conn, $sql_profesor);

    if (mysqli_num_rows($resultado_profesor) === 1) {
        // Usuario profesor encontrado
        $row = mysqli_fetch_assoc($resultado_profesor);
        $_SESSION['nombres'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        header("Location: loginP.php");
    } else {
        // Credenciales no válidas
        header("Location: index.html");
    }
}
?>
