<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HERMES</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Theme style -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.css">

  <!-- jQuery -->
  <script src="vistas/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="vistas/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <!--script src="vistas/dist/js/demo.js"></script-->
</head>

<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

</div>

<?php
    include "modulos/cabezote.php";
    include "modulos/menu.php";
    // include "modulos/inicio.php";
    // include "modulos/footer.php";

    if(isset($_GET["ruta"])){
      if($_GET["ruta"] == "inicio" ||
        $_GET["ruta"] == "usuarios" ||
        $_GET["ruta"] == "permisos" ||
        $_GET["ruta"] == "inventario" ||
        $_GET["ruta"] == "inmediata" ||
        $_GET["ruta"] == "recepcion" ||
        $_GET["ruta"] == "autorizaciones" ||
        $_GET["ruta"] == "devoluciones" ||
        $_GET["ruta"] == "recepcion-traspaso" ||
        $_GET["ruta"] == "reportes" ||
        $_GET["ruta"] == "reservas" ||
        $_GET["ruta"] == "inmediatas" ||
        $_GET["ruta"] == "vencidas" ||
        $_GET["ruta"] == "salidas"){
        include "modulos/".$_GET["ruta"].".php";
      } else {
        include "modulos/error404.php";
      }
    } else {
      include "modulos/footer.php";
    }
?>