<?php get_header();?>
  <div class="container">
    <div class="path">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>
    <div class="error-block">
      <div class="error__title">Искали, но не нашли?</div>
      <div class="error__subtitle">Страницы не существует</div>
      <div class="error__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/err-human.png" alt=""></div>

      <div class="link-block">
        <a href="<?php echo home_url();?>" class="error__btn">Вернуться на главную</a>
      </div>
      
    </div>
  </div>
  <?php get_footer();?>