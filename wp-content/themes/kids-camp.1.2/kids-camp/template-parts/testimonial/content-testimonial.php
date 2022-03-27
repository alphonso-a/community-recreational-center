<?php
/**
 * The template used for displaying testimonial on front page
 *
 * @package Kids_Camp
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="hentry-inner">

		<?php $position = get_post_meta( get_the_id(), 'ect_testimonial_position', true ); ?>

		<?php if ( $position ) : ?>
			<div class="hentry-inner-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<div class="testimonial-thumbnail post-thumbnail">
						<?php the_post_thumbnail( 'kids-camp-testimonial' ); ?>
					</div>
				<?php endif; ?>

				<header class="entry-header">
					<?php 
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); 
					?>
					
					<?php if ( $position ) : ?>
						<p class="entry-meta"><span class="position">
							<?php echo esc_html( $position ); ?></span>
						</p>
					<?php endif; ?>
				</header>
			</div><!-- .hentry-inner-header -->
		<?php endif;?>
		
		<div class="entry-container">			
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</div><!-- .entry-container -->

	</div><!-- .hentry-inner -->
</article>
