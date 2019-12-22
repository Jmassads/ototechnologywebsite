<?php
function ototechnology_styles()
{
    wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
    wp_enqueue_style('Lato', "https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap");
    wp_enqueue_style('ototechnology_stylesheet', get_stylesheet_uri());
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js', "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js", array('jquery'), '4.0.0', true);
    wp_enqueue_script('fontaweomse-js', "https://kit.fontawesome.com/fef8d857c5.js", array(), '5.0.0', false);
    wp_enqueue_script('main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), '5.0.0', true);
}

add_action('wp_enqueue_scripts', 'ototechnology_styles');

// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ototechnology' )
) );
add_theme_support('post-thumbnails');

function ototechnology_setup() {
    $defaults = array(
        'height'      => 115,
        'width'       => 73,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'ototechnology_setup' );

function ototechnology_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'ototechnology' ),
        'id'            => 'sidebar-1',
        'description'   => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'ototechnology_widgets_init' );



function my_custom_logo_link() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '%2$s',
        esc_url( 'oceanwp.org' ),
        wp_get_attachment_image( $custom_logo_id, 'full', false, array(
            'class' => 'img-responsive',
        ) )
    );
    return $html;
}
add_filter( 'get_custom_logo', 'my_custom_logo_link' );
?>


