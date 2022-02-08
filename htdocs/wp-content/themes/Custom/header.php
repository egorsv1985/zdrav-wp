<?php
$items_count = count(WC()->cart->get_cart());
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <?php wp_head(); ?>
</head>

<body <?php body_class( $class ) ?>>
  <header class="header">
    <div class="container header__wrapper">
      <div class="header__logo"><?php echo get_custom_logo(); ?>
        <span class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</span>
      </div>

      <ul class="header__menu">
        <?php
        wp_nav_menu(
          array(
            'theme_location' => 'top',
            'container' => false,
            'menu_class' => 'burger__menu header_menu menu',
          )
        );
        ?>

      </ul>
      <div class="right-toolbar">
        <div class="header__cart">
          <div class="counter"><?php echo $items_count ?></div>
          <a href="<?php echo get_page_link(282) ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt=""></a>
        </div>
        <div class="header__burger"><span class="header__stick"></span></div>
        <nav class="burger__nav">




          <!--  <ul class="burger__menu">
            <li><a href="#" class="burger__item">Все устройства</a></li>
            <li><a href="#" class="burger__item">Доставка и оплата</a></li>
            <li><a href="#" class="burger__item">Контакты</a></li>
            <li><a href="#" class="burger__item">Интересное</a></li>
          </ul> -->
        </nav>
      </div>
  </header>





  <div class="menu-right">
    <div class="close-btn">
      <img src="<?php bloginfo('template_url'); ?>/assets/img/close-btn.svg" alt="">
    </div>
    <div class="content">

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'top',
          'container' => false,
          'menu_class' => 'burger__menu mobile_menu menu',
        )
      );
      ?>


      <div class="bottom-links">
        <a href="">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="">
        </a>
        <a href="">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/telegram.svg" alt="">
        </a>
        <a href="">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/whatsapp.svg" alt="">
        </a>
      </div>
    </div>
  </div>