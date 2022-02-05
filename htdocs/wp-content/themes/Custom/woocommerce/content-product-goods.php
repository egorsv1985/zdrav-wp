<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

defined( 'ABSPATH' ) || exit;

global $product;


// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}

$product_published = $product->get_date_created(); // $product_published->date
?>
<!-- Start Single Product -->

<div class="how-it-work__item">
  <div class="item__box-img">
  	<?php echo $product->get_image() ?>
  </div>            
  <div class="item-info">
    <h3 class="item-title"><?php echo $product->get_title() ?></h3>
    <span class="item-price"><?php echo $product->get_price_html() ?></span>
    <div class="item-btn-group">
      <a href="<?php echo $product->get_permalink() ?>" class="buy">Купить сейчас</a>
      <a class="hero__btn-link" href="<?php echo $product->get_permalink() ?>">
        <span class="hero__more">Подробнее</span>
        <div class="hero__more-arrow"></div>
      </a>
    </div>
  </div>
</div>











<!-- End Single Product -->
