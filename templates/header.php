<?php

$url_base = "http://localhost/aplicacionWeb/";

?>

<!doctype html>
<html lang="en">

<head>
  <title>empleados</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<header>
    <!-- place navbar here -->
</header>

<nav class="navbar navbar-expand navbar-light bg-light">
    <ul class="nav navbar-nav">
        <li class="nav-item">
            <a class="nav-link active" href="<?php echo $url_base;?>index.php" aria-current="page">Sistema <span class="visually-hidden">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base;?>secciones/empleados/index.php">Empleados</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base;?>secciones/puestos/index.php">Puestos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base;?>secciones/usuarios/index.php">Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base;?>secciones/empleados/index.php">Cerrar sesión</a>
        </li>
    </ul>
</nav>
  <main class='container'>