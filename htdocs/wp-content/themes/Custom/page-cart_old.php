<?php get_header(); ?>
<div class="container">
  <div class="path">
    <a href="<?php echo home_url(); ?>">Главная</a>
    <span>Корзина</span>
  </div>
  <div class="cart">
    <h2 class="cart__title">Корзина</h2>
    <div class="cart__overlay">
      <ul class="cart__header">
        <li class="cart__header-price">Цена</li>
        <li class="cart__header-count">Количество</li>
        <li class="cart__header-summary">Итого</li>
        <li class="cart__header-order">Сумма заказа</li>
      </ul>
      <div class="cart__content">
        <div class="cart__list js-cart">
          <div class="cart__item">
            <div class="cart__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-1.jpg" alt=""></div>
            <div class="cart__item-info">
              <span class="cart__item-name">ЗДРАВ «Вода-жизнь»</span>
              <span class="cart__item-price">1500 руб</span>
              <div class="cart__item-counter"><span>1</span></div>
              <span class="cart__item-summary">1500 руб</span>
            </div>
          </div>
          <div class="cart__item">
            <div class="cart__item-img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/item-1.jpg" alt=""></div>
            <div class="cart__item-info">
              <span class="cart__item-name">ЗДРАВ «Вода-жизнь»</span>
              <span class="cart__item-price">1500 руб</span>
              <div class="cart__item-counter"><span>1</span></div>
              <span class="cart__item-summary">1500 руб</span>
            </div>
          </div>
        </div>
        <div class="cart__summary">
          <div class="cart__summary-preorder"><strong>Подытог</strong><span>3000 руб</span></div>
          <div class="cart__summary-delivery"><strong>Доставка</strong><span>Варианты доставки будут обновлены при оформлении заказа</span></div>
          <div class="cart__summary-end js-total-price"><strong>Итого</strong><span>3000 руб</span></div>
          <a href="<?php the_permalink(292); ?>"><button class="error__btn">Оформить заказ</button></a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer('page'); ?>