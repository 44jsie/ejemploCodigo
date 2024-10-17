<!DOCTYPE html>
<html lang="es">
<head>
  <title>Tutorias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <?php $id = $_GET["id"];?>
<div class="p-5 bg-danger text-white text-center">
  <h1>Información de tutorias</h1>
  <p>Centro de Estudios Tecnológico Industrial y de Servicios # 17</p>
</div>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link <?php if($id==1){ echo "active";} ?> " href="index.php?id=1">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link <?php if($id==2){ echo "active";}  ?> " href="asesoriasAcademicas.php?id=2">Asesorias Academicas</a>
      </li>
    </ul>
  </div>
</nav>