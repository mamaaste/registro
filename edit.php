<?php
include "CONEXION.php";
$id=$_GET['id'];
$nombreCompleto=$_POST['nombreCompleto'];
$fechaNacimiento=$_POST['fechaNacimiento'];
$lugarNacimiento=$_POST['lugarNacimiento'];
$genero=$_POST['genero'];
$nacionalidad=$_POST['nacionalidad'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$identificacion=$_POST['identificacion'];
 $sql=$conn->query("UPDATE REGISTRO SET nombreCompleto='".$nombreCompleto."',fechaNacimiento='".$fechaNacimiento."',lugarNacimiento='".$lugarNacimiento."',genero='".$genero.",nacionalidad='".$nacionalidad."',direccion='".$direccion."',telefono='".$telefono."',email='".$email."',identificacion='".$identificacion."'WHERE id='".$id."'");
 if($sql==1){
    header('Location:listar.php');

 }


?>
