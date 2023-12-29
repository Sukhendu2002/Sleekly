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
<div id="page" class="px-4 md:px-[100px] lg:px-[250px]">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'sleekly' ); ?></a>

	<header id="masthead" class="py-8  mb-6 flex justify-between items-center">
		<div class="site-branding flex items-center">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo           = wp_get_attachment_image_src( $custom_logo_id, 'full' );

			if ( has_custom_logo() ) {
				echo '<img height="50" width="50" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
			}
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="text-2xl ml-2"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$sleekly_description = get_bloginfo( 'description', 'display' );
			if ( $sleekly_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $sleekly_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation flex items-center">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
				<img src="assets/images/hamburger.png" alt="">
			</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'      => false,
					'menu_class'     => 'flex space-x-4',
					'link_before'    => '<span class="text-lg text-gray-600 hover:text-gray-900">',
					'link_after'     => '</span>',

				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
