<?php
// Color Customization Options
function dd_themeWordpress_customize_register($wp_customize) {
	// Add Panels Filds in customize option
	$wp_customize->add_panel( 'colors', array(
		'title' => __( 'Colors Settings' ),
		'description' => $description,
		'priority' => 30,
	) );

   // Add All Content Color Section In Customize Option
	$wp_customize->add_section('standerd_content_colors', array(
		'title' => __('Content color', 'ddthemeWordpress'),
		'priority' => 20,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('content_colors', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'content_color_control', array(
		'label' =>__('Content Color', 'ddthemeWordpress'),
		'section' => 'standerd_content_colors',
		'settings' => 'content_colors',
	)));

	// Add All Heading Color Section In Customize Option
	$wp_customize->add_section('standerd_heading_colors', array(
		'title' => __('Heading color', 'ddthemeWordpress'),
		'priority' => 20,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('heading_colors', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'heading_color_control', array(
		'label' =>__('Heading Color', 'ddthemeWordpress'),
		'section' => 'standerd_heading_colors',
		'settings' => 'heading_colors',
	)));


	// Add  link Color Section In Customize Option
	$wp_customize->add_section('lwp_standard_colors', array(
		'title' => __('All links colors', 'ddthemeWordpress'),
		'priority' => 30,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('lwp_link_color', array(
		'default' => '#006ec3',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lwp_link_color_control', array(
		'label' =>__('Link Color', 'ddthemeWordpress'),
		'section' => 'lwp_standard_colors',
		'settings' => 'lwp_link_color',
	)));


	// Add Link Hover Color Section In Customize Option
	$wp_customize->add_section('lwp_hover_standard_colors', array(
		'title' => __('All hover links colors', 'ddthemeWordpress'),
		'priority' => 40,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('lwp_hover_link_color', array(
		'default' => '#C42431',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lwp_hover_link_color_control', array(
		'label' =>__('Link Hover Color', 'ddthemeWordpress'),
		'section' => 'lwp_hover_standard_colors',
		'settings' => 'lwp_hover_link_color',
	)));


	// Add Top Header Background-Color Section In Customize Option
	$wp_customize->add_section('top_header_bg_colors', array(
		'title' => __('Top header background color', 'ddthemeWordpress'),
		'priority' => 50,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('top_header_bgcolors', array(
		'default' => '#24C4B7',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_hearder_bgcolor_control', array(
		'label' =>__('Top Header Background-Color', 'ddthemeWordpress'),
		'section' => 'top_header_bg_colors',
		'settings' => 'top_header_bgcolors',
	)));


	// Add Bottom Header Background-Color Section In Customize Option
	$wp_customize->add_section('bottom_header_bg_colors', array(
		'title' => __('Bottom header background color', 'ddthemeWordpress'),
		'priority' => 60,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('bottom_header_bgcolors', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bottom_hearder_bgcolor_control', array(
		'label' =>__('Bottom Header Background-Color', 'ddthemeWordpress'),
		'section' => 'bottom_header_bg_colors',
		'settings' => 'bottom_header_bgcolors',
	)));


	// Add Top Footer Background-Color Section In Customize Option
	$wp_customize->add_section('top_footer_bg_colors', array(
		'title' => __('Top footer background color', 'ddthemeWordpress'),
		'priority' => 70,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('top_footer_bgcolors', array(
		'default' => '#24C4B7',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'top_footer_bgcolor_control', array(
		'label' =>__('Top Footer Background-Color', 'ddthemeWordpress'),
		'section' => 'top_footer_bg_colors',
		'settings' => 'top_footer_bgcolors',
	)));


	// Add Bottom Footer Background-Color Section In Customize Option
	$wp_customize->add_section('bottom_footer_bg_colors', array(
		'title' => __('Bottom footer background color', 'ddthemeWordpress'),
		'priority' => 80,
		'panel' => 'colors',
	));
	$wp_customize->add_setting('bottom_footer_bgcolors', array(
		'default' => '',
		'transport' => 'refresh',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'bottom_footer_bgcolor_control', array(
		'label' =>__('Bottom Footer Background-Color', 'ddthemeWordpress'),
		'section' => 'bottom_footer_bg_colors',
		'settings' => 'bottom_footer_bgcolors',
	)));
}
add_action('customize_register', 'dd_themeWordpress_customize_register');

// Add Css function for customization options
function dd_themeWordpress_customize_css() { ?>
	<style type="text/css">
	p {
		color: <?php echo get_theme_mod('content_colors'); ?>;
	}
	h1, h2, h3, h4, h5, h6 {
		color: <?php echo get_theme_mod('heading_colors'); ?>;
	}
	a {
		color: <?php echo get_theme_mod('lwp_link_color'); ?>;
	}
	a:hover {
		color: <?php echo get_theme_mod('lwp_hover_link_color'); ?>;
	}
	.mo_dd-top-header {
		background: <?php echo get_theme_mod('top_header_bgcolors'); ?>;
	}
	.mo_dd-bottom-header {
		background: <?php echo get_theme_mod('bottom_header_bgcolors'); ?>;
	}
	.og_main-footer--section {
		background: <?php echo get_theme_mod('top_footer_bgcolors'); ?>;
	}
	.og_bottom-footer {
		background: <?php echo get_theme_mod('bottom_footer_bgcolors'); ?>;
	}
</style>
<?php }
add_action('wp_head', 'dd_themeWordpress_customize_css');