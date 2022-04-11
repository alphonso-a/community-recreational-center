<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package Kids_Camp
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="singular-content-wrap">
				<?php
				$args = array (
					'post_type'      => array( 'post', 'facility', 'event', 'routine', 'game' ),
					'user_id'        => get_current_user_id(),
					'number'         => '10',
				);
				
				// The Comment Query
				$comments = new WP_Comment_Query;
				$comments = $comments->query( $args );
				
				// The Comment Loop
				if ( $comments ) {
				
					$output.= "<ul>\n";
				
					foreach ( $comments as $c ) {
						$output.= '<li>';
						$output.= '<a href="'.get_comment_link( $c->comment_ID ).'">';
						$output.= get_the_title($c->comment_post_ID);
						$output.= '</a>, Posted on: '. mysql2date('m/d/Y', $c->comment_date, $translate);
						$output.= '<ul style="list-style-type:none;">';
						$output.= '<li>'.get_comment_text($c->comment_ID).'</li>';
						$output.= '</ul>';
						$output.= "</li>\n";
					}
				
					$output.= '</ul>';
				
					echo $output;
				} else {
					echo 'No comments found.';
				}
				?>
			</div><!-- .singular-content-wrap -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->

	<?php get_sidebar(); ?>
<?php get_footer(); ?>
