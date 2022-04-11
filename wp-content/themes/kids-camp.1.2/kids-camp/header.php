<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Kids_Camp
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<style>
	.btn{
		margin-top: 10px;
		margin-left: 10px;
		background-color: #4CAF50; /* Green */
		border: none;
		color: white;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px;
		border-radius: 25px;
	}
	.btn:hover{
		background-color: black;
	}
</style>

<body <?php body_class(); ?>>

<?php do_action( 'wp_body_open' ); ?>

<?php
/**
 * Moving default Store Notice from bottom to this position.
 * For removal script, check inc/customizer/woocomerce.php function kids_camp_remove_default_woo_store_notice.
 */
if ( function_exists( 'woocommerce_demo_store' ) ) {
	woocommerce_demo_store();
}
?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids-camp' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		<?php get_template_part( 'template-parts/header/site', 'top-bar' ); ?>
		<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

		<?php get_template_part( 'template-parts/navigation/navigation', 'primary' ); ?>
	</header><!-- .site-header -->

	<?php kids_camp_sections(); ?>
	
	<div id="content" class="site-content">
		<div class="wrapper">
