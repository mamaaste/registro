<?php
session_start();
include 'conexcion1.php';

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $usuario = $_SESSION['nombres']; // Nombre del usuario que realiza la acción

    // Iniciar una transacción
    $conn->begin_transaction();

    try {
        // Eliminar el registro de la tabla alumnos
        $sql1 = $conn->prepare("DELETE FROM alumnos WHERE id = ?");
        $sql1->bind_param('i', $id);

        if (!$sql1->execute()) {
            throw new Exception("Error al eliminar el alumno: " . $conn->error);
        }

        // Insertar un registro en la tabla historial_eliminaciones
        $sql2 = $conn->prepare("INSERT INTO historial_eliminaciones (alumno_id, usuario, tipo) VALUES (?, ?, 'alumno')");
        $sql2->bind_param('is', $id, $usuario);

        if (!$sql2->execute()) {
            throw new Exception("Error al insertar en el historial de eliminaciones: " . $conn->error);
        }

        // Confirmar la transacción
        $conn->commit();

        // Redirigir de nuevo a la página principal con un mensaje de éxito
        header("Location: regiNA.php");
        exit();
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        $conn->rollback();
        echo $e->getMessage();
    }
} else {
    echo "ID de alumno no proporcionado.";
}
?>
