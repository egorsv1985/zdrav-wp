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

defined( 'ABSPATH' ) || exit;

global $product;


?>

<div class="page-header-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="page-header-content">
          <div class="woo-breads">
						<?php woocommerce_breadcrumb() ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Page Header Wrapper -->



<!--== Start Single Product Page Wrapper ==-->
<div id="single-product-page" <?php wc_product_class( 'pt-90 pt-md-60 pt-sm-50 pb-92 pb-md-58 pb-sm-50', $product ); ?>>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php do_action( 'woocommerce_before_single_product' ); ?>
			</div>
		</div>
	</div>



  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <?php
          $product_image_id = $product->get_image_id();
          $product_gallery_ids = $product->get_gallery_image_ids();
          $image_url = wp_get_attachment_image_url( $product_image_id, 'full' );
        ?>



        <div class="product-thumb-carousel vertical-tab">
           
            <div>
              <?php echo $product->get_image() ?>
            </div>

            <?php if( $product_gallery_ids ) : ?>
              <?php foreach( $product_gallery_ids as $product_gallery_id ) : ?>

                <div>
                  <?php echo wp_get_attachment_image( $product_gallery_id, 'woocommerce_single' ) ?>
                </div>
              <?php endforeach; ?>
            <?php endif; ?>

        </div>


        <div class="slider-bottom">
          <div>
            <?php echo $product->get_image() ?>
          </div>

          <?php if( $product_gallery_ids ) : ?>
            <?php foreach( $product_gallery_ids as $product_gallery_id ) : ?>

              <div>
                <?php echo wp_get_attachment_image( $product_gallery_id, 'woocommerce_single' ) ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="hero__title"><?php the_title();?></div>


        <div class="price">
          <?php echo $product->get_price_html() ?>
        </div>

        <div class="line-buy">
          <?php woocommerce_template_single_add_to_cart() ?>
        </div>

        <p class="item-description"><?php echo $product->get_short_description() ?></p>


        <h2><?php the_field('zagolovok_pod_kratkim_opisaniem') ?></h2>

      </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
        <p class="item-description"><?php echo $product->get_description() ?></p>
        
      </div>
    </div>
  </div>
</div>



<!--== Start Related Products Area ==-->
<section id="related-products-wrapper" class="pb-48 pb-md-18 pb-sm-8">
    <div class="container">
        <div class="row">
            <!-- Start Section title -->
            <div class="col">
                <div class="section-title-wrap">
                    <h2>Вам может быть интересно</h2>
                </div>
            </div>
            <!-- End Section title -->
        </div>

        <div class="row row1 products-on-column">
            <?php
            $related_products = array(); // array( 5, 10, 35 )

            $upsells = $product->get_upsell_ids();

            if( $upsells ) {
              $related_products = $upsells;
            } else {
              $related_products = wc_get_related_products( $product->get_id(), 16 );
            }

            ?>
            <?php foreach ( $related_products as $related_product ) : ?>

                <?php
                $post_object = get_post( $related_product );

                setup_postdata( $GLOBALS['post'] =& $post_object ); // phpcs:ignore WordPress.WP.GlobalVariablesOverride.Prohibited, Squiz.PHP.DisallowMultipleAssignments.Found

                wc_get_template_part( 'content', 'product-goods' );
                ?>

            <?php endforeach; ?>

        </div>
    </div>
</section>
<!--== End Related Products Area ==-->








<?php get_footer(); ?>

