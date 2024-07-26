<?php
session_start();
if (!isset($_SESSION['nombres']) || !isset($_SESSION['id'])) {
    header('location: index.html');
}
echo "administrador ". $_SESSION['nombres'];
?> 


<!DOCTYPE html>
<html>

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

  <title>Heustonn</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Heustonn
            </span>
          </a>
          <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item ">
                  <a class="nav-link" href="login.php">inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="regisP.php"> registro de maestros </a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="regiNA.php"> registro de alumnos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="regisCUR.php">ver cursos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="cerrar.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
          <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
          </form>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- service section -->
  <section class="contact_section layout_padding">
    <div class="custom_heading-container">
        <h3 class="">
            REGISTRAR ALUMNOS
        </h3>
    </div>
    <div class="container layout_padding2-top">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <form action="registroA.php" method="post">
                    <div class="form-group">
                        <label for="nombre">Nombres</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellidos</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="fechaD">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fechaD" name="fechaD" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Número de Teléfono" required>
                    </div>
                    <div class="form-group">
                        <label for="grado">Grado</label>
                        <select class="form-control" id="grado" name="grado" required>
                            <option value="" disabled selected>Seleccione un grado</option>
                            <option value="PRIMERO">PRIMERO PRIMARIA</option>
                            <option value="SEGUNDO">SEGUNDO PRIMARIA</option>
                            <option value="TERCERO">TERCERO PRIMARIA</option>
                            <option value="CUARTO">CUARTO PRIMARIA</option>
                            <option value="QUINTO">QUINTO PRIMARIA</option>
                            <option value="SEXTO">SEXTO PRIMARIA</option>
                            <option value="NO ASIGNADO">NO ASIGNADO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="contraseña">Contraseña</label>
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    

    <script>
        document.getElementById('registroForm').addEventListener('submit', function(event) {
            let valid = true;
            const fields = ['nombre', 'apellido', 'email', 'fechaD', 'telefono', 'grado', 'contraseña'];
            fields.forEach(function(field) {
                const input = document.getElementById(field);
                const errorDiv = document.getElementById('error-' + field);
                if (input && input.value.trim() === '' && field !== 'apellido') { // Campo 'apellido' no es obligatorio
                    errorDiv.textContent = 'Este campo es obligatorio';
                    valid = false;
                } else {
                    errorDiv.textContent = '';
                }
            });
            if (!valid) {
                event.preventDefault(); // Detener el envío del formulario
            }
        });
    </script>
   </section>



   <section class="about_section layout_padding">
   
   <?php
include "conexcion1.php";

// Consultar la base de datos
$sql = "SELECT id, nombre, apellido, email, fechaD, telefono, grado FROM alumnos";
if ($result = $conn->query($sql)) {
    // La consulta fue exitosa
} else {
    echo "Error al consultar la base de datos: " . $conn->error;
    exit();
}
?>


    <div class="container layout_padding2-top">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Email</th>
                            <th>Fecha de Registro</th>
                            <th>Teléfono</th>
                            <th>Grado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result->num_rows > 0): ?>
                            <?php while($row = $result->fetch_assoc()): ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td><?php echo $row["nombre"]; ?></td>
                                    <td><?php echo $row["apellido"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["fechaD"]; ?></td>
                                    <td><?php echo $row["telefono"]; ?></td>
                                    <td><?php echo $row["grado"]; ?></td>
                                    <td>
                                    <!-- Botón de Editar -->
                                    <a href="editarA.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Editar</a>
                                    <!-- Botón de Borrar -->
                                    <form action="eliminarA.php" method="post" style="display:inline;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                    </form>
                                </td>
                                </tr>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="7">No se encontraron resultados</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Incluir Bootstrap JS y dependencias -->
  



  
      <div class="container">
        <div class="btn-box">
          <a href="">
            Read More
          </a>
          <hr>
        </div>
      </div>
    </section>





</section>



  <!-- end service section -->

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info-logo">
            <h2>
              Heustonn
            </h2>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-nav">
            <h4>
              Navigation
            </h4>
            <ul>
              <li>
                <a href="index.html">
                  Home
                </a>
              </li>
              <li>
                <a href="about.html">
                  About
                </a>
              </li>
              <li>
                <a href="service.html">
                  Services
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
              <li>
                <a href="#">
                  Login
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info-contact">
            <h4>
              Contact Info
            </h4>
            <div class="location">
              <h6>
                Corporate Office Address:
              </h6>
              <a href="">
                <img src="images/location.png" alt="">
                <span>
                  Loram ipusm New York, NY 36524
                </span>
              </a>
            </div>
            <div class="call">
              <h6>
                Customer Service:
              </h6>
              <a href="">
                <img src="images/telephone.png" alt="">
                <span>
                  ( +01 1234567890 )
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="discover">
            <h4>
              Discover
            </h4>
            <ul>
              <li>
                <a href="">
                  Help
                </a>
              </li>
              <li>
                <a href="">
                  How It Works

                </a>
              </li>
              <li>
                <a href="">
                  subscribe
                </a>
              </li>
              <li>
                <a href="contact.html">
                  Contact Us
                </a>
              </li>
            </ul>
            <div class="social-box">
              <a href="">
                <img src="images/facebook.png" alt="">
              </a>
              <a href="">
                <img src="images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="images/google-plus.png" alt="">
              </a>
              <a href="">
                <img src="images/linkedin.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- end info_section -->

  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>