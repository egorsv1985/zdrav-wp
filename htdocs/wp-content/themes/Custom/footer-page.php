<div class="container" id="footer">
      <footer class="footer">
        <div class="footer__logo"><?php echo get_custom_logo(); ?>
          <h3 class="logo-text">СИМВОЛО-АДАПТЕРЫ: серия ЗДРАВ</h3>
        </div>
        <div class="footer__menu">
          <a href="<?php echo home_url();?>" class="menu-item">Серия ЗДРАВ </a>
          <a href="<?php echo home_url();?>" class="menu-item">Об авторе</a>
          <a href="<?php echo home_url();?>" class="menu-item">Отзывы</a>
        </div>
        <div class="footer__social">
          <h4>Контакты</h4>
          <ul class="links">
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/telegram.svg" alt=""></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/whatsapp.svg" alt=""></a></li>   
          </ul>
        </div>
        <div class="footer__documents">
          <a href="<?php the_permalink(308);?>">Оферта</a>
          <a href="<?php the_permalink(88);?>">Политика конфиденциальности</a>
        </div>
        <div class="footer__rights">© 2022 Все права защищены</div>
      </footer>
    </div>
  </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>