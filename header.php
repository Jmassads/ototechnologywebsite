<?php
/**
 * The header for the theme.
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
    <a class="skip-link screen-reader-text" href="#content"><?php _e('Skip to content', 'ototechnology'); ?></a>

    <!-- HEADER
    ================================================== -->
    <header class="site-header fixed-top" role="banner">


        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>
        </a>

        <a href="javascript:void(0);" class="hamburger-menu icon" onclick="toggleMenu()">
            <i class="fas fa-bars"></i>
        </a>


        <!-- NAVBAR
        ================================================== -->

        <?php
        wp_nav_menu( array(
            'theme_location'	=> 'primary',
            'container'			=> 'nav'
        ) );
        ?>


    </header>