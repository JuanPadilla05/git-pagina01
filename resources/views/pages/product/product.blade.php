@extends('layouts.layout')
@section('content')
<section class="container-fluid">
         <!--Link Paginas-->
         <ol class="link-paginas">
            <li class="item-link-paginas"><a href="">Tienda</a><i class="fas fa-chevron-right"></i></li>
            <li class="item-link-paginas"><a href="">Polo para Caballeros</a><i class="fas fa-chevron-right"></i></li>
            <li class="item-link-paginas activo">Adidas Polo Club-Win<i class="fas fa-chevron-right"></i></li>
         </ol>
         <!--Fin Link Paginas-->

         <!--Descripcion Producto-->
         <div class="row align-items-center">
            <div class="col-12 col-md-6 mb-4">
               <div class="img-producto-detalle">
                  <img src="../img/adidas-polo-club.png" alt="" class="img-contain">
               </div>
            </div>
            <div class="col-12 col-md-6">
               <div class="tarjeta-detalle">
                  <article>
                     <h1>Adidas Polo Club-Win</h1>
                     <h4>S/. 120.50</h4>
                     <h6>Disponibilidad: <var>En Stock</var></h6>
                     <p>
                        The mild flavor of the chayote is sometimes compared to a cucumber or zucchini, and it can be eaten raw or cooked. The chayote’s firm, crisp texture and the fact that it absorbs flavors make it an excellent choice for sautés and salads. Its firmness also makes it ideal for spiralizing.
                     </p>                     
                  </article>
                  <section>
                     <label for="">Cantidad:</label>
                     <div class="cantidad mb-3 mr-3">
                        <button type="button">-</button>
                        <input type="text" value="1">
                        <button type="button">+</button>                        
                     </div>
                     <a href="https://wa.me/51971897072?text=Me%20interesa%20comprar%20Adidas%20Polo%20Club-Win"class="boton-carrito d-lg-inline-block"><i class="fab fa-whatsapp mr-2"></i> COMPRAR AHORA</a>
                     
                     <div class="row mt-5">
                        <label class="col-3" for="">Categoría:</label>
                        <h6 class="col-9">Polo para Caballeros</h6>
                     </div>
                     <div class="row">
                        
                     </div>
                  </section>
               </div>
            </div>
         </div>
         <!--Fin Descripcion Producto-->
      </section>    
@endsection