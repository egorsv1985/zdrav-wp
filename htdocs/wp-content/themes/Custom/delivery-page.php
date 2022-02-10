<?php
/*
Template Name: Доставка и оплата
*/
?>
<?php get_header(); ?>

<?php 
    wp_enqueue_style('add-new', get_template_directory_uri() . '/add.css');
?>
  <div class="container">
    <div class="path">
      <?php
      if ( function_exists('yoast_breadcrumb') ) {
        yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
      }
      ?>
      <!-- <a href="<?php echo home_url();?>">Главная</a>
      <span>Доставка и оплата</span> -->
    </div>
    <div class="delivery">
      <span class="delivery__title">Доставка</span>
      <div class="delivery__content">
        <div class="delivery__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/points.png" alt=""></div>
        <div class="delivery__info">
        <?php the_field('delivery');?>  
        <!-- <span class="delivery__article">Доставка до пункта выдачи или «до двери» осуществляется ТК СДЭК Стоимость от
            250
            (Москва) до 600 (Иркутск) рублей, от
            трёх до восьми рабочих дней. Точную стоимость можно посмотреть в корзине, при оформлении заказа. </span>
          <span class="delivery__article">До терминалов
            транспортных компаний доставка бесплатно. Вы платите только за межтерминальные перевозки! </span>
          <span class="delivery__article">При заказе доставки
            по России
            через СДЭК возможна оплата при получении в пункте самовывоза.</span>
          <span class="delivery__article">Самовывоз <br> Безоплатно в городе Минск (РБ) по
            согласованию (
            тел: +375 (25) 945-87-86</span> -->
        </div>
      </div>
    </div>
    <div class="pay">
      <div class="pay__title">Оплата</div>
      <div class="pay__info">
        <div class="pay__text">
          <div class="pay__uppertext"><span>Все цены, указанные на сайте, являются актуальными, окончательными и
              включают
              все налоги. <br> Оплата возможна как
              физическими так и юридическими лицами.</span></div>
          <div class="pay__lowertext">
            <span class="pay__lowertext-title">Способы оплаты:</span>
            <span class="pay__lowertext-text">Наличными рублями курьеру. <br> Безналичным расчётом (с расчётного счета в
              банке или с карты). <br> Банковской картой курьеру. <br>
              Банковской картой на сайте (оплата через ПАО Сбербанк с использованием карт МИР, Visa, Mastercard). <br> С
              использованием
              систем мобильных платежей Apple Pay, Google Pay, Samsung Pay.</span>
          </div>
        </div>
        <div class="pay__desk">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/delivery/pay-methods.png" alt="">
        </div>
      </div>
    </div>
  </div>
<?php get_footer(); ?>