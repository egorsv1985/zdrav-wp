<?php get_header('page');?>
  <div class="container">
    <div class="path">
      <a href="<?php echo home_url();?>">Главная</a>
      <span><?php the_title();?></span>
    </div>
    <div class="hero">
      <div class="hero__title"><?php the_title();?></div>
      <div class="hero__pics">
        <div class="hero__image"><img src="<?php the_field('item-image');?>" alt=""></div>
        <div class="hero__thumbs">
          <img src="<?php the_field('item-thumb-1');?>" alt="">
          <img src="<?php the_field('item-thumb-2');?>" alt="">
          <img src="<?php the_field('item-thumb-3');?>" alt="">
          <img src="<?php the_field('item-thumb-4');?>" alt="">
        </div>
      </div>
      <div class="hero__info">
        <div class="hero__counter"><span>1</span></div>
        <div class="hero__price"><?php the_field('item-price');?> руб.</div>
        <button class="hero__btn">Купить сейчас</button>
        <div class="hero__text">
          <span class="hero__article-1"><?php the_field('upper-text-1');?></span>
          <span class="hero__article-2"><?php the_field('upper-text-2');?></span>
          <span class="hero__article-3"><?php the_field('strong-upper-text');?></span>
        </div>
      </div>
    </div>
    <div class="about">
      <span class="about__title">Что представляет собой устройство «Вода-жизнь»</span>
      <div class="about__info">
        <div class="about__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/about-image.png" alt=""></div>
        <div class="about__text">
          <span class="about__article-1"><?php the_field('lower-text-1');?> </span>
          <span class="about__article-2"><?php the_field('lower-text-2');?></span>
        </div>
        <div class="about__image-lower">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lower-image.png" alt="lower-image">
          <span class="about__lower-text">Это новая технология, <br> у которой нет аналогов.</span>
        </div>
      </div>
    </div>
    <div class="effect">
      <span class="effect__title">Какое воздействие оказывает</span>
      <div class="effect__info">
        <div class="effect__image"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/hands.png" alt=""></div>
        <div class="effect__list">
          <div class="effect__item">
            <span class="effect__text"><?php the_field('underline-text-1');?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
          </div>
          <div class="effect__item">
            <span class="effect__text"><?php the_field('underline-text-2');?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
          </div>
          <div class="effect__item">
            <span class="effect__text"><?php the_field('underline-text-3');?></span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
          </div>
          <span class="effect__afterlist"><?php the_field('strong-underline-text');?></span>
          <button class="effect__btn">Получить онлайн консультацию</button>
        </div>
      </div>
    </div>
    <div class="offer">
      <span class="offer__title">С этим товаром покупают</span>
      <div class="slider-overlay">
      <div class="offer__list">

      <?php
            $my_posts = get_posts( array(
                'numberposts' => 0,
                'order' => 'ASC',
                'category_name'    => 'items',
                'post_type'   => 'post',
                'exclude'     => array(33),
                'suppress_filters' => true,
            ) );
            
            foreach( $my_posts as $post ){setup_postdata( $post );
                ?>
                <div class="offer__item">
          <img src="<?php the_field('item-image');?>" alt="" class="offer__image">
          <span class="offer__name"><?php the_title();?></span>
          <span class="offer__price"><?php the_field('item-price');?> руб.</span>
          <div class="offer__btn-group">
            <a href="<?php the_field('link');?>"><span class="offer__more">Подробнее</span></a>
            <button class="offer__btn">В корзину</button>
          </div>
        </div>
                <?php
            }
            
            wp_reset_postdata();
            ?>
      </div>
      <div class="offer__arrows">
        <div class="left-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 4.svg" alt="Arrow"></div>
        <div class="right-arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/Arrow 3.svg" alt="Arrow"></div>
      </div>
      </div>
    </div>
  </div>
<?php get_footer('page');?>