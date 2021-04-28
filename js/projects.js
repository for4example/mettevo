jQuery(document).ready(function($) {
$('.block-other-projects__slider').slick({
    dots: false,
    infinite: true,
    adaptiveHeight: true, 
    prevArrow: $(".prev-slide"),
    nextArrow: $(".next-slide"),
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 650,
        settings: {
            dots: true,
            slidesToShow: 1,
        }
    }]
});
});