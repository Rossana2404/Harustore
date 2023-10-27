<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assents/img/logo">
    <title>Haru Store</title>

    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Alertify CSS -->
    <link rel="stylesheet" type="text/css" href="node_modules/alertifyjs/build/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="node_modules/alertifyjs/build/css/alertify.css">

    <!-- Bootstrap 5 JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Alertify JavaScript -->
    <script src="node_modules/alertifyjs/build/alertify.js"></script>

    <!-- Estilos personalizados -->

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="js/funciones.js"></script>
    <link href="assents/styles.css" rel="stylesheet">



   <style>
        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            font-family: Arial, sans-serif;
            text-align: center;
            position: relative; /* Necesario para posicionar elementos secundarios */
        }

        .container::before {
            content: "";
            background: url('assents/img/logo3') no-repeat center center / cover, #f0f0f0;
            opacity: 10; /* Ajusta la opacidad de la imagen de fondo */
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            position: absolute;
            z-index: -1; /* Coloca el fondo detrás del contenido */
        }

        h1 {
            color: brown;
            font-weight: bold;
            font-size: 24px;
        }

        .negrita {
            font-weight: bold;
        }

        .lista ul {
            list-style-type: none;
            padding: 0;
        }

        .lista ul li {
            margin-bottom: 10px;
        }
    </style>

</head>




