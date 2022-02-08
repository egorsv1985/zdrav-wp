jQuery( function( $ ) {

  $('.product-thumb-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
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




  $('.header__burger').on('click', function(){
    console.log('click btn');
    $('.menu-right').addClass('open');
  });


  $('.menu-right .close-btn').on('click', function(){
    $('.menu-right').removeClass('open');
  });
  // $('.menu-right a').on('click', function(){
  //   $('.menu-right').removeClass('open');
  // });


  $('.mobile_menu li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();

    $(this).next().slideToggle();
  })

  

});
