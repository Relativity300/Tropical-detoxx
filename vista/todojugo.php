<!-- <!DOCTYPE html> -->
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Detox </title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
    <!-- letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,300&family=Libre+Baskerville:ital@1&family=Oswald&family=Poppins:ital,wght@0,400;0,600;1,500&family=Roboto+Condensed:ital,wght@1,300;1,400&family=Roboto+Slab&family=Rubik&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/campo/Botones.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>

<body>

    <?php
    require_once 'campo/Nav.php';
    ?>
    <!-- Section-->
    <section>
        <div>
            <h1 class="display-4 text-center ">Todos los jugos</h1>
        </div>
        <!-- en tittle -->
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Jugos verdes -->

                <!-- Primer  div de jugos de verdes-->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/licuadoVerde.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Licuado verde</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center" data-bs-toggle="modal" data-bs-target="#myModal">
                            <button class="btnn btnn-two ">
                                <p class="text-boton">Ver más</p>
                            </button>
                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle md-3">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-3">Licuado verde</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start" src="../IMG/licuadoVerde.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Jugo muy bueno
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5">Precio: $40.00 - $80.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin del modal -->
                            <button type="button" class="btn btn-light " style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Segundo  div  de jugos de verdes-->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/jugoManzana.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jugo de manzana</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center" data-bs-toggle="modal" data-bs-target="#myModal2">
                            <button class="btnn btnn-two ">
                                <p class="text-boton">Ver más</p>
                            </button>
                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle ">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-5">Jugo de manzana</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start" src="../IMG/jugoManzana.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Jugo muy bueno
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5"><span class="text-muted text-decoration-line-through">$20.00</span>
                                                $18.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin del modal -->
                            <button type="button" class="btn btn-light " style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tercer  div de jugos de verdes-->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/jugoConvinado.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jugo combinado</h5>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center" data-bs-toggle="modal" data-bs-target="#myModal3">
                            <button class="btnn btnn-two ">
                                <p class="text-boton">Ver más</p>
                            </button>
                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle text-center">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-12">Jugo combinado</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start img-fluid" src="../IMG/jugoConvinado.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Jugo muy bueno
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5">$40.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin del modal -->
                            <button type="button" class="btn btn-light " style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Fin de jugos verdes -->

                <!-- Frutas -->

                <!-- Primer  div de jugos de frutas -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/fresas.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jugo de fresa</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center">
                            <button class="btnn btnn-two" data-bs-toggle="modal" data-bs-target="#myModal">
                                <p class="text-boton">Ver más</p>
                            </button>
                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle md-3">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-3">Jugo de manzana</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start" src="../IMG/fresas.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi accusantium adipisci!
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5">Precio: $40.00 - $80.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin del modal -->
                            <button type="button" class="btn btn-light" style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                            <!-- fin de botones -->
                        </div>
                        <!-- Fin de la carta -->
                    </div>
                </div>

                <!-- Segundo  div de jugos de frutas -->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/piña.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jugo de piña</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center">
                            <button class="btnn btnn-two" data-bs-toggle="modal" data-bs-target="#myModal2">
                                <p class="text-boton">Ver más</p>
                            </button>

                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal2">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle md-3">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-3">Jugo de piña</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start" src="../IMG/piña.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi accusantium adipisci!
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5"> <span class="text-muted text-decoration-line-through">$20.00</span>
                                                $18.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Fin del modal -->

                            <button type="button" class="btn btn-light " style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Tercer  div  de jugos de frutas-->
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="../IMG/guayaba.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Jugo de guayaba</h5>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="box-2 btn btn-group text-center">
                            <button class="btnn btnn-two" data-bs-toggle="modal" data-bs-target="#myModal3">
                                <p class="text-boton">Ver más</p>
                            </button>
                            <!-- Inicio de modal -->
                            <div class="modal fade" id="myModal3">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">

                                        <!-- titulo del modal -->
                                        <div class="modal-header">
                                            <h2 class="modal-tittle md-3">
                                                Jugo
                                            </h2>
                                            <button class="btn btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h2 class="fs-3 col-md-3">Jugo de guayaba</h2>
                                            <!-- <a href="carrito.php"> -->
                                            <img class="rounded float-start" src="../IMG/guayaba.jpg" alt="Una imagen de fresa">
                                            <!-- </a> -->
                                            <h1 class="fs-4">Descripción</h1>
                                            <p class="f-3">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum provident animi accusantium adipisci!
                                            </p>
                                            <!-- Selector, no puedo moverlo al centro  -->
                                            <!-- <select class="position-relative form-select text-align-center" style=width:auto height: auto;>
                                                <option selected>Tipo de vaso</option>
                                                <option value="1">Grande</option>
                                                <option value="2">Mediano</option>
                                                <option value="3">Puqueño</option>
                                            </select> -->
                                            <a style="text-decoration: none;" href="carrito.php">
                                                <p class="fs-3 md-5 text-dark"> Agregar al carrito</p>
                                            </a>
                                            <h5 class="fs-5">Precio: $40.00</h5>
                                        </div>

                                        <!-- Modal footer -->
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" data-bs-dismiss="modal">
                                                Cerrar
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- Fin del modal -->
                            <button type="button" class="btn btn-light " style="text-decoration: none"><a href="carrito.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                                    </svg>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- end Products -->
            </div>

            <!-- Fin de frutas -->
        </div>
    </section>
    <?php require_once 'campo/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>