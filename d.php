<?php
include "conexcion1.php";
$pass = md5("hola123");
$sql = $conn->query("INSERT INTO administrador (nombres, apellidos, fechaD, encargado, telefono, contraseña ) 
VALUES ('nelson ', 'maas', UNIX_TIMESTAMP() ,'yo','46274252','$pass')");

header('Location: index.html');

?>