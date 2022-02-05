<?php
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');
function enqueue_parent_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . 'storefront/style.css');
}

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price'); // удалили цену

add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 4); // поставили цену в начало перед названием продукта с приоритетом 4.

/* добавим новый шрифт */

function storefront_child_scripts()
{

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Lora:wght@400;700&display=swap');
}

add_action('wp_enqueue_scripts', 'storefront_child_scripts');

function carolinaspa_content()
{

	echo "<div class='main-content'>";

	the_post_thumbnail();  //выведем миниатюру

	echo "</div>";
}

function storefront_child_coupon()
{

	remove_action('page', 'storefront_page_content', 20); //удалили action

	add_action('page', 'storefront_child_content', 4); //добавили свой с приоритетом 4

	add_action('init', 'storefront_child_coupon');
}
/* баннер с сообщением */

function storefront_child_banner()
{ ?>

	<div class="banner-spoij">

		<div class="banner-text">

			<h3><?php the_field("text_banner"); ?></h3> <!--  выводим текстовое поле -->

		</div>

		<div class="banner-image">

			<img src="<?php the_field("image_banner");  ?>" alt="banner"> <!-- выводим ссылку на изображение -->

		</div>

	</div>




<?php

}

add_action('homepage', 'storefront_child_banner', 80);

/* добавить иконки и текст */

function storefront_child_icons()
{ ?>

	<div class="banner-icons">

		<div class="icons-show">

			<?php the_field("banner_icon"); ?>

			<p><?php the_field("banner_icon_text"); ?></p>

		</div>

		<div class="icons-show">

			<?php the_field("banner_icon_2"); ?>

			<p><?php the_field("banner_icon_text_2"); ?></p>

		</div>

		<div class="icons-show">

			<?php the_field("banner_icon_3"); ?>

			<p><?php the_field("banner_icon_text_3"); ?></p>

		</div>

	</div>

<?php

}

add_action('homepage', 'storefront_child_icons', 15);

/* Вывод записей на главной */

function storefront_child_blog()
{

	$args = array(

		'post_type' => 'post',

		'posts_per_page' => 3,

		'orderby' => 'date',

		'order' => 'DESC'

	);

	$entries = new WP_Query($args);  // создание пользовательского цикла

?>

	<div class="homepage-blog-entries">

		<h2 class="section_title">Последние записи</h2>

		<ul class="blog-list">

			<?php while ($entries->have_posts()) : $entries->the_post(); ?>
				<!-- вывод цикла -->

				<li>

					<?php the_post_thumbnail('blog_entry') ?>
					<!-- вывод миниатюры -->

					<h2><?php the_title(); ?></h2> <!-- вывод заголовка -->

					<p>By <?php the_author() ?>|<?php the_time(get_option('date_format')); ?></p>

					<?php

					$content = wp_trim_words(get_the_content(), 20, '.');

					echo "<p>" . $content . "</p>"; ?>
					<!-- выводим 20 слов в отрывке -->

					<a href="<?php the_permalink(); ?>">Read more &raquo;</a>

				</li>

			<?php endwhile; ?>

		</ul>

	</div>

<?php

	wp_reset_postdata();  // обязательно при использовании пользовательского цикла

}

add_action('homepage', 'storefront_child_blog', 90);
