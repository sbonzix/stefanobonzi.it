<?php
/**
 *
 * @package sbonzix2023
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<h1><?php bloginfo('name'); ?></h1>
		<!--<h2><?php bloginfo('description'); ?></h2>-->
	</header>
	<main>
		<nav>
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><?php bloginfo( 'name' ); ?></a>
			<ul class="nav navbar-nav navbar-right">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</nav>
  <main>
