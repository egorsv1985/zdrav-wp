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



<?php if(is_shop()){ ?>
  <section class="news-line sale">
  </section>

  <section id="sales-block-shop">
    <div class="container">
      <div class="row">
        <?php
           $field = get_field('zapis');
           $args = array( 
            'posts_per_page' => 2,
            'post__in'  =>  $field
            // 'offset' => 1, 
            // 'facetwp' => true,  
            // 'cat' => 1,  
            // 'cat' => 1,  
          );
          $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
          $query = new WP_Query( $args );
          while ( $query->have_posts() ) {
          $query->the_post();

          ?>


                   


          <div class="col-lg-6">
            <div class="block">
              <a href="<?php the_permalink(); ?>" class="img-block img2" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);"></a>
              <div class="inner">
                <div class="title-block img2"><?php the_title(); ?></div>
                <div class="title-text img2"><?php the_excerpt(); ?></div>
              </div>
              
            </div>
            
          </div>



          <?php
          }
          ?>
         
          <?php
          wp_reset_postdata(); 
              
        ?>
      
      </div>
    </div>
  </section>

  <section id="brands-slider">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="title">Бренды</div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <?php echo do_shortcode('[brands_page]') ?>
        </div>
      </div>
    </div>
  </section>

<?php  } ?>





<!--== Start Shop Page Wrapper ==-->
<div id="shop-page-wrapper" class="">
    <div class="container">
        <div class="row">


        	<div class="col-lg-2 filter-column">
				    

				    <button class="reset-btn" onclick="FWP.reset()">Сбросить фильтры</button>


				   <!--  <a href="#" class="banner-left-block hidden-xs" style="background-image: url(https://cdn.aizel.ru/i/1326040.jpg);"></a>
				     -->


        	</div>
        	



            <!-- Start Shop Page Product Area -->
            <div class="col-lg-10 facetwp-template">


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
							</div>



            </div>
            <!-- End Shop Page Product Area -->
        </div>
    </div>
</div>
<!--== End Shop Page Wrapper ==-->
<?php get_footer() ?>
