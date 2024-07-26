<?php
include "conexcion1.php";

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $fechaD = trim($_POST['fechaD']);
    $telefono = trim($_POST['telefono']);
    $asig = trim($_POST['asig']);
    $contraseña = trim($_POST['contraseña']);

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($fechaD) || empty($telefono) || empty($asig) || empty($contraseña)) {
        $error_message = "Todos los campos son obligatorios.";
    } else {
        // Consultar la base de datos para verificar si el email ya existe en ambas tablas
        $sql = "SELECT email FROM alumnos WHERE email = ? UNION SELECT email FROM profesores WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error_message = "El email ya está registrado en la base de datos.";
        } else {
            // Insertar los datos en la base de datos
            $sql = "INSERT INTO profesores (nombre, apellido, email, fechaD, telefono, asig, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sssssss", $nombre, $apellido, $email, $fechaD, $telefono, $asig, $contraseña);

            if ($stmt->execute()) {
                header("Location: regisp.php"); // Redirige a una página de éxito
                exit(); // Asegúrate de detener la ejecución del script después de la redirección
            } else {
                $error_message = "Error al registrar los datos: " . $conn->error;
            }

            $stmt->close();
        }
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Profesores</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>ERROR</h2>
    

    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger mt-3" role="alert">
            <?php echo $error_message; ?>
        </div>
        <a href="javascript:history.back()" class="btn btn-secondary mt-2">Regresar</a>
    <?php endif; ?>
</div>
</body>
</html>
