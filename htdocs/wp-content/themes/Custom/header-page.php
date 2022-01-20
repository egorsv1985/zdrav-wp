<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/assets/css/add.css">
  <title>Document</title>
  <?php wp_head(); ?>
</head>

<body>
  <div class="container" id="header">
    <header class="header">
      <div class="header__logo">
      <?php echo get_custom_logo(); ?>
        <h2 class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</h2>
      </div>
      <div class="header__menu">
        <?php wp_nav_menu(array(
            'theme_location' => 'top',
            'container'       => null,
            'items_wrap' => '%3$s'
        )); ?>
      </div>
      <div class="right-toolbar">
        <div class="header__cart">
          <div class="counter">1</div>
          <a href="<?php the_permalink(282);?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/cart.svg" alt=""></a>
        </div>
        <div class="header__burger"><span class="header__stick"></span></div>
        <nav class="burger__nav">
          <ul class="burger__menu">
            <li><a href="#" class="burger__item">Все устройства</a></li>
            <li><a href="#" class="burger__item">Доставка и оплата</a></li>
            <li><a href="#" class="burger__item">Контакты</a></li>
            <li><a href="#" class="burger__item">Интересное</a></li>
          </ul>
        </nav>
      </div>
    </header>
  </div>