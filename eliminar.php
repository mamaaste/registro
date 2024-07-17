<?php
include "CONEXION.php";
$id=$_GET['id'];

 $conn->query("DELETE FROM REGISTRO WHERE id='".$id."'");

    header('Location:listar.php');

 


?>