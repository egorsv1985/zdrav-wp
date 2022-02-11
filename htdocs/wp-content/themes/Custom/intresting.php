<?php
/*
Template Name: Интересное
*/
?>

<?php get_header(); ?>


<section id="interesting">
  <div class="container">
    <div class="path">
      <?php
      if (function_exists('yoast_breadcrumb')) {
        yoast_breadcrumb('<p id="breadcrumbs">', '</p>');
      }
      ?>
    </div>
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
          // 'cat' => 20
          // 'orderby'        => 'rand'
        );
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $query = new WP_Query($args);
        while ($query->have_posts()) {
          $query->the_post();

        ?>


          <li class="col-lg-4">
            <a href="<?php the_permalink(); ?>">
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