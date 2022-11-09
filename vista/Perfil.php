<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="../juan/css/bootstrap.min.css">
    <link rel="stylesheet" href="../juan/css/stilos.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>

<?=require_once'campo/Nav.php';?>    

    <br>

    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab"
                        aria-controls="home" aria-selected="true" type="button"> Datos Usuario</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab"
                        aria-controls="home" aria-selected="false" type="button"> Contraseña</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-4">
                                <img class="img-thumbnail"
                                    src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png"
                                    alt="">
                            </div>
                            <div class="col-8">
                                <div class="form-group row">
                                    <label for="codigo" class="col-2"> Nombre:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="Juan Pablo">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="usuarop" class="col-2"> Correo:</label>
                                    <div class="col-8">
                                        <input type="text" class="form-control" value="Jpceballos35@misena.edu.co">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-2"> Telefono:</label>
                                    <div class="col-8">
                                        <input type="email" class="form-control" value="3015892266">
                                    </div>
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-info">Actualizar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-md-6 offset-md-3">
                            <h3 class="text-center">Cambio Contraseña</h3>
                            <div class="form-group row">
                
    
                            </div>
                            <div class="form-group row">
                                <label for="contrasenia" class="col-4">contraseña:</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ncontrasenia" class="col-4">Repetir contraseña:</label>
                                <div class="col-8">
                                    <input type="password" class="form-control">
                                </div>
                            </div>

                            <div class="form-group text-center">
                                <button class="btn btn-danger">Actualizar</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<?=require_once'campo/footer.php';?>

</body>

</html>