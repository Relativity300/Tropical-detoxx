<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tropical Detox </title>

  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="../css/stylish-portfolio.min.css" rel="stylesheet">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

  <style>
    * {
      font-family: 'Bebas Neue', cursive;
    }
  </style>



</head>

<?php

require('campo/Nav.php')
?>




<body id="page-top">
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        <h2 class="mb-5">Categoria de Productos</h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="productosFrutas.php">
            <span class="caption">
              <span class="caption-content">
                <h2>Jugos de frutas</h2>
                <p class="mb-0">A yellow pencil with envelopes on a clean, blue backdrop!</p>
              </span>
            </span>
            <img class="img-fluid" src="../img/1.jpg" alt="" href="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="productosVerdes.php">
            <span class="caption">
              <span class="caption-content">
                <h2>Jugos verdes</h2>
                <p class="mb-0">A dark blue background with a colored pencil, a clip, and a tiny ice cream cone!</p>
              </span>
            </span>
            <img class="img-fluid" src="../img/2.jpg" alt="" href="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="">
            <span class="caption">
              <span class="caption-content">
                <h2>Especiales</h2>
                <p class="mb-0">Strawberries are such a tasty snack, especially with a little sugar on top!</p>
              </span>
            </span>
            <img class="img-fluid" src="../img/3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="todojugo.php">
            <span class="caption">
              <span class="caption-content">
                <h2>Todos</h2>
                <p class="mb-0">A yellow workspace with some scissors, pencils, and other objects.</p>
              </span>
            </span>
            <img class="img-fluid" src="../img/4.jpg" alt="" href="todojugo.php">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="feature" class="section-padding wow fadeIn delay-05s">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wrap-item text-center">
            <div class="item-img">
              <img src="../img/logo5.jpg">
            </div>
            <h3 class="pad-bt15">Creative Concept</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wrap-item text-center">
            <div class="item-img">
              <img src="../img/logo2.jpg">
            </div>
            <h3 class="pad-bt15">Amazing Design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wrap-item text-center">
            <div class="item-img">
              <img src="../img/logo3.jpg">
            </div>
            <h3 class="pad-bt15">Cost effective</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="wrap-item text-center">
            <div class="item-img">
              <img src="../img/logo4.jpg">
            </div>
            <h3 class="pad-bt15">Secure</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once 'campo/footer.php'; ?>
</body>

</html>