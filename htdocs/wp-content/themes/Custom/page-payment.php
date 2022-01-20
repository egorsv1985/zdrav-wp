<?php get_header('page');?>
      <div class="container">
        <div class="path">
          <a href="#">Главная</a>
          <span>Оплата</span>
        </div>
        <div class="overlay-payment">
        <div class="order">
            <span class="order__title">Сумма заказа</span>
            <div class="order__preorder"><strong>Подытог</strong><span>3000 руб</span></div>
            <div class="order__delivery"><strong>Доставка</strong><span>1500 руб.</span></div>
            <div class="order__end"><strong>Итого</strong><span>4500 руб</span></div>
        </div>
        <div class="payment">
            <span class="payment__title">Оплата</span>
            <div class="payment__desk">
                <form action="" class="payment__form">
                    <label for="cardnumber" class="payment__label">Номер карты:</label>
                    <input type="number" name="cardnumber" required class="payment__input" placeholder="Состоит из 16 цифр">
                    <label for="cardyear" class="payment__label">До:</label>
                    <div class="payment__date">
                    <input type="number" name="cardyear" required class="payment__input" placeholder="YY">
                    <input type="number" name="cardmonth" required class="payment__input" placeholder="MM">
                    </div>
                    <label for="cardname" class="payment__label">Имя держателя:</label>
                    <input type="text" name="cardname" required class="payment__input" placeholder="IVAN IVANOV">
                    <button type="menu" class="payment__btn"><a href="<?php the_permalink(288);?>">Оплатить</a></button>
                </form>
            </div>
        </div>
      </div>
    </div>
    <?php get_footer('page');?>