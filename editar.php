<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>6to Compu</title>
  <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('https://s1.1zoom.me/big0/710/Geometry_Texture_Blue_Light_Blue_Violet_586219_1280x853.jpg'); /* Cambiar 'nueva-imagen.jpg' por la ruta de tu imagen */
        background-size: cover;
        background-position: center;
    }
</style>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://scontent.fgua2-1.fna.fbcdn.net/v/t39.30808-6/391583318_1481254049364292_9177125614218294295_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_ohc=npjN29C5kbIQ7kNvgE3NDNT&_nc_ht=scontent.fgua2-1.fna&oh=00_AYDjg-t9YH8Sbu6ifI8I7RzLKcURqOkBH0OIpYkyGSuo6Q&oe=66547AB2" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">REGISTRADOR PREU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">INSCIRPCION PREU</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Productos
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Listar.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="registrar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Registrar</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registro de Productos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Principal</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Registro</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <?php
    include "conexion.php";
    $id = $id=$_GET['id'];
    $sql = $conn ->query("SELECT * FROM registro WHERE id='$id'");
    while($dat=$sql->fetch_object()){
?>
   <form action="edit.php?id=<?php echo $dat->id; ?>" method="post">
    <div class="mb-3">
        <label class="form-label">No. de Usuario</label>
        <input type="text" class="form-control" name="id" value="<?php echo $dat->id; ?>" disabled>
    </div>
    <div class="mb-3">
        <label class="form-label">Nombre completo</label>
        <input type="text" class="form-control" name="nombreCompleto" value="<?php echo $dat->nombreCompleto; ?>" placeholder="Ingrese nombre completo" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Fecha de nacimiento</label>
        <input type="date" class="form-control" name="fechaNacimiento" value="<?php echo $dat->fechaNacimiento; ?>" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Lugar de nacimiento</label>
        <input type="text" class="form-control" name="lugarNacimiento" value="<?php echo $dat->lugarNacimiento; ?>" placeholder="Ingrese lugar de nacimiento" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Género</label>
        <select name="genero" class="form-control" required>
            <option value="masculino" <?php echo $dat->genero == 'masculino' ? 'selected' : ''; ?>>Masculino</option>
            <option value="femenino" <?php echo $dat->genero == 'femenino' ? 'selected' : ''; ?>>Femenino</option>
            <option value="otro" <?php echo $dat->genero == 'otro' ? 'selected' : ''; ?>>Otro</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label">Nacionalidad</label>
        <input type="text" class="form-control" name="nacionalidad" value="<?php echo $dat->nacionalidad; ?>" placeholder="Ingrese nacionalidad" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Dirección</label>
        <input type="text" class="form-control" name="direccion" value="<?php echo $dat->direccion; ?>" placeholder="Ingrese dirección" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Teléfono de contacto</label>
        <input type="tel" class="form-control" name="telefono" value="<?php echo $dat->telefono; ?>" placeholder="Ingrese teléfono de contacto" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Correo electrónico (si es aplicable)</label>
        <input type="email" class="form-control" name="email" value="<?php echo $dat->email; ?>" placeholder="Ingrese correo electrónico">
    </div>
    <div class="mb-3">
        <label class="form-label">Número de identificación (DNI, pasaporte, etc.)</label>
        <input type="text" class="form-control" name="identificacion" value="<?php echo $dat->identificacion; ?>" placeholder="Ingrese número de identificación" required>
    </div>
      <?php
    }
      ?>
      <button type="submit-" class="btn btn-outline-dark">Registrar</button>
   </form>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>6to Computación &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>