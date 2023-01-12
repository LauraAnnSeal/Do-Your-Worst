<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DOYOURWORST
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- bootstrap stylesheet -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap/bootstrap.css">

	<!-- fontawesome -->
	<script src="https://kit.fontawesome.com/d86f6a05aa.js" crossorigin="anonymous"></script>

	<!-- social meta -->
	<?php get_template_part('template-parts/social', 'meta') ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'doyourworst' ); ?></a>

	
	
<?php echo get_template_part('template-parts/content', 'header') ?>


<?php get_template_part('template-parts/content', 'loading'); ?>