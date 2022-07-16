<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * Template Name: template test
 * 
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			$args = [ 'post_type' => 'post'];
			$query = new WP_Query( $args );
				while ( $query->have_posts() ) {
					$query->the_post();
					echo "<br>";					
					echo get_the_title();
					echo "<br>";
					echo get_the_ID();
					//echo get_the_name();
		
					}		
			wp_reset_postdata();			
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->


<?php
get_footer();
