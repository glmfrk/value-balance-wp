<?php
/**
 * value-balance Theme Customizer
 *
 * @package value-balance
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function value_balance_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'value_balance_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'value_balance_customize_partial_blogdescription',
			)
		);
	}

	$wp_customize -> add_section ('general', array(
			'title' => 'General Option',
			'priority' => 10
	));

	$wp_customize -> add_setting ('logo_option', array(
			'default' => get_template_directory_uri().'/assets/images/logo.png',
			'transport' => 'postMessage'
	));

	$wp_customize -> add_control (new WP_Customize_Image_Control( $wp_customize, 'logo_option',
    array(
        'label'    => __( 'Logo Upload', 'value-balance' ),
        'section'  => 'general',
        'settings' => 'logo_option'
    )
		
	));

	$wp_customize -> add_setting ('phone_number', array(
		'default' => '1 (855) 728-2566',
		'transport' => 'postMessage'
	));

	$wp_customize -> add_control ('phone_number', array(
		'label'		 => __('Add Phone Number', 'value-balance' ),
		'section'	 => 'general',
		'type' 	 	 => 'text'
	));

}
add_action( 'customize_register', 'value_balance_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function value_balance_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function value_balance_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function value_balance_customize_preview_js() {
	wp_enqueue_script( 'value-balance-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'value_balance_customize_preview_js' );
