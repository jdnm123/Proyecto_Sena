<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="img/img-sistema/icono- empresa.png">

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="../img/img-sistema/icono- empresa.png" />
    <title>Sistema de ventas</title>

    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/estilos.css" rel="stylesheet" />
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-dark " id="sidebar-wrapper">

            <div class="list-group list-group-flush">


                <img class="img-perfil-user" src="../img/Usuarios/usuario.png" alt="Foto de perfil">

                <h3 class="text-light title-sidebar">Nombre Usuario</h3>

                <hr style=" margin: 3%;">

                <a class="nav-link dropdown-toggle text-light text-light " id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/ventas.png" alt="icon-ventas"
                        loading="lazy" />Ventas</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"
                        href="Reg_ventas.php?">Registrar
                        Venta</a>
                    <a class="dropdown-item"
                        href="Lista_ventas.php?">Lista
                        de Ventas</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/compras.png" alt="icon-compras" loading="lazy" />
                    Compras</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Reg_compra.php">Registrar compra</a>
                    <a class="dropdown-item" href="Lista_compra.php?#!">Lista de compras</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/clientes.png" alt="icon-clientes"
                        loading="lazy" />Clientes</a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="AgregarCliente.php">Agregar clientes</a>
                    <a class="dropdown-item" href="ListaCliente.php">Lista de clientes</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/proveedor.png" alt="icon-proveedores"
                        loading="lazy" />Proveedores</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="AgregarProveedores.php">Agregar proveedores</a>
                    <a class="dropdown-item" href="ListaProveedores.php">Lista proveedores</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/categorias.png" alt="icon-proveedores"
                        loading="lazy" />Categoria</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Agregar_Categoria.php">Agregar Categoria</a>
                    <a class="dropdown-item" href="Lista_Categoria.php?">Lista de Categorias</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/productos.png" alt="icon-proveedores"
                        loading="lazy" />Productos</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Agregar_Producto.php">Agregar Producto</a>
                    <a class="dropdown-item" href="Lista_Producto.php">Lista Productos</a>
                </div>

                 
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/Reportes.png" alt="icon-Reportes"
                        loading="lazy" />Reportes</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#!">Reporte de compra</a>
                    <a class="dropdown-item" href="#!">Reportes de ventas</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/usuarios.png" alt="icon-usuarios"
                        loading="lazy" />Usuarios</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="Agregar_usuario.php?">Agregar usuario</a>
                    <a class="dropdown-item" href="lista_usuario.php">Lista de usuario</a>
                </div>
                <hr style=" margin: 3%;">
                <a class="nav-link dropdown-toggle text-light" id="navbarDropdown" href="#" role="button"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="icon-sidebar" src="../img/img-sistema/administracion.png" alt="icon-administracion"
                        loading="lazy" />Administración</a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="DatosEmpresa.php">Editar empresa</a>
                 
                </div>
                <hr style=" margin: 3%;">
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn " id="sidebarToggle"><img style="height: 35px;"
                            src="../img/img-sistema/icon-navbar.png" alt=""></button>
                    <a href="home.php?"> <img
                            src="../img/img-sistema/logo principal.png" width="120" height="50" alt="natutivo Logo"
                            loading="lazy" />
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation"><span
                            class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span
                                        class="text-danger"><b>1</b></span>
                                    <img src="../img/img-sistema/notificacion.png" height="25" alt="Notificación"
                                        loading="lazy" />
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#!">Noticias 1</a>
                                    <a class="dropdown-item" href="#!">Noticias 2</a>
                                    <a class="dropdown-item" href="#!">Noticias 3</a>

                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Español</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">


                                </div>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">My Perfil</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#!">Ver perfil</a>   
                                <a class="dropdown-item" href="#!">Cerrar</a>


                                </div>
                            </li>

                            <a class="nav-link me-3 me-lg-0" href="home.php?">
                                <img src="../img/img-sistema/informacion.png" height="25" alt="Avatar" loading="lazy" />

                            </a>

                        </ul>
                    </div>
                </div>
            </nav>

            <div class="container-fluid">