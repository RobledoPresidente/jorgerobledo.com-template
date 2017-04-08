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

	class RP_Customize_Textarea_Control extends WP_Customize_Control {
  		public $type = 'textarea';
  		public function render_content() {
?>

<label>
	<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
	<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
</label>

<?php
  		}
	}

	$wp_customize->add_setting('rp_custom_hashtag', array('default' => '#RobledoPresidente2018',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_custom_hashtag', array(
		'label' => 'Escriba aquí el hashtag con el tema destacado de actualidad:',
		'section' => 'content',
		'settings' => 'rp_custom_hashtag',
	)));
	$wp_customize->add_section('content' , array(
		'title' => __('Hashtag','robledo-presidente'),
	));
}
add_action( 'customize_register', 'robledo_presidente_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function robledo_presidente_customize_preview_js() {
	wp_enqueue_script( 'robledo_presidente_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'robledo_presidente_customize_preview_js' );
