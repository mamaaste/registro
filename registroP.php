<?php
include "conexcion1.php";


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$fecha_D = $_POST['fechaD'];
$telefono = $_POST['telefono'];
$asig = $_POST['asig'];
$contraseña = md5($_POST['contraseña']);





$result = $conn->query("SELECT * FROM profesores WHERE nombre = '$nombre' AND email = '$email'");


if ($result->num_rows > 0) {
    echo "el nombre ingresado o correo ya existe.";
} else {

    $sql = $conn->query("INSERT INTO profesores(nombre,apellido,email,fechaD,telefono,asig,contraseña) VALUES ('$nombre','$apellido','$email','$fecha_D','$telefono','$asig','$contraseña')");
    
 
    header('Location: regisp.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>verificacion</title>
</head>
<body>
<button type="submit" class="nav-ink"> <a href="regisp.php">regresar</a></button>
</body>
</html>