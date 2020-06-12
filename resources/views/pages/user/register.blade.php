@extends('layouts.layout')
@section('content')
    <section class="container-fluid" style="padding: 5rem 0;">
         <div class="col-12 col-sm-10 col-md-8 col-lg-6 mx-auto">
            <h2 class="mb-0 d-flex justify-content-between align-items-end">
               REGISTRARSE
               <span class="h6">Tengo una cuenta <a href="/login">iniciar sesión</a></span>
            </h2>
            <div class="borde-tema"></div>
            <div class="border-bottom borde-azulado mb-4"></div>
            <h5 class="h6 noto-sans text">Los campos con <span class="text-danger">(*)</span> con obligatorios</h5>
            <form class="form">
               <div class="form-row">
                  <div class="col-12 col-md-6">
                     <label for="">Nombres <span class="text-danger">*</span></label>
                     <input type="text">
                  </div>
                  <div class="col-12 col-md-6">
                     <label for="">Teléfono o Celular <span class="text-danger">*</span></label>
                     <input type="text">
                  </div>
               </div>
               <label for="">Dirección <span class="text-danger">*</span></label>
               <input type="text">
               <label for="">Email <span class="text-danger">*</span></label>
               <input type="email">
               <div class="form-row">
                  <div class="col-12 col-md-6">
                     <label for="">Contraseña <span class="text-danger">*</span></label>
                     <input type="password">
                  </div>
                  <div class="col-12 col-md-6">
                     <label for="">Repetir Contraseña</label>
                     <input type="password">
                  </div>
               </div>
               <button type="button">iniciar sesión</button>
            </form>            
         </div>
      </section>
@endsection