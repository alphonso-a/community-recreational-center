<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids_Camp
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		while(have_posts()){
		the_post();?>
		
        <div class="facility__content">
                <h5 class="facility__title headline headline--tiny">
                   <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				   <br/>
				   <br/>
				   <p>Posted by <?php the_author_posts_link();?> on <?php the_time('n.j.y'); ?></p>
                </h5>
                <p><?php echo wp_trim_words(get_the_content(),10); ?>  <br/>

				
				
				
                    <a href="<?php the_permalink();?>" class="nu gray">Learn more</a>
                </p>
              </div>

			  <hr style="height:2px;border-width:0;color:gray;background-color:gray">

		<?php }
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
