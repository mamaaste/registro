<?php
include "conexcion1.php"; // Incluye el archivo de conexión

// Obtener el ID del alumno desde la URL
$id = $_GET['id'];

// Consultar los datos del alumno
$sql = "SELECT * FROM alumnos WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$alumno = $result->fetch_assoc();
$stmt->close();

// Mostrar el formulario con los datos del alumno
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Editar Alumno</title>
    <!-- Incluye CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Editar Alumno</h1>
        <form action="actualizarA.php" method="post">
            <input type="hidden" name="id" value="<?php echo $alumno['id']; ?>">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $alumno['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $alumno['apellido']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $alumno['email']; ?>">
            </div>
            <div class="form-group">
                <label for="fechaD">Fecha de Nacimiento</label>
                <input type="date" class="form-control" id="fechaD" name="fechaD" value="<?php echo $alumno['fechaD']; ?>">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $alumno['telefono']; ?>">
            </div>
            <div class="form-group">
                <label for="grado">Grado</label>
                <select class="form-control" id="grado" name="grado">
                    <option value="PRIMERO" <?php echo $alumno['grado'] == 'PRIMERO' ? 'selected' : ''; ?>>PRIMERO PRIMARIA</option>
                    <option value="SEGUNDO" <?php echo $alumno['grado'] == 'SEGUNDO' ? 'selected' : ''; ?>>SEGUNDO PRIMARIA</option>
                    <option value="TERCERO" <?php echo $alumno['grado'] == 'TERCERO' ? 'selected' : ''; ?>>TERCERO PRIMARIA</option>
                    <option value="CUARTO" <?php echo $alumno['grado'] == 'CUARTO' ? 'selected' : ''; ?>>CUARTO PRIMARIA</option>
                    <option value="QUINTO" <?php echo $alumno['grado'] == 'QUINTO' ? 'selected' : ''; ?>>QUINTO PRIMARIA</option>
                    <option value="SEXTO" <?php echo $alumno['grado'] == 'SEXTO' ? 'selected' : ''; ?>>SEXTO PRIMARIA</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <!-- Incluye JS de Bootstrap y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
