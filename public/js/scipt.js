$(document).ready(function () {
    $(".slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 1000,
        fade:true,
        dots: true,
        centerMode: false,
        infinite: true,
        pauseOnHover: true,
        pauseOnFocus: true,
        touchMove: true,
        swipe: true,
    });
});
