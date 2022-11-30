<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">

    <link rel="stylesheet" href="../css/personalizado.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
    <!-- letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,300&family=Libre+Baskerville:ital@1&family=Oswald&family=Poppins:ital,wght@0,400;0,600;1,500&family=Roboto+Condensed:ital,wght@1,300;1,400&family=Roboto+Slab&family=Rubik&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <title>Tropical Detox </title>
</head>

<body>
    <?= require_once 'campo/Nav.php'; ?>

    <section>
        <div class="cotenedor">
            <div class="proceso1">
                <form action="" c>
                    <div class="div-select-h2">
                        <select name="" id="">
                            <option value="">Grande</option>
                            <option value="">Mediano</option>
                            <option value="">Pequeño</option>
                        </select>


                        <h2 class="h2-Cantidad">Cantidad jugos</h2>

                        <input class="cantidad" type="number" name="" id="">

                        <svg class="masss" xmlns="http://www.w3.org/2000/svg" width="40" height="4    0" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z" />
                        </svg>
                    </div>

                    <form action="">
                        <input type="search" name="nombre" placeholder="Buscar">
                    </form>
                    <br><br><br><br><br><br>





                    <div class="checkbox">

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>

                        <label for="checkbox1" class="frutas">Jugos de mango</label>
                        <input type="checkbox" name="checkbox" id="checkbox1" class="numbere"><br>




                    </div>

                </form>



            </div>



            <div class="frecha">
                <i class="bi bi-arrow-right-circle-fill "><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                    </svg></i>
            </div>

            <div>
                <div class="proceso2">

                    <div class="pedido">
                        <div class="checkbox">
                            <h1>Sabores elegidos</h1>

                            <label for="checkbox1" class="frutas">Jugos de mango
                                <!-- eliminar -->
                                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                    <i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></i>
                                </button>
                            </label>

                            <label for="checkbox1" class="frutas">Jugos de manzana
                                <!-- eliminar -->
                                <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                    <i class="bi bi-trash"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                        </svg></i>
                                </button>
                            </label>

                        </div>

                    </div>
                </div>
            </div>
    </section>

    <br><br><br><br><br><br><br>

    <?php require_once 'campo/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
</body>

</html>