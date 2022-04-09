<?php
/**
 * The template used for displaying page content
 *
 * @package Kids_Camp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php

	if(is_page() && $post->post_parent){
		$ancestors = array_reverse(get_post_ancestors($post));

		foreach($ancestors as $value){
			?>
			<span>
				<a href="<?php echo(get_the_permalink($value))?>"> <?php echo(get_the_title($value)) ?></a>
			</span>
			<p2> > </p2>
			<?php
		}
		?>
			<span>
				<?php the_title(); ?> 
			</span>
		<?php
	}

	$header_image = kids_camp_featured_overall_image();

	if ( 'disable' === $header_image ) :
		?>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<?php if ( 'post' === get_post_type() ) :
				kids_camp_entry_header();
			endif; ?>
		</header><!-- .entry-header -->
	<?php 
	endif;
	
	$single_layout = get_theme_mod( 'kids_camp_single_layout', 'disabled' );

	if ( 'disabled' !== $single_layout ) {
		kids_camp_post_thumbnail( $single_layout );
	}
	?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages( array(
			'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'kids-camp' ) . '</span>',
			'after'       => '</div>',
			'link_before' => '<span>',
			'link_after'  => '</span>',
			'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'kids-camp' ) . ' </span>%',
			'separator'   => '<span class="screen-reader-text">, </span>',
		) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
