<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Kids_Camp
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="singular-content-wrap">
			
			
		<div class="link-box">

		<p><a class="metabox__blog-home-link"
		href="<?php echo get_post_type_archive_link('routine'); ?>">
		<i class="fa fa-home" aria-hidden="true"></i>All Routines</a> <p2>/</p2>
		<span class="metabox__main"><?php the_title(); ?> </span></p>
		<br/>
		<br/>
		<p>Posted on <?php the_time('n.j.y'); ?></p>

		</div>

		<div class="thumbnail-box">
		<?php the_post_thumbnail(); ?>


		</div>

		<br/>
		<br/>

		<hr style="height:2px;border-width:0;color:gray;background-color:gray">	

		<div class="content-box">
		<?php the_content(); ?>
		</div>

			
		</div><!-- .singular-content-wrap -->
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
