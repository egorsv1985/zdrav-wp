<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;


get_header();
?>

<?php $term = get_queried_object(); ?>




<?php
if ( is_search() ) { ?>

<h1>страница поиска</h1>

<?php }
?>



<!--== Start Shop Page Wrapper ==-->
<div id="shop-page-wrapper" class="">
    <div class="container">
        <div class="row">


        	<div class="col-lg-2 filter-column">
				    

				   <?php dynamic_sidebar( 'shop_left_sideber' ); ?>



        	</div>
        	



            <!-- Start Shop Page Product Area -->
            <div class="col-lg-10">

              <h1><?php the_title(); ?></h1>


							<?php if ( woocommerce_product_loop() ) { ?>
                

                <?php

								woocommerce_product_loop_start();

								if ( wc_get_loop_prop( 'total' ) ) {
									while ( have_posts() ) {
										the_post();

										wc_get_template_part( 'content', 'product' );
									}
								}

								woocommerce_product_loop_end();

							} else {

								wc_no_products_found();

							}

							?>

              <div class="page-pagination-wrapper">
              	<?php do_action( 'woocommerce_after_shop_loop' ); ?>

                <?php echo paginate_links( $args ) ?>
							</div>



            </div>
            <!-- End Shop Page Product Area -->
        </div>
    </div>
</div>
<!--== End Shop Page Wrapper ==-->
<?php get_footer() ?>
