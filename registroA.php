<?php
include "conexcion1.php";

$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);
    $apellido = trim($_POST['apellido']);
    $email = trim($_POST['email']);
    $fechaD = trim($_POST['fechaD']);
    $telefono = trim($_POST['telefono']);
    $grado = trim($_POST['grado']);
    $contraseña = trim($_POST['contraseña']);

    // Verificar que los campos no estén vacíos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($fechaD) || empty($telefono) || empty($grado) || empty($contraseña)) {
        $error_message = "Todos los campos son obligatorios.";
    } else {
        // Verificar si el email ya está registrado en la tabla alumnos
        $sql_check_alumnos = "SELECT id FROM alumnos WHERE email=?";
        $stmt_check_alumnos = $conn->prepare($sql_check_alumnos);
        $stmt_check_alumnos->bind_param("s", $email);
        $stmt_check_alumnos->execute();
        $stmt_check_alumnos->store_result();

        // Verificar si el email ya está registrado en la tabla profesores
        $sql_check_profesores = "SELECT id FROM profesores WHERE email=?";
        $stmt_check_profesores = $conn->prepare($sql_check_profesores);
        $stmt_check_profesores->bind_param("s", $email);
        $stmt_check_profesores->execute();
        $stmt_check_profesores->store_result();

        if ($stmt_check_alumnos->num_rows > 0 || $stmt_check_profesores->num_rows > 0) {
            $error_message = "El email ya está registrado en la base de datos.";
        } else {
            // Insertar los datos en la base de datos
            $sql_insert = "INSERT INTO alumnos (nombre, apellido, email, fechaD, telefono, grado, contraseña) VALUES (?, ?, ?, ?, ?, ?, ?)";
            $stmt_insert = $conn->prepare($sql_insert);
            $stmt_insert->bind_param("sssssss", $nombre, $apellido, $email, $fechaD, $telefono, $grado, $contraseña);

            if ($stmt_insert->execute()) {
                header("Location: regiNA.php");
                exit(); // Asegúrate de salir después de redirigir
            } else {
                $error_message = "Error al registrar el alumno: " . $conn->error;
            }

            $stmt_insert->close();
        }

        $stmt_check_alumnos->close();
        $stmt_check_profesores->close();
        $conn->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Alumnos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <h2>ERROR</h2>
    <?php if (!empty($error_message)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message; ?>
        </div>
        <a href="javascript:history.back()" class="btn btn-secondary">Regresar</a>
    <?php endif; ?>
</div>
</body>
</html>
