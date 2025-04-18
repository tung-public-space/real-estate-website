<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real-estate-lite
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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'real-estate-lite' ); ?></a>
	<?php do_action('realest_top_bar');?>
	<header id="masthead" class="site-header" role="banner">
	<div class="grid">
		<div class="site-branding col-4-12">
			
			<?php
			    
                $output = null;

                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    $output .= get_custom_logo();
                } else {
                    $output .= '<h1 class="site-title"><a href="'. esc_url( trailingslashit( home_url() ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">';
                    $output .= get_bloginfo( 'name' );
                    $output .= '</a></h1>';
                }
                echo $output;           
            ?></h1>								
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>

		</div><!-- .site-branding -->
		<div class="main-nav col-8-12 pull-right">

		<?php	if (  has_nav_menu( 'primary' ) ) {
		 wp_nav_menu(array(
        'menu' => 'Main Navigation',
        'container_id' => 'cssmenu',
        'theme_location' => 'primary',
        'walker' => new Real_Estate_CSS_Menu_Walker()
    	));	}?>
    	

		</div>
	</div>

	</header><!-- #masthead -->

	<!-- Tung-lv -->
	<?php masterslider(2); ?>
	
	<div id="content" class="site-content">
