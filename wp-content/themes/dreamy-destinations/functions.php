 <?php 
/**
 * Proper way to enqueue scripts and styles
 */
function dramy_destinations_scripts() {

	// Theme default style Css
    wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    // Inlude Custom Css
    wp_enqueue_style('sass_style', get_stylesheet_directory_uri() .'/stylesheets/custom.css');

    // Inlude Bootstrap Css
    wp_enqueue_style('bootstrap_css', get_stylesheet_directory_uri().'/stylesheets/vendor/bootstrap/css/bootstrap.min.css');

    // Inlude font-awesome
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.7.1/css/all.css' );

     // Inlude Custom Js
    wp_enqueue_script( 'custom_js', get_stylesheet_directory_uri() . '/js/custom.js', array( 'jquery' ), '1.0', true );
    
    // Inlude Bootstrap Js
    wp_enqueue_script('bootstrap_js', get_stylesheet_directory_uri().'/js/vendor/bootstrap/js/bootstrap.min.js', array('jquery'), NULL, true);
}
add_action( 'wp_enqueue_scripts', 'dramy_destinations_scripts' );

// Logo customization api
function dd_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'dd_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'dd_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'dd' ),
        'section'  => 'title_tagline',
        'settings' => 'dd_logo',
    ) ) );
}
add_action( 'customize_register', 'dd_customize_register' );





require_once('inc/menu.php');
