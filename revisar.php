<?php
session_start();
include "conexcion1.php";
$nombre = $_POST['nombres'];
$pass = $_POST['contraseña'];


$sql = "SELECT * FROM administrador WHERE nombres ='$nombre' AND contraseña = '$pass'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['nombres'] ===$nombre && $row['contraseña'] === $pass){
        $_SESSION['nombres'] = $row['nombres'];
        $_SESSION['id'] = $row['id'];
        header("Location: login.php");
    }else{
        


        $sql = "SELECT * FROM profesores WHERE nombre ='$nombre' AND contraseña = '$pass'";
$resultado = mysqli_query($conn, $sql);
if(mysqli_num_rows($resultado) === 1){
    $row = mysqli_fetch_assoc($resultado);
    if($row['nombre'] ===$nombre && $row['contraseña'] === $pass){
        $_SESSION['nombres'] = $row['nombre'];
        $_SESSION['id'] = $row['id'];
        header("Location: login.php");
    }else{
      
      
      
      
      
      
      
      
        header("Location: index.html");
    }
}else{
    header("Location: index.html");
}






    }
}else{
    header("Location: index.html");
}
?>