<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>REGISTRAR | REGISTRAR</title>
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
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQOqEKCAMyr5bcSMaAN2PlhRr61Ww_mw_S03ooKDSc-A_WSOAD5C472zuj4bxCHZE3HICM&usqp=CAU" class="img-circle elevation-2" alt="User Image">
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
                <a href="listar.php" class="nav-link">
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
            <h1>FOMULARIO DE INSCRIPCION</h1>
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
          <h3 class="card-title">ESTUDIANTES INSCRITOS</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"><div class="dt-buttons btn-group flex-wrap">               <button class="btn btn-secondary buttons-copy buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Copy</span></button> <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button> <div class="btn-group"><button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true" aria-expanded="false"><span>Column visibility</span><span class="dt-down-arrow"></span></button></div> </div></div><div class="col-sm-12 col-md-6"><div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
            <thead>
            <th scope="col">#</th>
   <th scope="col">Nombre completo</th>
<th scope="col">Fecha de nacimiento</th>
<th scope="col">Lugar de nacim iento</th>
<th scope="col">Género</th>
<th scope="col">Nacionalidad</th>
<th scope="col">Dirección</th>
<th scope="col">Teléfono de contacto</th>
<th scope="col">Correo electrónico</th>
<th scope="col">Número de identificación</th>
<th scope="col">Acciones</th>

            <?php
      include "CONEXION.php";
      $sql = $conn ->query("SELECT * FROM REGISTRO");
      while($dat= $sql->fetch_object()){
    ?>
            <tbody>
            <th scope="row"><?php echo $dat ->id ?></th>
            <td><?php echo $dat->nombreCompleto; ?></td>
<td><?php echo $dat->fechaNacimiento; ?></td>
<td><?php echo $dat->lugarNacimiento; ?></td>
<td><?php echo $dat->genero; ?></td>
<td><?php echo $dat->nacionalidad; ?></td>
<td><?php echo $dat->direccion; ?></td>
<td><?php echo $dat->telefono; ?></td>
<td><?php echo $dat->email; ?></td>
<td><?php echo $dat->identificacion; ?></td>

      <td><a href="editar.php?id=<?php echo $dat ->id;?>" class="btn btn-small btn-warning"><i class="fas fa-edit"></i></td>
      <td><a href="eliminar.php?id=<?php echo $dat ->id;?>" class="btn btn-small btn-danger"><i class="fas fa-trash-alt"></i></td>
            <tr class="odd">
          </tr><tr class="even">
          </tr>
          <?php
      }
    ?>
        </tbody>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

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
