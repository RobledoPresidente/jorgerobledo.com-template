<?php
/**
 * robledo-presidente Theme Customizer
 *
 * @package robledo-presidente
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function robledo_presidente_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	$wp_customize->add_section( 'rp_custom_hashtag_section', array(
		'title' => __( 'Hashtag' ),
		'description' => __( 'Agregue hashtag aquí' ),
		'active_callback' => 'is_front_page',
		'priority' => 9,
	) );
	$wp_customize->add_setting( 'rp_custom_hashtag', array(
		'type' => 'theme_mod',
		'default' => '#RobledoPresidente2018',
	) );
	$wp_customize->add_control( 'rp_custom_hasthag', array(
		'type' => 'text',
		'section' => 'rp_custom_hashtag_section',
		'label' => __( 'rp_custom_hashtag_section' ),
		'description' => __( 'Hashtag con el tema destacado de actualidad.' ),
		'input_attrs' => array(
			'placeholder' => __( '#RobledoPresidente2018' ),
		),
	) );
}
add_action( 'customize_register', 'robledo_presidente_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function robledo_presidente_customize_preview_js() {
	wp_enqueue_script( 'robledo_presidente_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'robledo_presidente_customize_preview_js' );
