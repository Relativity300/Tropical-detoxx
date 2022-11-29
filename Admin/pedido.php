<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Ample Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>Tropical Detox Administrador</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../IMG/Logo.jpeg">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <link rel="stylesheet" href="css/Pedido.css">
    <link rel="stylesheet" href="css/nav.css">

</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full" data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="div-logo">
                        <a class="" href="dashboard.html">
                            <img src="IMG/Logo3.png" class="logonav" alt="homepage">
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <ul class="navbar-nav d-none d-md-block d-lg-none">
                        <li class="nav-item">
                            <a class="nav-toggler nav-link waves-effect waves-light text-white" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="#">
                                <img src="plugins/images/users/varun.jpg" alt="user-img" width="36" class="img-circle"><span class="text-white font-medium">Steave</span>

                            </a>
                        </li>
                        <li>
                            <a class="profile-pic" href="modificar cuenta.php">
                                <span class="text-white font-medium">cerrar sesion</span>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="configuracion.php" aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Configuracion</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="usuarios.php" aria-expanded="false">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span class="hide-menu">Usuarios</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="categoria de productos.php" aria-expanded="false">
                                <i class="fa fa-table" aria-hidden="true"></i>
                                <span class="hide-menu">Categoria de productos</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="Clientes.php" aria-expanded="false">
                                <i class="fa fa-font" aria-hidden="true"></i>
                                <span class="hide-menu">Clientes</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="dashboard.php" aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">Ventas</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="pedido.php" aria-expanded="false">
                                <i class="fa fa-columns" aria-hidden="true"></i>
                                <span class="hide-menu">pedido</span>
                            </a>
                        </li>



                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">






            <!-- crear  -->

            <!-- Modal1 -->
            <div class="modal fade" id="crear" tabindex="-1" aria-labelledby="crear" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="titulo-Modal ">Crear</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modallll">
                            <form action="">
                                <label for="">Nombre</label>
                                <input class="gteneral" type="name" name="name" id="nombre"><br>

                                <label for="">Telefono</label>
                                <input class="gteneral" type="number" name="" id="telefono"><br>

                                <label for="">Dirrecion</label>
                                <input class="gteneral" type="text" name="" id="direccion">

                                <div class="pagoSeletor">
                                    <p class="pago"><b>metodo de pago.</b></p>
                                    <select class="seletor" name="" id="">
                                        <option value="">Contraentrega</option>
                                        <option value="">Tranferencia</option>
                                    </select>
                                </div>

                            </form>


                            <!-- <img src="IMG/boton-mas.png" alt="" width="50" height="50" class="mas"> -->
                            <button class="mas btn btn-primary">Agregar</button>

                            <div class="cotenidoEdit">
                                <div class="editar">

                                    <form action="">
                                        <input type="search" name="nombre" placeholder="Buscar">
                                    </form>
                                    <ul>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"><br></li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                    </ul>
                                </div>

                                <div class="editados">
                                    <ul>
                                        <li class="edi2">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi2">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi2"><b>Total: <samp>3.000</samp></b></li>
                                    </ul>

                                </div>
                            </div>
                        </div>


                        <div class="div-botones">
                            <button type="button" class="bbb btn btn-success " data-bs-dismiss="modal">Eliminar.</button>
                            <!-- <button type="button" class="bbb btn btn-danger" data-bs-dismiss="modal" onclick="validarFormulario()" >Editar.</button> -->
                            <button class="bbb btn btn-danger" type="button" data-bs-dismiss="modal" onclick="validarFormulario()">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                            <tr>
                                <th colspan="6" class="text-center">
                                    <h1 class="titulo-ventas ">Jugos pedidos</h1>
                                </th>

                            </tr>
                            <tr>
                                <th colspan="6">
                                    <div class="formButton">
                                        <form action="" class="bucar_list espacio">
                                            <input type="search" name="nombre" placeholder="Buscar">
                                        </form>
                                        <div class="Crearr">
                                            <button type="button " class=" button btn btn-primary" data-bs-toggle="modal" data-bs-target="#crear">
                                                Crear
                                            </button>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <th class="border-top-0">Nombre</th>
                            <th class="border-top-0">Telefono</th>
                            <th class="border-top-0">Direcion</th>
                            <th class="border-top-0">Pago</th>
                            <th class="border-top-0">Estado</th>
                            <th class="border-top-0">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="txt-oflo">Johan</td>
                                <td>3216548267</td>
                                <td>Santa lucia</td>
                                <td class="txt-oflo">Pediente</td>
                                <td><span class="text-success">
                                        <select name="" id="">
                                            <option value="">En proceso.</option>
                                            <option value="">Terminado.</option>
                                            <option value="">Cancelado.</option>
                                            <option value="">En cola.</option>
                                        </select>
                                    </span></td>
                                <td class="txt-oflo">
                                    <!-- eliminar -->

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>

                                    <!-- detalles -->
                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#Datos">
                                        <i class="bi bi-file-earmark-spreadsheet">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg>
                                        </i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="txt-oflo">Johan</td>
                                <td>3216548267</td>
                                <td>Santa lucia</td>
                                <td class="txt-oflo">Pediente</td>
                                <td><span class="text-success">
                                        <select name="" id="">
                                            <option value="">En proceso.</option>
                                            <option value="">Terminado.</option>
                                            <option value="">Cancelado.</option>
                                            <option value="">En cola.</option>
                                        </select>
                                    </span></td>
                                <td class="txt-oflo">
                                    <!-- eliminar -->

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>

                                    <!-- detalles -->
                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#Datos">
                                        <i class="bi bi-file-earmark-spreadsheet"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="txt-oflo">Johan</td>
                                <td>3216548267</td>
                                <td>Santa lucia</td>
                                <td class="txt-oflo">Pediente</td>
                                <td><span class="text-success">
                                        <select name="" id="">
                                            <option value="">En proceso.</option>
                                            <option value="">Terminado.</option>
                                            <option value="">Cancelado.</option>
                                            <option value="">En cola.</option>
                                        </select>
                                    </span></td>
                                <td class="txt-oflo">
                                    <!-- eliminar -->

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>

                                    <!-- detalles -->
                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#Datos">
                                        <i class="bi bi-file-earmark-spreadsheet"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="txt-oflo">Johan</td>
                                <td>3216548267</td>
                                <td>Santa lucia</td>
                                <td class="txt-oflo">Pediente</td>
                                <td><span class="text-success">
                                        <select name="" id="">
                                            <option value="">En proceso.</option>
                                            <option value="">Terminado.</option>
                                            <option value="">Cancelado.</option>
                                            <option value="">En cola.</option>
                                        </select>
                                    </span></td>
                                <td class="txt-oflo">
                                    <!-- eliminar -->

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>

                                    <!-- detalles -->
                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#Datos">
                                        <i class="bi bi-file-earmark-spreadsheet"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg></i>
                                    </button>
                                </td>

                            </tr>
                            <tr>
                                <td class="txt-oflo">Johan</td>
                                <td>3216548267</td>
                                <td>Santa lucia</td>
                                <td class="txt-oflo">Pediente</td>
                                <td><span class="text-success">
                                        <select name="" id="">
                                            <option value="">En proceso.</option>
                                            <option value="">Terminado.</option>
                                            <option value="">Cancelado.</option>
                                            <option value="">En cola.</option>
                                        </select>
                                    </span></td>
                                <td class="txt-oflo">
                                    <!-- eliminar -->

                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#elliminar">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                            <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z" />
                                        </svg>
                                    </button>

                                    <!-- detalles -->
                                    <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#Datos">
                                        <i class="bi bi-file-earmark-spreadsheet"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                                <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                            </svg></i>
                                    </button>
                                </td>

                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>



            <!-- Modal1 -->
            <!-- Editar -->
            <div class="modal fade" id="elliminar" tabindex="-1" aria-labelledby="elliminar" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="titulo-Modal ">Editar</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body modallll">
                        <form action="">
                                <label for="">Nombre</label>
                                <input class="gteneral" type="name" name="name" id="nombre1"><br>

                                <label for="">Telefono</label>
                                <input class="gteneral" type="number" name="" id="telefono1"><br>

                                <label for="">Dirrecion</label>
                                <input class="gteneral" type="text" name="" id="direccion1">

                                <div class="pagoSeletor">
                                    <p class="pago"><b>metodo de pago.</b></p>
                                    <select class="seletor" name="" id="">
                                        <option value="">Contraentrega</option>
                                        <option value="">Tranferencia</option>
                                    </select>
                                </div>

                            </form>



                            <!-- <img src="IMG/boton-mas.png" alt="" width="50" height="50" class="mas"> -->
                            <button class="mas btn btn-primary">Agregar</button>

                            <div class="cotenidoEdit">
                                <div class="editar">

                                    <form action="">
                                        <input type="search" name="nombre" placeholder="Buscar">
                                    </form>
                                    <ul>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"><br></li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                    </ul>
                                </div>

                                <div class="editados">
                                    <ul>
                                        <li class="edi2">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi2">Mango $2.000<input type="checkbox" class="seletor1" id="cbox1" value="first_checkbox"> </li>
                                        <li class="edi2"><b>Total: <samp>3.000</samp></b></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                        <div class="div-botones">
                            <button type="button" class="bbb btn btn-success " data-bs-dismiss="modal">Eliminar.</button>
                            <button type="button" class="bbb btn btn-danger" data-bs-dismiss="modal" onclick="validarFormulario2()" >Editar.</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal2 -->
            <div class="modal fade" id="Datos" tabindex="-1" aria-labelledby="Datos" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="titulo-Modal ">Detalles: 1.</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p class="p-descri"><b>Nombre: </b>Johan</p>
                            <p class="p-descri"><b>productos:</b> <br>
                                1: jugo mango: 3.000 <br>
                                2: jugo fresas: 1.000<br>
                                3: jugo piña: 1.000<br>
                            </p>
                            <p class="p-descri"><b>Precio:</b> 5.000</p>
                        </div>
                        <div class="div-boto nes">
                            <button type="button" class="bbb btn btn-danger" data-bs-dismiss="modal">Atras.</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- <footer class="footer text-center"> 2021 © Ample Admin brought to you by <a
                    href="https://www.wrappixel.com/">wrappixel.com</a>
            </footer> -->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


 <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
                    <!-- Bootstrap tether Core JavaScript -->
                    <script src="bootstrap/dist/js/bootstrap.bundle.min.js"></script>
                    <script src="js/app-style-switcher.js"></script>
                    <!--Wave Effects -->
                    <script src="js/waves.js"></script>
                    <!--Menu sidebar -->
                    <script src="js/sidebarmenu.js"></script>
                    <!--Custom JavaScript -->
                    <script src="js/custom.js"></script>
                    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">


    <script>
                        function mostrarContrasena() {
                            var tipo = document.getElementById("contrasenia");
                            if (tipo.type == "password") {
                                tipo.type = "text";
                            } else {
                                tipo.type = "password";
                            }
                        }

                        function mostrarContrasena2() {
                            var tipo = document.getElementById("Confirmclave");
                            if (tipo.type == "password") {
                                tipo.type = "text";
                            } else {
                                tipo.type = "password";
                            }
                        }

                        function mostrarContrasena3() {
                            var tipo = document.getElementById("contrasenia1");
                            if (tipo.type == "password") {
                                tipo.type = "text";
                            } else {
                                tipo.type = "password";
                            }
                        }



                        function mostrarContrasena4() {
                            var tipo = document.getElementById("Confirmclave1");
                            if (tipo.type == "password") {
                                tipo.type = "text";
                            } else {
                                tipo.type = "password";
                            }
                        }



                        function validarFormulario() {


                            var Valnombre = document.getElementById('nombre').value;
                            var Valdireccion = document.getElementById('direccion').value;
                            var Valtelefono = document.getElementById('telefono').value;

                            let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
                            var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
                            let numerost = /^\d{0,11}$/
                            let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;


                            //TODOS LOS CAMPOS VACIOS 
                            if (!Valnombre && !Valtelefono && !Valdireccion) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Tienes que ingresar todos los campos'
                                })
                            }


                            //NOOMBRE
                            if (!Valnombre) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ingrese su nombre'
                                })
                            }
                            if (typeof Valnombre === "number") {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'El nombre no puede contener numeros'
                                })
                            }
                            var validoNombre = NoEspeciales.test(Valnombre);
                            if (!validoNombre) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'El nombre no puede tener caracteres especiales'
                                })
                            }

                            //telefono
                            var Validotelefono = numerost.test(Valtelefono)

                            if (!Validotelefono) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'El numero debe tener 10 digitos'
                                })
                            }


                            if (!Valdireccion) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ingrese su direccion'
                                })
                            }



                            Swal.fire({
                                icon: 'success',
                                title: ';)',
                                text: 'Se ha creado exitosamente'
                            })






                        }



                        function validarFormulario2() {


                            var Valnombre1 = document.getElementById('nombre1').value;
                            var Valdireccion1 = document.getElementById('direccion1').value;
                            var Valtelefono1 = document.getElementById('telefono1').value;

                            let NoEspeciales = /^[a-zA-ZÀ-ÿ\s]{1,40}$/ // Letras y espacios, pueden llevar acentos.
                            var expReg = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            let cedulaNum = /^\d{0,10}$/ // 0 a 9 numeros.
                            let numerost = /^\d{0,11}$/
                            let contraseVali = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])([A-Za-z\d$@$!%*?&]|[^ ]){8,15}$/;


                            //TODOS LOS CAMPOS VACIOS 
                            if (!Valnombre1  && !Valtelefono1 && !Valdireccion1 ) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Tienes que ingresar todos los campos'
                                })
                            }


                            if (!Valdireccion1) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ingrese su direccion'
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

                            if (!Valdireccion1) {
                                return Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Ingrese su direccion'
                                })
                            }
                           
                            Swal.fire({
                                icon: 'success',
                                title: ';)',
                                text: 'Se ha editado exitosamente'
                            })


                            //FALTA TERMINA LA ALERTA Y QUE TE LLEVE EL OK AL LOGIN 
                            // Swal.fire({
                            //   icon: 'success',
                            //   title: ':)',
                            //   text: 'El usuario fue creado exitosamente',
                            // })
                            // return window.location.href = "/";



                        }
                    </script>
</body>

</html>