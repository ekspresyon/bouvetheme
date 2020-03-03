<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 */

?><!DOCTYPE html>

<html class="no-js h-100" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('d-flex flex-column h-100'); ?>>

		<?php
		wp_body_open();
		?>

		<header id="site-header" class="header-footer-group" role="banner">

			<?php get_template_part( 'template-parts/header/site', 'navdev' ); ?>
			
		</header><!-- #site-header -->
		<div class="container-fluid">

