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
 * Template Name: page news
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
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/page/content', 'page-news' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile;		
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<div>
	<?php	
	$args = [ 'post_type' => 'post'];
	$query = new WP_Query( $args );
		while ( $query->have_posts() ) {
			$query->the_post();
			echo get_the_title();
			echo get_the_ID();
			//echo get_the_name();

			}

	wp_reset_postdata();	
	
		
	/*echo '<pre>';
	print_r($query);
	echo '</pre>';*/
		

	?>
</div>
	

<?php
get_footer();
