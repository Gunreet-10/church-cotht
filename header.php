<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cotht_parent
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site-header">
			<div class="header-inner">
				<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
						<?php
						if (has_custom_logo()) {
							the_custom_logo();
						} else {
							echo '<h1 class="site-title">' . get_bloginfo('name') . '</h1>';
						}
						?>
					</a>
					<p class="site-description"><?php bloginfo('description'); ?></p>
				</div>

				<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">☰</button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
						)
					);
					?>
				</nav>
			</div>
		</header>

		<div id="content" class="site-content">