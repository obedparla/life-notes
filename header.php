<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life-notes
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
<div id="page" class="site <?php echo get_theme_mod( 'layout_setting', 'no-sidebar' ); ?>">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'life-notes' ); ?></a>

	<?php if ( get_header_image() ) { ?>
		<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)" role="banner">
	<?php } else { ?>
		<header id="masthead" class="site-header" role="banner">
	<?php } ?>

		<div class="site-branding">
                    <div class="title-container">
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
                    </div>

                    <div class="navigation-container">
<!--                        Site navigation-->
                        <nav id="site-navigation" class="main-navigation" role="navigation">
                            <button class="menu-toggle" aria-controls="primary-menu"
                                    aria-expanded="false">
                                <span>Menu</span>
                            </button>
                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

                            <!-- the followings are social media buttons not used due to bad UX-->
                           <?php /*?>
                            <div class="search-toggle">
                                <i class="fa fa-search"></i>
                                <a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'life-notes' ); ?></a>
                            </div>

                            <?php life_notes_social_menu(); */?>

                        </nav><!-- #site-navigation -->
                    </div><!-- .navigation-container -->
                </div><!-- .site-branding -->

<!-- Search container, to allow, de-comment social buttons above.
               <div id="search-container" class="search-box-wrapper clear">
                    <div class="search-box clear">
                        <?php // get_search_form(); ?>
                    </div>
                </div> -->

	</header><!-- #masthead -->

	<div id="content" class="site-content" >
            <?php if(!is_single()){?>
                <div id="content-wrap" class="content-widget-wrap" >
            <?php }?>
