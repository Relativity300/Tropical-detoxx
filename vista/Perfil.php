<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tropical Detox </title>
    <!-- letra -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,300&family=Libre+Baskerville:ital@1&family=Oswald&family=Poppins:ital,wght@0,400;0,600;1,500&family=Roboto+Condensed:ital,wght@1,300;1,400&family=Roboto+Slab&family=Rubik&family=Ubuntu:ital@1&display=swap" rel="stylesheet">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="sb-nav-fixed">

    <?php require_once 'campo/Nav.php'; ?>


    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-2">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-controls="home" aria-selected="true" type="button"> Datos Usuario</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" role="tab" aria-controls="home" aria-selected="false" type="button"> Contraseña</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <br>
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="row">
                            <div class="col-4">
                                <img class="img-thumbnail" src="https://cdn2.iconfinder.com/data/icons/website-icons/512/User_Avatar-512.png" alt="">
                            </div>
                            <div class="col-8">
                                <form id="formularioEditar">
                                    <div class="form-group row">
                                        <label for="codigo" class="col-2"> Nombre:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="nombre1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="codigo" class="col-2"> apellido:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="apellido1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="codigo" class="col-2"> identificacion:</label>
                                        <div class="col-8">
                                            <input type="number" class="form-control" id="cedula1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="usuarop" class="col-2"> Correo:</label>
                                        <div class="col-8">
                                            <input type="email" class="form-control" id="correo1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-2"> Telefono:</label>
                                        <div class="col-8">
                                            <input type="number" class="form-control" id="telefono1">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="text" class="col-2"> Direccion:</label>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="direccion1">
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-info" type="button" onclick="validarFormulario2()">Actualizar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade mb-5" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <form name="frmUsuario" id="formulario" method="POST" action="">
                            <div class="col-md-6 offset-md-3">
                                <h3 class="text-center">Cambio Contraseña</h3>
                                <div class="form-group row">


                                </div>
                                <div class="form-group row">
                                    <label class="col-4">contraseña:</label>
                                    <div class="d-flex">
                                        <input class="form-control" type="password" id="contrasenia">
                                        <button class="btn btn-primary" type="button" onclick="mostrarContrasena1()"><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-4">Repetir contraseña:</label>
                                    <div class="d-flex">
                                        <input class="form-control" type="password" id="Confirmclave">
                                        <button class="btn btn-primary" type="button" onclick="mostrarContrasena2()"><i class="fa-sharp fa-solid fa-eye-slash"></i></button>
                                    </div>
                                </div>

                                <div class="form-group text-center">
                                    <button class="btn btn-danger" name="submit" id="submit" type="button" onclick="validarFormulario()">Actualizar</button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

    </div>

    </div>

    <?php require_once 'campo/footer.php'; ?>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

function mostrarContrasena1(){
    var tipo = document.getElementById("contrasenia");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}

function mostrarContrasena2(){
    var tipo = document.getElementById("Confirmclave");
    if(tipo.type == "password"){
        tipo.type = "text";
    }else{
        tipo.type = "password";
    }
}
        function validarFormulario() {

            var Valcontraseina = document.getElementById('contrasenia').value;
            var Valconfirmcontraseina = document.getElementById('Confirmclave').value;

            let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
            var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
            let numerost = /^\d{0,11}$/
            let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;


            //TODOS LOS CAMPOS VACIOS 
            if (!Valcontraseina && !Valconfirmcontraseina) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar todos los campos'
                })
            }


            ////////////CONTRASEÑA//////////////
            if (!Valcontraseina) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar la contraseña'
                })
            }

            if (!(Valconfirmcontraseina === Valcontraseina)) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Las contraseñas tienen que ser iguales'
                })
            }

            var validocContraseina = contraseVali.test(Valcontraseina);
            if (!validocContraseina) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Minimo 8 caracteres-Maximo 15, 1 letra mayúscula,1 letra minucula,Al menos un dígito,Al menos 1 caracter especial'
                })
            }




            Swal.fire({
                icon: 'success',
                title: ';)',
                text: 'Se ha cambiado tu contraseña con exito'
            })


        }
    </script>

    <script>
        function validarFormulario2() {

            var Valnombre1 = document.getElementById('nombre1').value;
            var Valapellido1 = document.getElementById('apellido1').value;
            var Valcedula1 = document.getElementById('cedula1').value;
            var Valdireccion1 = document.getElementById('direccion1').value;
            var Valcorreo1 = document.getElementById('correo1').value;
            var Valtelefono1 = document.getElementById('telefono1').value;

            let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
            var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
            let numerost = /^\d{0,11}$/
            let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;


            //TODOS LOS CAMPOS VACIOS 
            if (!Valnombre1 && !Valcedula1 && !Valcorreo1 && !Valapellido1 && !Valtelefono1 && !Valdireccion1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar todos los campos'
                })
            }


            //NOOMBRE
            if (!Valnombre1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Ingrese su nombre'
                })
            }
            if (typeof Valnombre1 === "number") {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El nombre no puede contener numeros'
                })
            }
            var validoNombre1 = NoEspeciales.test(Valnombre1);
            if (!validoNombre1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El nombre no puede tener caracteres especiales'
                })
            }


            /////////////CEDULA/////////////////
            if (!Valcedula1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar la cedula'
                })
            }
            var validoCedula1 = cedulaNum.test(Valcedula1);
            if (!validoCedula1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Solo numeros (9) digitos'
                })
            }
            //telefono
            var Validotelefono1 = numerost.test(Valtelefono1)

            if (!Validotelefono1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El numero debe tener 10 digitos'
                })

            }

            ///////////////CORREO////////////////
            if (!Valcorreo1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar el correo'
                })
            }
            // direccion
            if (!Valdireccion1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Tienes que ingresar la direccion'
                })
            }

            //

            var valido1 = expReg.test(Valcorreo1);
            if (!valido1) {
                return Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'El correo debe terminar en @gmail.com'
                })
            }


            ////////////CONTRASEÑA//////////////



            Swal.fire({
                icon: 'success',
                title: ';)',
                text: 'Se han editado tus datos con exito'
            })
        }
    </script>




</body>

</html>