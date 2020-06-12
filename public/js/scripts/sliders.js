var Banner1 = new Swiper('#banner1',{
    autoplay:{
        delay: 5000,
        reverseDirection: false
    },
    speed: 1500,
    effect: 'fade',
    fadeEffect: {
        crossFade: false
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

var Servicios1 = new Swiper('#servicio1',{
    slidesPerView: 1,
    spaceBetween: 2,
    breakpoints: {
        520: {
            slidesPerView: 2
        },
        990: {
            slidesPerView: 3
        },
        1208: {
            slidesPerView: 4
        }
    }
});

var Servicios1 = new Swiper('#servicios2',{
    autoplay:{
        delay: 5000,
        reverseDirection: false
    },
    speed: 1500,
    effect: 'fade',
    slidesPerView: 1,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});

var BestProducts = new Swiper('#bestproducts',{
    slidesPerView: 1,
    spaceBetween: 2,
    navigation: {
        nextEl: '#next-nuevos',
        prevEl: '#prev-nuevos',
    },
    breakpoints: {
        1280: {
            slidesPerView: 2
        }
    }
});
var Ofertas1 = new Swiper('#ofertas1',{
    slidesPerView: 1,
    spaceBetween: 2,
    navigation: {
        nextEl: '#next-oferta',
        prevEl: '#prev-oferta',
    },
    breakpoints: {
        520: {
            slidesPerView: 2
        },
        990: {
            slidesPerView: 3
        },
        1208: {
            slidesPerView: 4
        }
    }
});

var Ofertas1 = new Swiper('#recomendados1',{
    slidesPerView: 1,
    spaceBetween: 2,
    navigation: {
        nextEl: '#next-recomendado',
        prevEl: '#prev-recomendado',
    },
    breakpoints: {
        520: {
            slidesPerView: 2
        },
        990: {
            slidesPerView: 3
        },
        1208: {
            slidesPerView: 4
        }
    }
});