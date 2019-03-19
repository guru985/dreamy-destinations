<?php
/**
 * The template for displaying the header
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
    <head>
    	<meta charset="<?php bloginfo( 'charset' ); ?>">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="profile" href="http://gmpg.org/xfn/11">
    	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
    	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>
<body <?php body_class("dreamy_destinations"); ?>>  
    <header class="org_dd-main--header">
    	<div class="mo_dd-top-header">
    		<div class="container">
    			<div class="at_dd-top--left">
    				<span class="dd-address"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> <?php echo get_theme_mod('content_text_field'); ?></a></span>
    				<span class="dd-phone"><i class="fa fa-phone" aria-hidden="true"></i><?php echo get_theme_mod('content_number_field'); ?></span>
    				<span class="dd-fax"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo get_theme_mod('content_email_field'); ?></a></span>
    			</div>
    			<div class="at_dd-top--right">
                    <div id="wrap">
                      <form action="" autocomplete="on">
                          <input id="search" name="search" type="text" placeholder="">
                           <input id="search_submit" value="Rechercher" type="submit"><i class="fa fa-search"></i>
                      </form>
                  </div>
    			</div>
    		</div>
    	</div>
        <div class="mo_dd-bottom-header">
            <div class="container">
                <nav id='cssmenu'>
                    <div class="logo">
                        <?php if ( get_theme_mod( 'dd_logo' ) ) : ?>
                         <a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="site-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_theme_mod( 'dd_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
                        </a>
                        <?php else : ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div id="head-mobile"></div>
                    <div class="button"></div>
                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <?php
                            wp_nav_menu( array(
                                'menu_class' => 'dd-menu--primary',
                                'theme_location' => 'primary',
                                'container' => '',
                                'walker' => new Dd_primary_menu_Walker()
                            ) );
                            ?>
                    <?php endif; ?>
                </nav>
            </div>
        </div>
    </header>