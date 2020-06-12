/**
 * Boton menú de categorías
 */
$('[data-button = "boton-abrir"]').on('click',function(){
    $('.contenedor-categorias').addClass('activo');
    $('.fondo-modal').addClass('fondo-modal-activo');
});

$('[data-button = "boton-cerrar"]').on('click',function(){
    $('.contenedor-categorias').removeClass('activo');
    $('.fondo-modal').removeClass('fondo-modal-activo');
});

$('[data-button = "boton-abrir-web"]').on('click',function(){
    
    if($('.contenedor-categorias').hasClass('fadeInUp')){
        $('.contenedor-categorias').removeClass('fadeInUp');
        $('.contenedor-categorias').css('display','none');
    }else{
        $('.contenedor-categorias').css('display','block');
        $('.contenedor-categorias').addClass('fadeInUp');
    }
});