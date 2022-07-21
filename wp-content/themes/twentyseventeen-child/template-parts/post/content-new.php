<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.2
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	
	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;
	?>
	<header class="entry-header">
		<?php
		if ( 'post' === get_post_type() ) {
			echo '<div class="entry-meta">';
			if ( is_single() ) {
				twentyseventeen_posted_on();
			} else {
				echo twentyseventeen_time_link();
				twentyseventeen_edit_link();
			}
			echo '</div><!-- .entry-meta -->';
		}

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		?>
	</header><!-- .entry-header -->

	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>
			</a>
		</div><!-- .post-thumbnail -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. Only visible to screen readers. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
				get_the_title()
			)
		);
		
		if( $author_id = get_post_meta( get_the_ID(), 'new_post_editor', true ) ) { 
			?>
			editor: <?php echo get_the_author_meta('display_name', $author_id);
		}
				
		?>

		<!-- working here -->

		<div class>
		<h1>SPECS</h1>
		<table>
			<caption> <u><b>Relevant Data</b> </caption>
			<tr>
				<th>Description</th>
				<th>type</th>				
			</tr>
			<tr>
				<td>Rolled size</td>
				<td><?php echo (get_post_meta($post->ID, "rolled_size", true))? get_post_meta($post->ID, "rolled_size", true) : "---"; ?></td>				
			</tr>
			<tr>
				<td>Doors</td>
				<td><?php echo (get_post_meta($post->ID, "doors", true))? get_post_meta($post->ID, "doors", true) : "---"; ?></td>
			</tr>
			<tr>
				<td>Horsepower</td>
				<td><?php echo (get_post_meta($post->ID, "horsepower", true))? get_post_meta($post->ID, "horsepower", true) : "---"; ?></td>
			</tr>
			<tr>
				<td>Transmission</td>
				<td><?php echo (get_post_meta($post->ID, "transmission", true))? get_post_meta($post->ID, "transmission", true) : "---"; ?></td>
			</tr>
			
		</table>

		<input type="checkbox" disabled value="yes" <?php if ( get_post_meta($post->ID, "checkbox_check" ) ) checked(  get_post_meta($post->ID, "checkbox_check" )[0], 'yes' ); ?> />
        <?php echo __( 'supercar', 'checkbox-meta' )?>

		</div>
		




		<?php

		wp_link_pages(
			array(
				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),
				'after'       => '</div>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php
	if ( is_single() ) {
		twentyseventeen_entry_footer();
	}
	?>

</article><!-- #post-<?php the_ID(); ?> -->
