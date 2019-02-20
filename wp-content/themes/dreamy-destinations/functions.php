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

//menu register  
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
  register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}


class Dd_primary_menu_Walker extends Walker_Nav_Menu {   
    // Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
        $object = $item->object;
        $type = $item->type;
        $title = $item->title;
        $description = $item->description;
        $permalink = $item->url;
      $output .= "<li class='" .  implode(" ", $item->classes) . "'>";       
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
        $output .= '<a href="' . $permalink . '">';
      } else {
        $output .= '<span>';
      }       
      $output .= $title;
      if( $description != '' && $depth == 0 ) {
        $output .= '<small class="description">' . $description . '</small>';
      }
      if( $permalink && $permalink != '#' ) {
        $output .= '</a>';
      } else {
        $output .= '</span>';
      }
    }
}