<body>
    <div class="header-container">
        <div class="welcome-text">¡Bienvenido!</div>

        <div class="img-logo">
            <img src="assents/img/logo3" title="Haru Store" alt="Haru Store" style="width: 300px" ;>
        </div>
        <div class="login-registro">
            <img src="assents/img/descarga.png" class="img-fluid" style="width: 50px; height: 50px; display: inline-block;">
            <a href="loginusuario.php" style="display: inline-block; color: brown;">Ingresa</a>
            <li class="nav-item" style="display: inline-block;">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="registro.php" style="color: brown;">Registrate</a>
            </li>
        </div>
        <div class="social-icons">
            <a href="#" class="social-icon">
                <img src="assents/img/facebook.png" alt="Facebook">
            </a>
            <a href="#" class="social-icon">
                <img src="assents/img/twitter.png" alt="Twitter">
            </a>
            <a href="#" class="social-icon">
                <img src="assents/img/instagram.png" alt="Instagram">
            </a>
        </div>
    </div>

    <div>

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e0766d; font-weight: bold;font-size: 24px;padding: 20px; margin-bottom: 10px;">

            <div class="container-fluid">
                <a class="navbar-brand" href="index.php" style="color: #6f4e37;">
                    <img src="assents/img/logo.jpg" alt="Haru Store" width="100" height="100" style="margin-right: 10px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 30px;">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                           <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                                   Informacion
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#" style="font-size: 20px;">Términos y condiciones</a></li>
                                    <li><a class="dropdown-item" href="#" style="font-size: 20px;">Medios de Pago</a></li>
                                    <li><a class="dropdown-item" href="#" style="font-size: 20px;">Envíos</a></li>
                                    <li><a class="dropdown-item" href="#" style="font-size: 20px;">Adopta</a></li>
                                    <li><a class="dropdown-item" href="#" style="font-size: 20px;">Noticias</a></li>

                                </ul>
                            </li>

                        <li class="nav-item">
                            <a class="nav-link" data-toggle="modal" data-target="#exampleModal2" href="#" style="color:B4513;">Contacto</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./vistas/perro.php" style="color: #6f4e37;">Perros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./vistas/gato.php" style="color: #6f4e37;">Gatos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                                Categorias
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Alimento</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Snacks</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Paseo</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Camas</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Platos</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Vestuario</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Transporte</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#" style="font-size: 30px;">OFERTAS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: #6f4e37;">
                                Salud y bienestar
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Comida especial</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Agua Fresca</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Higiene</a></li>
                                <li><a class="dropdown-item" href="#" style="font-size: 20px;">Ejercicio Regular</a></li>

                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex" id="search-form">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-outline-success" type="button" id="search-button" style="background-color: #e0766d; color: #6f4e37; padding: 10px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h0a6.5 6.5 0 0 0 1.397-1.398Zm1.207-1.207h0L14.02 12.02h0l-2.878 2.88h0a1 1 0 0 1-1.32-1.32l2.88-2.88Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </nav>





        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Clientes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h6>Nombre Completo</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" id="completo" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Dirección</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-home"></i></span>
                            </div>
                            <input type="text" class="form-control" id="dir" placeholder="Pje Calle Block Av." aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Email</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" id="email" class="form-control" placeholder="Correo Electrónico" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Telefono</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                            </div>
                            <input type="text" id="tel" class="form-control" placeholder="+56 9" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Password</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="password" minlength="6" id="pass1" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            <input type="password" minlength="6" id="pass2" class="form-control" placeholder="Confirmación" aria-label="Username" aria-describedby="basic-addon1">

                        </div>
                        <h6 id="min">Mínimo 6 Caracteres</h6>
                    </div>
                    <div id="boton" class="modal-footer text-left">

                        <input type="submit" value="Registrarse" id="registrar" class="btn btn-primary" data-dismiss="modal" />
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Contacto de Clientes</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="alert alert-primary alert-dismissible fade show text-left" role="alert">
                            <strong>Info!</strong> Si tienes alguna pregunta no dudes en contactarnos. Estaremos
                            atentos a
                            responder
                            cualquier inquietud que tengas.

                        </div>
                        <h6>Nombre Completo</h6>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" id="nombre" class="form-control" placeholder="Nombres Apellidos" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Email</h6>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">

                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                            </div>
                            <input type="email" id="mail" class="form-control" placeholder="Correo" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <h6>Mensaje</h6>
                        <div class="input-group">

                            <textarea class="form-control" id="campo" aria-label="With textarea"></textarea>
                        </div>


                    </div>
                    <div id="boton" class="modal-footer text-left">

                        <input type="submit" value="Contactar" id="contactar" class="btn btn-primary" data-dismiss="modal" />
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade col-12" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content col-12">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detalles de tu compra</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body col-12" id="cuerpo">
                        <div class="col-sm-6">
                            <i class="fa fa-shopping-cart" style="font-size:36px"></i>
                        </div>
                        <div class="col-sm-6 text-left">
                            <p>
                                <i class="icon fa fa-check-square-o"></i>Cantidad<br>
                                <i class="icon fa fa-check-square-o"></i>total<br>
                                <i class="icon fa fa-check-square-o"></i>Forma de pago<br>

                            </p>
                        </div>

                    </div>
                    <div id="boton" class="modal-footer text-left">
                        <input type="submit" value="Volver" id="añadir al Carrito" class="btn btn-primary" data-dismiss="modal" />
                        <input type="submit" value="Añadir al Carrito" id="" class="btn btn-primary" data-dismiss="modal" />
                    </div>
                </div>
            </div>
        </div>

        <body>
            <div class="container">
                <div class="logo">Haru Store</div>
                <p>
                    <strong><span style="font-size: 30px;">Bienvenidos a Haru Store,</span></strong> tu destino en línea para todo lo relacionado con las necesidades de tus queridas mascotas. <br>
                    Somos más que una simple tienda; somos amantes de los animales comprometidos a brindar el mejor cuidado y atención a nuestros amigos peludos.
                </p>

                <h1>Nuestra Historia</h1>
                <p>Nuestra historia comenzó con una pasión compartida por los animales y un deseo de hacer una diferencia en sus vidas.
                    Fundada en 2023, Haru Store se ha convertido en un lugar donde los amantes de los animales pueden encontrar productos
                    de alta calidad para sus mascotas, al mismo tiempo que apoyan nuestra misión de promover la adopción de animales necesitados.</p>

                <h1>Nuestra Misión</h1>
                <p>En Haru Store, nuestra misión es proporcionar a los dueños de mascotas los productos y recursos más excepcionales para el cuidado y
                    bienestar de sus compañeros peludos. Creemos que cada mascota merece una vida feliz y saludable, y estamos comprometidos a brindar
                    los accesorios más innovadores y los alimentos más nutritivos para ayudar a lograrlo.</p>

                <h1>Adopción de Animales</h1>
                <p>Estamos firmemente comprometidos con la causa de la adopción de animales. Creemos en dar una segunda oportunidad a aquellos animales que han sido abandonados o maltratados. Además de ser una tienda en línea, trabajamos junto a ustedes para promover
                    la adopción responsable de animales. Cada compra que haces en Haru Store contribuye a nuestra labor en este sentido, ayudando a proporcionar hogares amorosos a aquellos que lo necesitan.</p>

                <h1>Nuestro Equipo</h1>
                <p>Detrás de Haru Store hay un equipo apasionado de amantes de los animales. Cada miembro de nuestro equipo comparte un compromiso común: mejorar la vida de las mascotas y fortalecer el vínculo especial entre los humanos y los animales. Desde expertos en nutrición animal hasta amantes de la moda para mascotas, nuestro equipo está aquí para ayudarte a tomar decisiones informadas y brindarte el mejor servicio posible.</p>

                <div class="lista">
                    <h1>Cómo Nos Diferenciamos</h1>
                    <ul>
                        <li><span class="negrita">Calidad Garantizada:</span> Enorgullecemos de ofrecer productos de la más alta calidad que han sido cuidadosamente seleccionados para satisfacer las necesidades de tus mascotas.</li>
                        <li><span class="negrita">Compromiso con la Comunidad:</span> Nuestra participación activa en la promoción de la adopción y el bienestar animal demuestra nuestro compromiso con la comunidad y los valores que compartimos.</li>
                        <li><span class="negrita">Atención al Cliente Personalizada:</span> Estamos aquí para ti y tus mascotas. Nuestro equipo de atención al cliente está listo para ayudarte en cada paso del camino.</li>
                    </ul>
                </div>

                <p>Gracias por elegir Haru Store. Juntos, estamos haciendo una diferencia en la vida de las mascotas y trabajando hacia un mundo donde todos los animales sean amados y cuidados.</p>
                <h1><strong>¡Gracias por ser parte de nuestra familia!</strong></h1>
                <span class="negrita">El Equipo de Haru Store</span>
            </div>

        

