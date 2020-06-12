<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impulsate</title>
    <link rel="icon" type="image/png" href="img/coete.png" />
    <!-- Styles-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('icons/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<!--Header-->
<header class="bg-blanco-humo animated fadeInDown position-relative">
    <div class="container">
        <div class="row py-2">
            <div class="col-12 col-md-6">
                <small class="px-2"><a href="/" class="link-primary">Inicio</a></small>
                <small class="px-2"><a href="/nosotros" class="link-primary">Acerca de</a></small>
                <small class="px-2"><a href="/servicios" class="link-primary">Servicios</a></small>
            </div>
            <div class="d-none d-md-inline-block col-md-6 text-right">
                <small>
                    <a href="" class="link-primary"><i class="fab fa-facebook-f mr-3"></i></a>
                    <a href="" class="link-primary"><i class="fab fa-instagram mr-3"></i></a>
                    <a href="" class="link-primary"><i class="fab fa-whatsapp mr-2"></i> +53 973 643 140</a>
                </small>
            </div>
        </div>
        <section class="row position-relative py-3 align-items-center">
            <!--Logotipo-->
            <div class="col-3 col-lg-3 d-flex justify-content-between align-items-center">
                <a href="" class="w-100 h-100 d-block" style="max-width: 200px;">
                    <img src="img/coete.png" style="height: 55px;" class="d-sm-none ">
                    <img src="img/logor.png" style="height: 55px;" class="d-none d-sm-inline-block ">
                </a>
                <button class="d-none d-lg-inline-block boton-circular" data-button = "boton-abrir-web">
                    <i class="fa fa-bars fa-size-2x texto-plomo"></i>
                </button>

            </div>
            <div class="col-lg-6 bg-blanco-humo" id="contenedor-frm-buqueda">
                <!--Buscador Principal-->
                <form class="frm-buqueda">
                    <select>
                        <option>Todas</option>
                        <option>Calzado</option>
                        <option>Medicina</option>
                        <option>Restaurantes</option>
                    </select>
                    <input type="text" placeholder="Nombre del producto">
                    <button type="submit">Buscar</button>
                </form>
            </div>
            <div class="col-9 col-lg-3 d-flex align-items-center justify-content-end">
                <!--Favoritos-->
                <a href="" class="mr-3 boton-circular">
                    <i class="far fa-heart fa-size-2x"></i>
                    <span>1</span>
                </a>
                <!--Usuarios-->
                <div class="d-block mr-3 text-right">
                    <small class="d-block">Invitado!</small>
                    <a href="/login" class="link-primary small">iniciar sesión</a>
                </div>
                <a href="" class="boton-user">
                    <i class="far fa-user fa-size-2x"></i>
                </a>
                <!--Boton MenúMovil-->
                <button class="d-lg-none boton-circular" data-button = "boton-abrir">
                    <i class="fa fa-bars fa-size-2x"></i>
                </button>
            </div>
        </section>
    </div>

</header>
<!--Menu de Categorías-->
<div class="fondo-modal" data-button="boton-cerrar"></div>
<nav class="contenedor-categorias shadow animated">
    <h2 class="text-primary">Categorías <span class="boton-cerrar" data-button="boton-cerrar"></span></h2>
    <ul>
        <li>
            Calzado
            <a href="">Damas</a>
            <a href="">Caballeros</a>
            <a href="">Niños</a>
        </li>
        <li>
            Alimentos
            <a href="">Carnes</a>
            <a href="">Pastas</a>
            <a href="">Pescados</a>
            <a href="">Postres</a>
        </li>
        <li>
            Electrodomésticos
            <a href="">Linea Blanca</a>
            <a href="">Televisores y Celulares</a>
        </li>
        <li>
            Belleza
            <a href="">Maquillaje</a>
            <a href="">Cremas</a>
        </li>
        <li>
            Libros y Revistas
            <a href="">Cuentos Para niños</a>
            <a href="">Novelas</a>
        </li>
    </ul>
</nav>
<!--Fin Header-->

<!-- Main -->
<main class="main-top">
    @yield('content');
</main>
<!-- Fin Main-->

<!--Footer-->
<footer class="footer bg-blanco-humo">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4 col-md-6 col-lg-3">
                <img src="img/logor.png" style="height: 55px; margin-top: -1rem;">
                <div class="d-flex mt-3">
                    <i class="fas fa-globe-americas"></i>
                    <ul>
                        <li><a href="">Trujillo-Perú</a></li>
                    </ul>
                </div>
                <a href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="">
                    <i class="fab fa-whatsapp"></i>
                </a>
            </div>
            <div class="col-12 mb-4 col-md-6 col-lg-3">
                <h1>Conéctate</h1>
                <div class="d-flex">
                    <i class="fas fa-mail-bulk"></i>
                    <ul>
                        <li><a href="">Soporte al cliente</a></li>
                        <li><a href=""> Términos y condiciones</a> </li>
                        <li><a href="">Servicios para proveedores </a> </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 mb-4 col-md-6 col-lg-3">
                <h1>Acerca de la empresa</h1>
                <div class="d-flex">
                    <i class="fas fa-store-alt"></i>
                    <ul>
                        <li><a href="">¿Quíenes somos?</a></li>
                        <li><a href="">El equipo</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <h1>Mi cuenta</h1>
                <div class="d-flex">
                    <i class="fas fa-user"></i>
                    <ul>
                        <li><a href="">Iniciar sesión</a></li>
                        <li><a href="">Registrarse</a></li>
                        <li><a href="">Mi lista de deseos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center small pt-3">
                © 2020, Todos los derechos reservados - Impulsate
            </div>
        </div>
    </div>
</footer>
<!--Fin Footer-->



<!-- Scripts -->
<script src="{{ asset('js/app.js')}}" defer></script>
<script src="{{ asset('js/swiper.js')}}" defer></script>
<script src="{{ asset('js/scripts/botones.js')}}" defer></script>
<script src="{{ asset('js/scripts/sliders.js')}}" defer></script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>
