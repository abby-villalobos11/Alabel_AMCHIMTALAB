<?php
include("conexionprueba.php");
?>
<!DOCTYPE html>
<html lang="en">
<!-- Template Main CSS File -->
<link href="assets/css/style.css" rel="stylesheet">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact - ALABEL ACHIMTALAB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Sailor - v4.1.0
  * Template URL: https://bootstrapmade.com/sailor-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">ALABEL ACHIMTALAB</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.html">Home</a></li>

         
          <li class="dropdown"><a href="#"><span>acerca de </span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="about.html">INSTALACIONES</a></li>
              <li><a href="team.html">NOSOTROS</a></li>
              
            </li>
          </ul>
          <li><a href="services.html">SERVICIOS</a></li>
          <li><a href="portfolio.html">GALERIA</a></li>
          <li><a href="pricing.html">PRECIOS</a></li>
          <li><a href="blog.html">HABITACIONES</a></li>
         
          <li><a href="contact.html">CONTACTO</a></li>
          <li><a href="tienda.html">TIENDA</a></li>
          <li><a href="reservacion.php" class="getstarted">EMPEZAR</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Reserva</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>reserva                                                                                                                                                                               </li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs --><div class="col-lg-8 mt-5 mt-lg-0"></html>
        <link href="assets/css/reserva.css" rel="stylesheet">
      <form action="" method="post">
        <div class="elem-group">
          <label for="name"></label>
        Nombre:<input type="text" id="nombre" name="nombre" placeholder="abigail villalobos" pattern=[A-Z\sa-z]{3,20} required>
        </div>
        <div class="elem-group">
        <label for="email"> E-mail</label>
         E-mail: <input type="email" id="email" name="email" placeholder="example@email.com" required>
        </div>
        <div class="elem-group">
         Telefono:<input type="tel" id="phone" name="telefono" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
        </div>
        <hr>
        <div class="elem-group ">
          
          Adultos:<input type="number" id="total_adulto" name="total_adultos" placeholder="2" min="1" required>
        </div>
        <div class="elem-group inlined">
          Niños:<input type="number" id="total_niños" name="total_niños" placeholder="2" min="0" required>
        </div>
        <div class="elem-group inlined">
          
          Check-in :<input type="date" id="check-in" name="check-in" required>
        </div>
        <div class="elem-group inlined">
          Check-out:<input type="date" id="check-out" name="check-out" required>
        </div>
        <div class="elem-group">
          
          Tipo de cuarto:<select id="tipo_cuarto" name="tipo_cuarto" required>
              <option value="">Elige uno de la  Lista</option>
              <option value="connecting">Habitacion Estandar</option>
              <option value="adjoining">NATURA ROOM</option>
              <option value="adjacent">ALL IN</option>
          </select>
        </div>
        <hr>
        <div class="elem-group">
          
         ¿Algo en especial?: <textarea id=" mensaje_huesped" name=" mensaje_huesped" placeholder=" dudas o pedidos." required></textarea>
        </div>
        <button type="submit">Reserva</button>
      </form>
     <?php if ($_POST){
$n=$_POST['nombre'];
$e= $_POST['email'];
$t=$_POST['telefono'];
$t_a=$_POST['total_adulto'];
$t_n=$_POST['total_niños'];
$check_in=$_POST['check-in'];
$check_out=$_POST['check-out'];
$m=$_POST['mensaje_huesped'];


$sql = "INSERT INTO reservacion(nombre, email, telefono, total_adulto,total_niños,check-in,check-out,mensaje_huesped)
VALUES ('$n', '$e', '$t', '$t_a','$t_n','$check_in','$check_out','$m')";

if ($conn->query($sql) === TRUE) {
  echo "reservacion exitosa";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
       

     
