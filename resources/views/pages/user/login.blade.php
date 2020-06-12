@extends('layouts.layout')
@section('content')
    <section class="container-fluid" style="padding: 5rem 0;">
         <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 mx-auto">
            <h2 class="mb-0">
               INICIAR SESIÓN
            </h2>
            <div class="borde-tema"></div>
            <div class="border-bottom borde-azulado mb-4"></div>
            <h5 class="h6 noto-sans text">Por favor ingresa tus credenciales para iniciar sesión</h5>
            <form class="form">
               <label for="">Email</label>
               <input type="email" placeholder="email@dominio.com">
               <label for="">Contraseña</label>
               <input type="password" placeholder="********">
               <button type="button">iniciar sesión</button>
            </form>
            <p class="text-center">¿No tienes una cuenta? <a href="/registro">registrarse</a></p>
        </div>
    </section>
@endsection