<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css"> <!-- Enlaza el archivo de estilos -->
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
    <h2>recuperar contraseña</h2>
    <form action="evalu.php" method= "post">

    <i>nombre</i>
    <div class="input-container">
        
        <input type="text" placeholder="nombre" name="nombre" required>
    </div>

    <i> correo </i>
    <div class="input-container">
        
        <input type="email" placeholder="correo electronico" name="correo" required>
    </div>
    <i> telefono </i>
    <div class="input-container">
        
        <input type="number" placeholder="numero de telefono" name="telefono" required>
    </div>

    <i> nueva contraseña </i>
    <div class="input-container">
        
        <input type="password" placeholder="contraseña" name="contraseña" required>
    </div>

    <button type="submit" class="nav-ink">REGISTRAR</button>
    </form>

  
    
</div>

 
</body>
</html>
