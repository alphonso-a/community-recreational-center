<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids_Camp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="archive-posts-wrapper">
				<?php
		        $kids_camp_title     = get_theme_mod( 'kids_camp_recent_posts_heading', esc_html__( 'From Our Blogs', 'kids-camp' ) );
				if ( $kids_camp_title ) : ?>
				<div class="section-heading-wrapper">
						<div class="section-title-wrapper">
							<h2 class="section-title"><?php echo esc_html( $kids_camp_title ); ?></h2>
						</div><!-- .section-title-wrapper -->
				</div><!-- .section-heading-wrapper -->
				<?php endif; ?>

				<div class="section-content-wrapper <?php echo esc_attr( kids_camp_get_posts_columns() ); ?>">
						<?php if ( have_posts() ) : ?>

						<?php if ( is_home() && ! is_front_page() ) : ?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
						<?php endif; ?>

						<div class="grid">
							<?php
							// Start the loop.
							$i = 0;
							while ( have_posts() && $i < 3 ) : the_post();
								$i++;
								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'template-parts/content/content', get_post_format() );

							// End the loop.
							endwhile;
							?>
						</div><!-- .grid -->

						<?php kids_camp_content_nav();	?>
				</div><!-- .section-content-wrapper -->

				<?php
				else :
					get_template_part( 'template-parts/content/content', 'none' );

				endif;
				?>
			</div><!-- .archive-posts-wrapper -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
