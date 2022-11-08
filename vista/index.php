<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/campo/fondoSandia.css">
    <link rel="stylesheet" href="../css/index.css">

     <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
    <title>Home.</title>

</head>
<body>
    
    <?=require_once'campo/Nav.php';?>

+
  

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  <div class="div-titulo"><h1 class="titulo">bienvenido a Tropical Detox</h1></div>
  <div class="carousel-indicators">

    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../IMG/jugos/jugo1.jpg" class="d-block w-100 img-car" alt="">
    </div>
    <div class="carousel-item">
      <img src="../IMG/jugos/jugo2.jpg" class="d-block w-100 img-car" alt="../IMG/jugos/jugo2.jpg">
    </div>
    <div class="carousel-item">
      <img  src="../IMG/jugos/jugo3.jpg" class="d-block w-100 img-car" alt="../IMG/jugos/jugo3.jpg">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


<article>

<section>
<div class="wrap">
  <a href="personalizado.php"><button class="button">Personalizado</button></a>
  <a href="nosotros.php"><button class="button">Nosotros</button></a>
  <a href="nosotros.php"><button class="button">Productos</button></a>
</div>
</section>


  <div class="div-iframe">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63458.87684076734!2d-75.62018190544242!3d6.240018059759329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e4428dfb80fad05%3A0x42137cfcc7b53b56!2sMedell%C3%ADn%2C%20Antioquia!5e0!3m2!1ses!2sco!4v1667887272639!5m2!1ses!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="div-datos">
          <h1 class="titulo-map">datos.</h1>
          <p class="p-datos">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum sint a iure delectus, itaque facere fuga porro aliquid at assumenda ut nihil placeat quia totam voluptatibus, voluptas sit aliquam provident.</p>
        </div>
  </div>


</article>

<br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br>  
<?=require_once'campo/footer.php';?>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>
</html>