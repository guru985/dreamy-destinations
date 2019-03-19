<?php
function my_register_additional_customizer_settings( $wp_customize ) {
	// Add Panels Filds in customize option
	$wp_customize->add_panel( 'text_fields', array(
		'title' => __( 'Theme option' ),
		'description' => $description,
		'priority' => 40,
	) );

   // Add Top Header Text Fields In Customize Option
	$wp_customize->add_section('Top_header_text_field', array(
		'title' => __('Top header', 'ddthemeWordpress'),
		'priority' => 10,
		'panel' => 'text_fields',
	));
	$wp_customize->add_setting('content_text_field', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_text_field_control', array(
		'label' =>__('Add countery name', 'ddthemeWordpress'),
		'section' => 'Top_header_text_field',
		'settings' => 'content_text_field',
		'type'       => 'text',
	)));


	$wp_customize->add_setting('content_number_field', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_number_control', array(
		'label' =>__('Add contact number', 'ddthemeWordpress'),
		'section' => 'Top_header_text_field',
		'settings' => 'content_number_field',
		'type'       => 'text',
	)));

	$wp_customize->add_setting('content_email_field', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_email_control', array(
		'label' =>__('Add e-mail address', 'ddthemeWordpress'),
		'section' => 'Top_header_text_field',
		'settings' => 'content_email_field',
		'type'       => 'text',
	)));
 
    // Add Banner image Fields In Customize Option
	$wp_customize->add_section('feature_images', array(
		'title'           => __('Banner Image', 'ddthemeWordpress'),
		'description'     => __('Home page banner image'), 
		'priority'        => 20,
		'active_callback' => 'is_front_page',
		'panel' => 'text_fields',
	));
	$wp_customize->add_setting('feature_product_one', array(
		'default-image' => get_template_directory_uri() . '/assest/imgs/featureProducts/product1.png',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'feature_product_one_control', array(
		'label' => __('Banner image', 'ddthemeWordpress'),
		'section' => 'feature_images',
		'settings' => 'feature_product_one',
	)));



    // Add Footer Section Fields In Customize Option
	$wp_customize->add_section('footer_section', array(
		'title'           => __('Footer option', 'ddthemeWordpress'),
		'priority'        => 70,
		'active_callback' => 'is_front_page',
		'panel' => 'text_fields',
	));
	$wp_customize->add_setting('footer_section_one', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_section_one_control', array(
		'label' => __('Footer section one heading', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_section_one',
		'type'       => 'text',
	)));

	$wp_customize->add_setting('footer_section_one_content', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_section_one_content_control', array(
		'label' => __('Footer address section', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_section_one_content',
		'type'       => 'textarea',
	)));

	$wp_customize->add_setting('footer_section_two', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_section_two_control', array(
		'label' => __('Footer section two heading', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_section_two',
		'type'       => 'text',
	)));

	$wp_customize->add_setting('footer_section_three', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_section_three_control', array(
		'label' => __('Footer section three heading', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_section_three',
		'type'       => 'text',
	)));

	$wp_customize->add_setting('footer_bottom', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bottom_control', array(
		'label' => __('Footer bottom copyright content', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_bottom',
		'type'       => 'text',
	)));

	$wp_customize->add_setting('footer_bottom_copyright_link', array(
		'default' => '',
		'transport'     => 'refresh',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_bottom_copyright_link_control', array(
		'label' => __('Footer bottom copyright link', 'ddthemeWordpress'),
		'section' => 'footer_section',
		'settings' => 'footer_bottom_copyright_link',
		'type'       => 'text',
	)));

}
add_action( 'customize_register', 'my_register_additional_customizer_settings' );
