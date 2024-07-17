<?php
include "CONEXION.php";

$nombreCompleto = $_POST['nombreCompleto'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$lugarNacimiento = $_POST['lugarNacimiento'];
$genero = $_POST['genero'];
$nacionalidad = $_POST['nacionalidad'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$identificacion = $_POST['identificacion'];

$sql = $conn->query("INSERT INTO REGISTRO (
    nombreCompleto, 
    fechaNacimiento, 
    lugarNacimiento, 
    genero, 
    nacionalidad, 
    direccion, 
    telefono, 
    email, 
    identificacion
) VALUES (
    '$nombreCompleto', 
    '$fechaNacimiento', 
    '$lugarNacimiento', 
    '$genero', 
    '$nacionalidad', 
    '$direccion', 
    '$telefono', 
    '$email', 
    '$identificacion'
)");

header('Location:listar.php');
?>
