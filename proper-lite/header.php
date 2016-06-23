<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package proper-lite
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'proper-lite' ); ?></a> 

	<header id="masthead" class="site-header animated fadeIn delay-2">
    
    <?php if ( 'option1' == proper_lite_sanitize_index_content( get_theme_mod( 'proper_lite_menu_method' ) ) ) : ?>
                
                <div class="navigation-container">
                
        		</div>
                
			</header><!-- #masthead -->
            
            <div id="sidr">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> 
            </div>
                
     <?php else : ?>
            
           
     			<div class="classic-navigation">
        			<nav id="site-navigation" class="main-navigation" role="navigation">
                    
            			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                        
            		</nav><!-- #site-navigation --> 
        		</div><!-- navigation-container --> 
                
                <div class="navigation-container classic-menu">
        		</div> 
                
                
            </header><!-- #masthead --> 
                    
            <div id="sidr">
              <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?> 
            </div>
            
        			
    <?php endif; ?>
    
    

	<div id="content" class="site-content">
