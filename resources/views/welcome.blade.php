@extends('layouts.layout')
@section('content')
    <!--Banner Publicitario-->
    <section class="container">
        <div class="row">
            <div class="col-12 col-lg-7 col-xl-8 mb-3 mb-lg-0 animated fadeInLeft">
                <div class="swiper-container w-100 h-100 shadow" id="banner1">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="item-banner" style="background-color: #003ECA;">
                                <img src="img/banner1.png" alt="">
                                <div class="description text-white">
                                    <h2>Productos Destacados</h2>
                                    <h1>Gran Oferta Cuarentena</h1>
                                    <h3>Hasta 40% de descuento</h3>
                                    <a href="">Consíguelo ahora</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-banner" style="background-color: #D22326;">
                                <img src="img/banner4.png" alt="">
                                <div class="description text-white">
                                    <h2>Delivery Hot</h2>
                                    <h1>Llevamos tu pedido en donde estés</h1>
                                    <h3>Todas las entregas son gratuitas</h3>
                                    <a href="">Consultar ahora</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="item-banner" style="background-color: #FFD800;" >
                                <img src="img/banner2.png" alt="">
                                <div class="description">
                                    <h2>Productos de gran venta</h2>
                                    <h1>Bebidas Mixtas de Salud Nutritiva</h1>
                                    <h3>A Sólo S/. 3.99</h3>
                                    <a href="">Consíguelo ahora</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-12 col-lg-5 col-xl-4 animated fadeInRight">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12 pl-lg-0">
                        <div class="tarjeta shadow mb-3" style="width: 100%;height: 200px;background-color: #8910CE;">
                            <a href="">
                                <h2 class="text-light">Ropa para niños y Niñas</h2>
                                <h6 class="text-light">Vestido DOKY</h6>
                            </a>
                            <img src="img/anuncio1.png" alt="">
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-12 pl-lg-0">
                        <div class="tarjeta shadow" style="width: 100%;height: 200px; background-color: #002C51;">
                            <a href="">
                                <h2 class="text-light">Entregas Delivery o Presencial</h2>
                                <h6 class="text-light">Consultas cuarentena</h6>
                            </a>
                            <img src="img/delivery.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Fin Banner Publicitario-->
    <!--Tienda Productos-->
    
        <div class="row">
            <aside class="col-12 col-lg-4 col-xl-3 mb-3">
                <div class="row py-2">
                    <div class="col-12 col-md-4 col-lg-12 mb-4 mb-md-0 mb-lg-4">
                        <div class="tarjeta2 rounded shadow" style="background-color: #db76cc;">
                            <img src="/img/cartera-guess.png" alt="">
                            <div class="caption">
                                <h1>Cartera Guess</h1>
                                <h2>Recién llegados en carteras a los mejores precios</h2>
                                <a href="">Descubre Ahora</a>
                            </div>
                        </div>
                    </div>
                    <!--Top más Vendidos-->
                    <div class="col-12 col-md-8 col-lg-12 d-none d-md-inline-flex">
                    @foreach ($masvendidos as $descuento)
                        <div class="container">
                            <div class="row pt-3">
                                <div class="d-none d-md-inline-block col-12 ">
                                    <h2 class="mb-0 h4 poppins">
                                        <b>Top</b><span class="f-300"> más vendido</span>
                                    </h2>
                                </div>
                                <div class="d-none d-md-inline-block col-md-6 col-lg-12">
                                    <a href="#" class="tarjeta-top">
                                        <img src="/img/products/<?= $descuento['image'] ?>" class="img-contain">
                                        <div class="detalle">
                                            <h2><?= $descuento['name'] ?></h2>
                                            <small>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <ins>S/. <?= $descuento['price'] ?></ins>
                                        </div>
                                    </a>
                                </div>
                               <!-- <div class="d-none d-md-inline-block col-md-6 col-lg-12">
                                    <a href="#" class="tarjeta-top">
                                        <img src="/img/products/img2.jpg" alt="">
                                        <div class="detalle">
                                            <h2>Zapatillas Reebok Rojas</h2>
                                            <small>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <ins>S/. 294.00</ins>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-none d-lg-inline-block col-12 ">
                                    <a href="#" class="tarjeta-top">
                                        <img src="/img/products/img3.jpg" alt="">
                                        <div class="detalle">
                                            <h2>Zapatillas Reebok Rojas</h2>
                                            <small>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <ins>S/. 294.00</ins>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-none d-lg-inline-block col-12 ">
                                    <a href="#" class="tarjeta-top">
                                        <img src="/img/products/img4.jpg" alt="">
                                        <div class="detalle">
                                            <h2>Zapatillas Reebok Rojas</h2>
                                            <small>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <ins>S/. 294.00</ins>
                                        </div>
                                    </a>
                                </div>
                                <div class="d-none d-lg-inline-block col-12 ">
                                    <a href="#" class="tarjeta-top">
                                        <img src="/img/products/img5.jpg" alt="">
                                        <div class="detalle">
                                            <h2>Zapatillas Reebok Rojas</h2>
                                            <small>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </small>
                                            <ins>S/. 294.00</ins>
                                        </div>
                                    </a>
                                </div>
                            </div>-->
                            @endforeach
                            
                        </div>
                    </div>
                    <!--Fin Top más Vendidos-->

                </div>
            </aside>
            <div class="col-12 col-lg-8 col-xl-9 container-fluid">
                <div class="p-3 mb-3">
                    <!--Nuevos Productos-->
                    <div class="row py-2 justify-content-between">
                        <div class="col-9">
                            <h2 class="mb-0 h4 poppins">
                                <b>Lo más</b><span class="f-300"> nuevo</span>
                            </h2>
                        </div>
                        <div class="col-3">
                            <ol class="botones-flechas">
                                <li id="prev-nuevos"><i class="fas fa-chevron-left"></i></li>
                                <li id="next-nuevos"><i class="fas fa-chevron-right"></i></li>
                            </ol>
                        </div>
                    </div>
                    <div class="swiper-container" id="bestproducts">
                        <div class="swiper-wrapper">
                        <!-- AQUIIIIIIIIIIIIIIIIIIIII ESTA EL BUCLE DE PRODUCTOS 'Lo más nuevo'-->
                            
                            @foreach ($nuevos as $product)
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-4 mb-4 mb-md-0">
                                        <div class="img-producto">
                                            <img src="/img/products/<?= $product['image'] ?>" class="img-contain">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-8">
                                        <div class="tarjeta-detalle">
                                            <article>
                                                <h5 class="noto-sans"><?= $product['name'] ?></h5>
                                                <h4>S/. <?= $product['price'] ?></h4>
                                                <h6>Disponibilidad: <var>En Stock</var></h6>
                                                <p>
                                                    <?= $product['description'] ?>
                                                </p>
                                            </article>
                                            <button type="button" class="boton-carrito btn-block">COMPRAR</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- AQUIIIIIIIIIIIIIIIIIIIII TERMINA EL BUCLE DE PRODUCTOS 'Lo más nuevo'-->
                        </div>
                    </div>
                    <!--Fin Nuevos Productos-->
                </div>
                <div class="p-3 mb-3">
                    <!--Lo más pedido-->
                    <div class="row py-2 justify-content-between">
                        <div class="col-9">
                            <h2 class="mb-0 h4 poppins">
                                <b>Lo más</b><span class="f-300"> pedidos</span>
                            </h2>
                        </div>
                        <div class="col-3">
                            <ol class="botones-flechas">
                                <li id="prev-oferta"><i class="fas fa-chevron-left"></i></li>
                                <li id="next-oferta"><i class="fas fa-chevron-right"></i></li>
                            </ol>
                        </div>
                    </div>
                    <div class="swiper-container" id="ofertas1">
                        <div class="swiper-wrapper">
                        @foreach ($descuentos as $descuento)
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/<?= $descuento['image'] ?>" class="img-contain">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                           <a><?= $descuento['description'] ?></a>
                                            
                                        </h3>
                                        <span>
                                    <ins>S/. <?= $descuento['price'] ?></ins>
                                    <del>S/.<?= $descuento['previous_price'] ?></del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <!--<div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img11.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Adidas-Medias Urbana</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img11.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Adidas Polo-Graphic</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img12.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href=""> Zapatillas Reebook Royal Complete</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img13.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Polera Gzuck azul</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img14.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Polera Gzuck azul</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img15.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Polera Gzuck azul</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">COMPRAR</button>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="swiper-slide">
                                <figure class="tarjeta-producto">
                                    <div class="tarjeta-insignia">-8%</div>
                                    <img src="/img/products/img16.jpg" class="tarjeta-img">
                                    <div class="tarjeta-acciones">
                                        <a data-toggle="tooltip" data-placement="top" title="Ver detalles">
                                            <i class="far fa-eye"></i>
                                        </a>
                                        <a data-toggle="tooltip" data-placement="top" title="Agregar a Deseos">
                                            <i class="far fa-heart"></i>
                                        </a>
                                    </div>
                                    <figcaption class="tarjeta-caption">
                                        <h3>
                                            <a href="">Polera Gzuck azul</a>
                                        </h3>
                                        <span>
                                    <ins>S/. 79.99</ins>
                                    <del>S/.99.00</del>
                                 </span>
                                        <button type="button" class="boton-carrito">AGREGAR CARRITO</button>
                                    </figcaption>
                                </figure>
                            </div>-->
                            @endforeach
                        </div>
                    </div>

                    <!--Fin Lo más pedido-->
                </div>
                <!--Publicidad-->
                <div class="row">
                    <div class="col-12 col-md-6 mb-3">
                        <div class="tarjeta2 rounded shadow" style="background-color: #5E5196;">
                            <img src="img/colgador.png" alt="">
                            <div class="caption">
                                <h1>Love Outfit</h1>
                                <h2>Gran oferta con descuentazos</h2>
                                <a href="">Descrubre Ahora</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="tarjeta2 rounded shadow" style="background-color: #2E4BDB;">
                            <img src="img/cartera-guess.png" alt="">
                            <div class="caption">
                                <h1>Cartera Guess</h1>
                                <h2>Recién llegados en carteras a los mejores precios</h2>
                                <a href="">Descubre Ahora</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Fin Publicidad-->
            </div>
        </div>
    </section>
    <!--Fin Tienda Productos-->
@endsection
