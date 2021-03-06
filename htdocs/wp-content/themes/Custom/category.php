<?php get_header(); ?>



<section id="interesting">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>


		<div class="row">
			<ul>
			<?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'cat' => $cat
            // 'orderby'        => 'rand'
        );
        $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( $args );
        while ( $query->have_posts() ) {
        $query->the_post();

        ?>


          <li class="col-lg-4">
              <a href="<?php the_permalink(); ?>">
                <span class="img-block" style="background-image: url(<?php the_post_thumbnail_url( 'full' ); ?>);"></span>
	              <img src="<?php the_post_thumbnail_url( 'full' ); ?>" alt=""> 
	            	<?php the_title(); ?>


            	</a>
          </li>



        <?php
        }
        ?>

        <?php
        wp_reset_postdata(); 
            
      ?>
      </ul>
		</div>
	</div>
</section>




<?php get_footer(); ?>