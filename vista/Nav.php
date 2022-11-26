<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/campo/Nav_css.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,300&family=Libre+Baskerville:ital@1&family=Oswald&family=Poppins:ital,wght@0,400;0,600;1,500&family=Roboto+Condensed:ital,wght@1,300;1,400&family=Roboto+Slab&family=Rubik&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
</head>
<body>
  <header class="ca">
    <nav class="navbar">
        <div class="container-fluid">
          <a class="a navbar-brand" href="/vista/personalizado.php"><p>Personalizados</p></a>
          <a class="a navbar-brand" href="/vista/carrito.php"><p>Carrito</p></a>
          <!-- <a class="a " href="#"> <img class="logo" src="img/Logo1.png" alt="logo"> </a> -->
          <a class="a navbar-brand" href="/vista/categoria.php"><p>Productos</p></a>
          <a class="a navbar-brand" href="#"><p>Login</p></a>
          <button class="bo navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                
                  </ul>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </nav>
      </header>
      <?php require_once'campo/footer.php';?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>