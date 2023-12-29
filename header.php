<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sleekly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="px-4 md:px-[100px] lg:px-[250px] ">
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php // esc_html_e( 'Skip to content', 'sleekly' ); ?><!--</a>-->

	<header id="masthead" class="py-8  mb-6 flex flex-col  md:flex-col justify-between items-center">
		<div class="flex w-full justify-between

">
		<div class="site-branding flex items-center md:mx-auto">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

			if ( has_custom_logo() ) {
				echo '<img height="50" width="50" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			}

			?>
				<h1 class="text-2xl md:text-3xl  ml-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php

				$sleekly_description = get_bloginfo( 'description', 'display' );
				if ( $sleekly_description || is_customize_preview() ) :
					?>
				<p class="site-description"><?php echo $sleekly_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
				<?php endif; ?>
		</div><!-- .site-branding -->

		<button id="menu-btn" class="sm:hidden " aria-controls="primary-menu" aria-expanded="false">
			<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
				<path d="M 5 8 A 2.0002 2.0002 0 1 0 5 12 L 45 12 A 2.0002 2.0002 0 1 0 45 8 L 5 8 z M 5 23 A 2.0002 2.0002 0 1 0 5 27 L 45 27 A 2.0002 2.0002 0 1 0 45 23 L 5 23 z M 5 38 A 2.0002 2.0002 0 1 0 5 42 L 45 42 A 2.0002 2.0002 0 1 0 45 38 L 5 38 z"></path>
			</svg>
		</button>
		</div>

		<nav id="site-navigation" class="main-navigation hidden mt-6 sm:block">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'menu_class'     => 'flex space-x-4 ',
					'link_before'    => '<span class="text-md md:text-xl text-gray-700 hover:text-gray-900 ">',
					'link_after'     => '</span>',

				)
			);
			?>
		</nav>
	</header><!-- #masthead -->
