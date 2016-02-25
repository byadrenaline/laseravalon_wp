<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/min/html5.min.js"></script>
	<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header>
		<?php byadr_theme_logo(); ?>

		<nav class="nav-menu nav-menu__main">
			<?php wp_nav_menu( array(
				'theme_location' => 'main-menu',
				'container' => false
			)); ?>
		</nav>
		<?php byadr_phone(); ?>
	</header>
	

	<nav class="nav-menu nav-menu__mobile">
		<?php wp_nav_menu( array(
				'theme_location' => 'mobile-menu',
				'container_class'=> 'menu-container',
			)); ?>
	</nav>