<!-- Footer -->
<footer class="footer bg-pink text-brown">
    <div class="container-fluid py-5">
        <div class="row py-4">
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Información</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white">Quiénes somos</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Términos y condiciones</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Medios de Pago</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Envíos</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Adopta</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Noticias</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Servicio al Cliente</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white">Contacto</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Devoluciones</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Extras</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white">Marcas</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Vouchers de Regalo</a></li>
                    <li class="mb-2"><a href="#" class="text-white">Ofertas</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 mb-4 mb-lg-0">
                <h6 class="text-uppercase font-weight-bold mb-4">Mi Cuenta</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white">Olvidé mi contraseña</a></li>
                    <li class="mb-2"><a href="loginusuario.php" class="text-white">Inicio de sesión</a></li>
                    <li class="mb-2"><a href="registro.php" class="text-white">Registro</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6">
                <h6 class="text-uppercase font-weight-bold mb-4">Escríbenos</h6>
                <p class="text-muted mb-4">
                    <a href="https://wa.me/1234567890" target="_blank" class="btn btn-success">
                        ¡Contáctanos por WhatsApp! <i class="fab fa-whatsapp"></i>
                    </a>
                </p>
                <div class="p-1 rounded border">
                    <div class="input-group">
                        <input type="email" placeholder="Envíanos un Mail" aria-describedby="button-addon1" class="form-control border-0 shadow-0">
                        <div class="input-group-append">
                            <button id="button-addon1" type="submit" class="btn btn-link text-white"><i class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<!-- Copyrights -->
<div class="bg-light py-4">
    <div class="container text-center">
        <p class="text-muted mb-0 py-2">Haru Store 2023,todos los derechos reservados. </p>
    </div>
</div>
</footer>
<!-- End -->