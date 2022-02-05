<footer class="footer" id="footer">
  <div class="container">
    <div class="footer__logo"><?php echo get_custom_logo(); ?>
      <h3 class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</h3>
    </div>
    <div class="footer__menu">
      <a href="#how-it-work" class="menu-item">Серия ЗДРАВ </a>
      <a href="#author" class="menu-item">Об авторе</a>
      <a href="#feedback" class="menu-item">Отзывы</a>
    </div>
    <div class="footer__social">
      <h4>Контакты</h4>
      <div class="links">
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.svg" alt=""></a>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt=""></a>
      </div>
    </div>
    <div class="footer__documents">
      <a href="<?php the_permalink(308); ?>">Оферта</a>
      <a href="<?php the_permalink(88); ?>">Политика конфиденциальности</a>
    </div>
    <div class="footer__rights">© 2022 Все права защищены</div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>