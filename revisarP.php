<?php
session_start();
include "conexcion1.php";
$nombre = $_POST['nombre'];
$pass = $_POST['contraseña'];


$sql = "SELECT * FROM profesores WHERE nombre ='$nombre' AND contraseña = '$pass'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['nombre'] ===$nombre && $row['contraseña'] === $pass){
        $_SESSION['nombre'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        header("Location: login.php");

        
    }else{
    
        header("Location: index.html");
    }
}else{
    header("Location: index.html");
}
?>