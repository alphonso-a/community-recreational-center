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
				<p>
					<a class="metabox__blog-home-link"href="<?php echo get_post_type_archive_link('event'); ?>">
						<i class="fa fa-home" aria-hidden="true">All Events</i>
					</a> 
					<p2> > </p2>
					<span class="metabox__main">
						<?php the_title(); ?> 
					</span>
				</p>

				<br/>
				<br/>

				<p>Posted on <?php the_time('n.j.y'); ?></p>
			</div>

			<div class="thumbnail-box">
				<?php the_post_thumbnail(); ?>
			</div>

			<div class="date-box">
				<?php
					$eventDate = new DateTime(get_field('event_date'));
					$eventTime = new DateTime(get_field('event_time'));
				
					echo "Date: <br/>";
					echo $eventDate->format('d - M - Y'), "<br/>";
				
					echo "Time: <br/>";
					echo $eventTime->format('H a');
				?>
			
				<br/>
				<br/>

				<hr style="height:2px; border-width:0; color:gray; background-color:gray">	
			</div>

			<div class="content-box">
				<?php the_content(); ?>
			</div>

			<?php get_template_part( 'template-parts/content/content', 'comment' ); ?>

			<?php 
				$relatedFacilities = get_field('related_facilities');// array of post objects
				if($relatedFacilities){
					echo '<hr class="section-break">';
					echo '<h2 class="headline headline--medium">Related Facilities</h2>';
					echo '<ul class="link-list min-list">';
					foreach($relatedFacilities as $facility){ //for each a post object
					?>
					<li><a href="<?php echo get_the_permalink($facility);?>">
							<?php echo get_the_title($facility);?>
						</a>
					</li>   
			<?php }
				}
				echo '</ul>';
			?>
		</div><!-- .singular-content-wrap -->
	</main><!-- .site-main -->
</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
