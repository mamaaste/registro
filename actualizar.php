<?php
include "conexcion1.php"; // Incluye el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fechaD = $_POST['fechaD'];
    $telefono = $_POST['telefono'];
    $asig = $_POST['asig'];

    // Actualizar el profesor en la base de datos
    $sql = "UPDATE profesores SET nombre=?, apellido=?, email=?, fechaD=?, telefono=?, asig=? WHERE id=?";
    $stmt = $conn->prepare($sql); // Prepara la consulta SQL

    if ($stmt === false) {
        // Verifica si hubo un error al preparar la declaración
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Asocia los parámetros
    $stmt->bind_param("ssssisi", $nombre, $apellido, $email, $fechaD, $telefono, $asig, $id);

    if ($stmt->execute()) {
        // Redirige a login.php después de una actualización exitosa
        header("Location: regisp.php");
        exit(); // Asegúrate de llamar a exit() después de header para evitar que se ejecute más código
    } else {
        // Mensaje de error
        echo "Error al actualizar el profesor: " . $stmt->error;
    }

    $stmt->close(); // Cierra la declaración
    $conn->close(); // Cierra la conexión
} else {
    echo "Método de solicitud no válido.";
}
?>
