@extends('layouts.layout')
@section('content')
    <section class="container animated fadeInUp">
        <div class="row py-5">
            <div class="col-12 col-md-8 mx-auto text-center">
                <div class="w-100 mb-5"style="height: 100px; object-fit: contain;">
                    <img src="/img/logor.png" class="img-contain">
                </div>
                <p class="text">
                    Impulsa-T es un emprendimiento que nace de la inquietud de crear una solución de comercio electrónico para las medianas y pequeñas empresas del Perú.
                </p>
                <p class="text">
                    Si deseas publicitar tu negocio, llegar a más clientes y vender más. Nuestra plataforma Impulsa-T es para ti.
                </p>
                <p class="text">
                    De forma fácil podrás promocionar tus productos o servicios, nuestra tecnología esta optimizada para que fácilmente el cliente se ponga en contacto contigo y garantice una compra segura.
                </p>
            </div>
        </div>
    </section>
    <section class="container-fluid bg-secundario" style="background-color: rgba(8, 28, 53, .03);">
        <div class="row" >
            <div class="col-12 text-center">
                <h5>CONOCE AL EQUIPO</h5>
                <h2 class="mb-5 text-primary noto-sans">ImpulsaT está conformado por:</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="container">
                    <div class="row ">
                        <div class="col-12 col-lg-4">
                            <div class="tarjeta-colaborador bg-white shadow">
                                <img src="" alt="">
                                <h3>Est. James David Sandoval Bartra</h3>
                                <h4>Desarrollador Front-End & UI/UX</h4>
                                <a href="" class="fab fa-facebook-f mr3"></a>
                                <a href="" class="fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="tarjeta-colaborador bg-white shadow">
                                <img src="" alt="">
                                <h3>Ing. Cristian Leiva Licán</h3>
                                <h4>Director de Marketing</h4>
                                <a href="" class="fab fa-facebook-f mr3"></a>
                                <a href="" class="fab fa-linkedin-in"></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <div class="tarjeta-colaborador bg-white shadow">
                                <img src="" alt="">
                                <h3>Ing. Juan Anderson Padilla Rodríguez</h3>
                                <h4>BackEnd Developer</h4>
                                <a href="" class="fab fa-facebook-f mr3"></a>
                                <a href="" class="fab fa-linkedin-in"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
