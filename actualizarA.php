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
    $grado = $_POST['grado']; // Campo ajustado para "grado" en lugar de "asig"

    // Actualizar el alumno en la base de datos
    $sql = "UPDATE alumnos SET nombre=?, apellido=?, email=?, fechaD=?, telefono=?, grado=? WHERE id=?";
    $stmt = $conn->prepare($sql); // Prepara la consulta SQL

    if ($stmt === false) {
        // Verifica si hubo un error al preparar la declaración
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Asocia los parámetros
    $stmt->bind_param("ssssssi", $nombre, $apellido, $email, $fechaD, $telefono, $grado, $id);

    if ($stmt->execute()) {
        // Redirige a la página de éxito después de una actualización exitosa
        header("Location: regiNA.php?con exito");
        exit(); // Asegúrate de llamar a exit() después de header para evitar que se ejecute más código
    } else {
        // Mensaje de error
        echo "Error al actualizar el alumno: " . $stmt->error;
    }

    $stmt->close(); // Cierra la declaración
    $conn->close(); // Cierra la conexión
} else {
    echo "Método de solicitud no válido.";
}
?>
