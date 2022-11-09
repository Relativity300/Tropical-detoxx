<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>categoria frutas</title>
    <link rel="stylesheet" href="../css/campo/fondoAzul.css">
    <link rel="stylesheet" href="../css/campo/Botones.css">

</head>
<body>
    
    <?php

    require_once'campo/Nav.php';
    ?>
                <!-- Section-->
        <section class="py-5 ">
               <div class="pt-5" >
                   <h1 class="display-4 text-center ">Jugo de frutas</h1>
                </div> 
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
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
                            <div class="box-2 text-center" >
                                <button class="btnn btnn-two"> <p class="text-boton">Ver más</p></button>
                            </div>
                        </div>
                    </div>

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
                            <div class="box-2 text-center" >
                                <button class="btnn btnn-two"> <p class="text-boton">Ver más</p></button>
                            </div>
                        </div>
                    </div>
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
                            <div class="box-2 text-center" >
                                <button class="btnn btnn-two"> <p class="text-boton">Ver más</p></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php require_once'campo/footer.php'; ?>
</body>
</html>