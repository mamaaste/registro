<?php
session_start();
include 'conexcion1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $usuario = $_SESSION['nombres']; // Nombre del usuario que realiza la acción

    // Determinar el tipo de eliminación
    $tipo = 'profesor';

    // Iniciar una transacción
    $conn->begin_transaction();

    try {
        // Eliminar el registro de la tabla profesores
        $sql1 = $conn->prepare("DELETE FROM profesores WHERE id = ?");
        $sql1->bind_param('i', $id);

        if (!$sql1->execute()) {
            throw new Exception("Error al eliminar el profesor: " . $conn->error);
        }

        // Insertar un registro en la tabla historial_eliminaciones
        $sql2 = $conn->prepare("INSERT INTO historial_eliminaciones (profesor_id, usuario, tipo) VALUES (?, ?, ?)");
        $sql2->bind_param('iss', $id, $usuario, $tipo);

        if (!$sql2->execute()) {
            throw new Exception("Error al insertar en el historial de eliminaciones: " . $conn->error);
        }

        // Confirmar la transacción
        $conn->commit();

        // Redirigir de nuevo a la página principal con un mensaje de éxito
        header("Location: regisp.php?mensaje=Profesor eliminado con éxito");
        exit(); // Asegúrate de detener la ejecución del script después de la redirección
    } catch (Exception $e) {
        // Revertir la transacción en caso de error
        $conn->rollback();
        echo $e->getMessage();
    }

    $stmt1->close();
    $stmt2->close();
    $conn->close();
} else {
    echo "ID de profesor no proporcionado.";
}
?>
