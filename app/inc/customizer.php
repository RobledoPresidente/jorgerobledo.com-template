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
		'title' => __('Hashtag Robledo Presidente','robledo-presidente'),
	));

	/**
	 * Hashtag: el tema del momento para posicionar en redes sociales
	 */

	$wp_customize->add_setting('rp_custom_hashtag', array('default' => '#RobledoPresidente2018',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_custom_hashtag', array(
		'label' => 'Escriba aquí el hashtag con el tema destacado de actualidad:',
		'section' => 'content',
		'settings' => 'rp_custom_hashtag',
	)));
	$wp_customize->add_section('content' , array(
		'title' => __('Hashtag Robledo','robledo-presidente'),
	));

	/**
	 * Videos: un video destacado y tres adicionales
	 */

	$wp_customize->add_setting('rp_video1_title', array('default' => 'Robledo y Peláez - Homenaje al senador Robledo, 5 veces elegido mejor senador de Colombia',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video1_title', array(
		'label' => 'Escriba aquí el título del video destacado:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video1_title',
	)));
	$wp_customize->add_setting('rp_video1_url', array('default' => 'http://www.youtube.com/embed/qu5VBQkXY3k',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video1_url', array(
		'label' => 'Escriba aquí la URL del video destacado:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video1_url',
	)));
	$wp_customize->add_setting('rp_video1_caption', array('default' => 'El "doctor" Peláez logra un divertida entrevista, donde el senador y precandidato presidencial hablan sobre su trayectoria, su familia y los deseos de ser Presidente de Colombia.',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video1_caption', array(
		'label' => 'Escriba aquí la descripción del video destacado:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video1_caption',
	)));

	$wp_customize->add_setting('rp_video2_title', array('default' => '¿Qué esperar de la investigación por el escándalo de Odebrecht?',));	
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video2_title', array(
		'label' => 'Escriba aquí el título del segundo video:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video2_title',
	)));
	$wp_customize->add_setting('rp_video2_url', array('default' => 'http://www.youtube.com/embed/FqAkM4V5Xsc',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video2_url', array(
		'label' => 'Escriba aquí la URL del segundo video:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video2_url',
	)));

	$wp_customize->add_setting('rp_video3_title', array('default' => '¿Conviene al país la indignación contra el Establecimiento?',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video3_title', array(
		'label' => 'Escriba aquí el título del tercer video::',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video3_title',
	)));
	$wp_customize->add_setting('rp_video3_url', array('default' => 'http://www.youtube.com/embed/kCmO8P_egL8',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video3_url', array(
		'label' => 'Escriba aquí la URL del tercer video:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video3_url',
	)));

	$wp_customize->add_setting('rp_video4_title', array('default' => 'Salvemos la pesca artesanal: Audiencia Pública del senador Jorge Robledo',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video4_title', array(
		'label' => 'Escriba aquí el título del cuarto video:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video4_title',
	)));
	$wp_customize->add_setting('rp_video4_url', array('default' => 'http://www.youtube.com/embed/QqfTauOVatE',));
	$wp_customize->add_control(new RP_Customize_Textarea_Control($wp_customize, 'rp_video4_url', array(
		'label' => 'Escriba aquí la URL del cuarto video:',
		'section' => 'rp_theme_section',
		'settings' => 'rp_video4_url',
	)));

	$wp_customize->add_section('rp_theme_section' , array(
		'title' => __('Ajustes Robledo Presidente','robledo-presidente'),
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
