<?php
include "conexcion1.php";

$correo = $_POST['correo'];
$nueva_contraseña = md5($_POST['contraseña']); // Encriptar la nueva contraseña

// Primero, intentamos actualizar la contraseña en la tabla de administradores
$sql_admin = "UPDATE administrador SET contraseña='$nueva_contraseña' WHERE nombres='$correo'";

if (mysqli_query($conn, $sql_admin)) {
    if (mysqli_affected_rows($conn) > 0) {
        $mensaje = "Contraseña actualizada para el administrador.";
        $tipo_mensaje = "success";
    } else {
        // Si no se actualizó, intentamos con la tabla de profesores
        $sql_prof = "UPDATE profesores SET contraseña='$nueva_contraseña' WHERE email='$correo'";
        
        if (mysqli_query($conn, $sql_prof)) {
            if (mysqli_affected_rows($conn) > 0) {
                $mensaje = "Contraseña actualizada para el profesor.";
                $tipo_mensaje = "success";
            } else {
                $mensaje = "No se encontró un usuario con ese correo.";
                $tipo_mensaje = "danger";
            }
        } else {
            $mensaje = "Error al actualizar la contraseña: " . mysqli_error($conn);
            $tipo_mensaje = "danger";
        }
    }
} else {
    $mensaje = "Error al actualizar la contraseña para el administrador: " . mysqli_error($conn);
    $tipo_mensaje = "danger";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Recuperación de Contraseña</title>
    <!-- Enlaza el CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 500px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="alert alert-<?php echo $tipo_mensaje; ?> alert-dismissible fade show" role="alert">
        <?php echo $mensaje; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <a href="index.html" class="btn btn-primary">Regresar al Inicio</a>
</div>

<!-- Enlaza los scripts de Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

