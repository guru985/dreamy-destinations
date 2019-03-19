<?php 
//menu register  
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
	//Primary menu register 
	register_nav_menu( 'primary', __( 'Primary Menu', 'dreamy-destinations' ) );
	//Footer menu register 
	register_nav_menu( 'footer', __( 'Footer Menu', 'dreamy-destinations' ) );
}
// Custom Primary Menu
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
// Custom Footer Menu
class Dd_footer_menu_Walker extends Walker_Nav_Menu {   
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
