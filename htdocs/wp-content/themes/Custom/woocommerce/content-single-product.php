<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;


?>

<div class="page-header-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="page-header-content">
          <div class="woo-breads">
            <!-- <?php woocommerce_breadcrumb() ?> -->
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Header Wrapper -->

<?php
  $product_image_id = $product->get_image_id();
  $product_gallery_ids = $product->get_gallery_image_ids();
  $image_url = wp_get_attachment_image_url($product_image_id, 'full');
?>



<!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page" <?php wc_product_class('add_custom_class', $product); ?>>
  <div class="container">
    <div class="row">
      <div class="col">
        <?php do_action('woocommerce_before_single_product'); ?>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="row">
      <div class="product__wrap">
        <div class="product-thumb-carousel vertical-tab">
            

          <div>
            <?php echo $product->get_image() ?>
          </div>

          <?php if ($product_gallery_ids) : ?>
            <?php foreach ($product_gallery_ids as $product_gallery_id) : ?>

              <div>
                <?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>

        </div>


        <div class="slider-bottom">
          <div>
            <?php echo $product->get_image() ?>
          </div>

          <?php if ($product_gallery_ids) : ?>
            <?php foreach ($product_gallery_ids as $product_gallery_id) : ?>

              <div>
                <?php echo wp_get_attachment_image($product_gallery_id, 'woocommerce_single') ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        
      </div>

      <div class="product__wrapper">
        <h2 class="product__title"><?php the_title(); ?></h2>


        <div class="price">
          <?php echo $product->get_price_html() ?>
        </div>

        <div class="line-buy">
          <?php woocommerce_template_single_add_to_cart() ?>
        </div>

        <p class="product__description">
          <?php echo $product->get_short_description() ?>  
        </p>

        <div class="bottom_header">
          <?php the_field('zagolovok_pod_kratkim_opisaniem') ?>
        </div>

        

      </div>
    </div>


  </div>
</div>





<section class="about about__page-foods">
  <div class="container">
    <h2 class="about__title"><?php the_field('zagolovok_glavnogo_opisaniya') ?></h2>
    <div class="about__wrap">
      <div class="about__upper-text">

        <?php the_field('blok_-_opisanie_tovara') ?>

        <!-- <p class="about__text">Этот простой с виду кружочек диаметром 5.5 см, находится рядом с ёмкостями воды/крепкого алкоголя (радиус 50-100 см) и изменяет её структуру, а именно качественно изменяет молекулярные связи между молекулами воды. Эффективнее, когда рядом или в ёмкосте с водой находится кристалл кварца.</p>
        <p class="about__text">
          Даже не очень качественная вода, пройдя 30-минутную обработку (на крепкий алкоголь через 3-5 минут) устройством «Вода-жизнь», уже не нанесёт тот вред, который могла бы доставить нашему организму.</p> -->
        <div class="about__lower">
          <p class="about__lower-text"><?php the_field('tekst_sleva') ?></p>
        </div> 
      </div>
      <div class="about__wrapper">
        <div class="about__image">
          <?php $izobrazhenie_sprava = get_field('izobrazhenie_sprava'); ?>
          <img src="<?php echo $izobrazhenie_sprava['url'] ?>" alt="<?php $izobrazhenie_sprava['alt'] ?>" title="<?php echo $izobrazhenie_sprava['title'] ?>">

          <!-- 
          <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/item/about-image.webp" type="image/webp" alt="upper-image">
            <img src="<?php echo get_template_directory_uri(); ?>//assets/img/item/about-image.png" alt="upper-image" />
          </picture> -->
        </div>
      </div>

    </div>
  </div>
  

</section>

<section class="effect">
  <h2 class="effect__title">Какое воздействие оказывает</h2>
  <div class="effect__info">
    <div class="effect__image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/hands.png" alt="">
    </div>
    <div class="effect__list">
      <div class="effect__item">
        <h3 class="effect__text"><?php the_field('underline-text-1'); ?></h3>
        <div class="effect__line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
        </div>
      </div>
      <div class="effect__item">
        <h3 class="effect__text"><?php the_field('underline-text-2'); ?></h3>
        <div class="effect__line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
        </div>
      </div>
      <div class="effect__item">
        <h3 class="effect__text"><?php the_field('underline-text-3'); ?></h3>
        <div class="effect__line">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/item/effect-line.svg" alt="">
        </div>
      </div>
      <p class="effect__afterlist"><?php the_field('strong-underline-text'); ?></p>
      <button class="effect__btn">Получить онлайн консультацию</button>
    </div>
  </div>
</section>







<!--== Start Related Products Area ==-->
<section id="related-products-wrapper" class="pb-48 pb-md-18 pb-sm-8">
  <div class="container">
    <div class="row">
        <!-- Start Section title -->
        <div class="col">
          <div class="section-title-wrap">
            <h2>С этим товаром покупают</h2>
          </div>
        </div>
        <!-- End Section title -->
      </div>


    <div class="products-on-column">
      <?php
      $related_products = array(); // array( 5, 10, 35 )

      $upsells = $product->get_upsell_ids();

      if ($upsells) {
        $related_products = $upsells;
      } else {
        $related_products = wc_get_related_products($product->get_id(), 16);
      }

      ?>
      <?php foreach ($related_products as $related_product) : ?>

        <?php
        $post_object = get_post($related_product);

        setup_postdata($GLOBALS['post'] = &$post_object); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

        wc_get_template_part('content', 'product-goods');
        ?>

      <?php endforeach; ?>
      
    </div>
  </div>
</section>
<!--== End Related Products Area ==-->








<?php get_footer(); ?>