<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Contraseña</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilos3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: url('S.jpeg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body>
<div class="login-container">
    <h2>Recuperar Contraseña</h2>
    <form action="evalu.php" method="post">
        <i>Correo</i>
        <div class="input-container">
            <input type="email" placeholder="Correo electrónico" name="correo" required>
        </div>
        <i>Nueva Contraseña</i>
        <div class="input-container">
            <input type="password" placeholder="Contraseña" name="contraseña" required>
        </div>
        <div>
            <button type="submit" class="submit">Recuperar Contraseña</button>
        </div>
    </form>
</div>
</body>
</html>
