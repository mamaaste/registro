<?php
include "conexcion1.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $usuario = "admin"; // Cambiar según el usuario logueado

    // Manejo de la imagen
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["imagen"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Verifica si es una imagen real o falsa
    $check = getimagesize($_FILES["imagen"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "El archivo no es una imagen.";
        $uploadOk = 0;
    }

    // Verifica si el archivo ya existe
    if (file_exists($target_file)) {
        echo "Lo siento, el archivo ya existe.";
        $uploadOk = 0;
    }

    // Verifica el tamaño del archivo
    if ($_FILES["imagen"]["size"] > 500000) {
        echo "Lo siento, el archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Permite solo ciertos formatos de archivo
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Lo siento, solo se permiten archivos JPG, JPEG, PNG y GIF.";
        $uploadOk = 0;
    }

    // Verifica si $uploadOk es 0 debido a un error
    if ($uploadOk == 0) {
        echo "Lo siento, tu archivo no fue subido.";
    // Si todo está bien, intenta subir el archivo
    } else {
        if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file)) {
            $imagen = basename($_FILES["imagen"]["name"]);
            // Inserta la publicación en la base de datos
            $sql = "INSERT INTO publicaciones (titulo, descripcion, imagen, usuario) VALUES (?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ssss", $titulo, $descripcion, $imagen, $usuario);
            if ($stmt->execute()) {
                echo "La publicación ha sido agregada exitosamente.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            $stmt->close();
        } else {
            echo "Lo siento, hubo un error al subir tu archivo.";
        }
    }
    $conn->close();
}
?>
