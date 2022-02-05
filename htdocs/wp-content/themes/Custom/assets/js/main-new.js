jQuery( function( $ ) {

  $('.product-thumb-carousel').slick({
    slidesToShow: 1,
    asNavFor: ('.slider-bottom'),
    arrows: false,

  });

  $('.slider-bottom').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: ('.product-thumb-carousel'),
    arrows: false,
    focusOnSelect: true

  });

  

});
