<?php
/**
 * Sleekly Theme Customizer
 *
 * @package Sleekly
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sleekly_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'sleekly_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'sleekly_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize->add_section(
		'sleekly_footer_section',
		array(
			'title'       => __( 'Footer', 'sleekly' ),
			'priority'    => 30,
			'description' => __( 'Footer section', 'sleekly' ),
		)
	);

	$wp_customize->add_setting(
		'sleekly_footer_text',
		array(
			'default'           => __( 'Footer text', 'sleekly' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'sleekly_footer_text',
		array(
			'label'    => __( 'Footer text', 'sleekly' ),
			'section'  => 'sleekly_footer_section',
			'type'     => 'text',
			'priority' => 1,
		)
	);

	$wp_customize->add_section(
		'sleekly_social_section',
		array(
			'title'       => __( 'Social', 'sleekly' ),
			'priority'    => 30,
			'description' => __( 'Social section', 'sleekly' ),
		)
	);

	$wp_customize->add_setting(
		'sleekly_facebook_url',
		array(
			'default'           => __( 'Facebook URL', 'sleekly' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'sleekly_facebook_url',
		array(
			'label'    => __( 'Facebook URL', 'sleekly' ),
			'section'  => 'sleekly_social_section',
			'type'     => 'text',
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'sleekly_twitter_url',
		array(
			'default'           => __( 'Twitter URL', 'sleekly' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'sleekly_twitter_url',
		array(
			'label'    => __( 'Twitter URL', 'sleekly' ),
			'section'  => 'sleekly_social_section',
			'type'     => 'text',
			'priority' => 2,
		)
	);

	$wp_customize->add_setting(
		'sleekly_instagram_url',
		array(
			'default'           => __( 'Instagram URL', 'sleekly' ),
			'sanitize_callback' => 'sanitize_text_field',
		)
	);

	$wp_customize->add_control(
		'sleekly_instagram_url',
		array(
			'label'    => __( 'Instagram URL', 'sleekly' ),
			'section'  => 'sleekly_social_section',
			'type'     => 'text',
			'priority' => 3,
		)
	);
}
add_action( 'customize_register', 'sleekly_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function sleekly_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function sleekly_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function sleekly_customize_preview_js() {
	wp_enqueue_script( 'sleekly-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'sleekly_customize_preview_js' );
