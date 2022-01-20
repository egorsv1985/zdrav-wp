<?php get_header('page');?>
  <div class="container">
    <div class="path">
      <a href="<?php echo home_url();?>">Главная</a>
      <h2>Ошибка 404</h2>
    </div>
    <div class="error">
      <span class="error__title">Искали, но не нашли?</span>
      <span class="error__subtitle">Страницы не существует</span>
      <div class="error__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-human.png" alt=""></div>
      <a href="<?php echo home_url();?>"><button class="error__btn">Вернуться на главную</button></a>
    </div>
  </div>
  <?php get_footer('page');?>