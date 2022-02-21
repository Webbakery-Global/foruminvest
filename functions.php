<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

require_once(get_stylesheet_directory() . '/inc/post-types/portfolio.php');
require_once(get_stylesheet_directory() . '/inc/post-types/team.php');
require_once(get_stylesheet_directory() . '/inc/post-types/awards.php');
require_once(get_stylesheet_directory() . '/inc/post-types/vacatures.php');

add_theme_support('title-tag');
add_theme_support('custom-logo');

function understrap_remove_scripts()
{
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}

add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    // Get the theme data
    wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/assets/css/foruminvest.min.css', array(), filemtime(get_stylesheet_directory() . '/assets/css/foruminvest.min.css'), 'all');
    wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/assets/js/foruminvest.min.js', ["jquery"], filemtime(get_stylesheet_directory() . '/assets/js/foruminvest.min.js'), true);
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}


function add_child_theme_textdomain()
{
    load_child_theme_textdomain('webtheme', get_stylesheet_directory() . '/languages');
}

add_action('after_setup_theme', 'add_child_theme_textdomain');


function register_my_menus()
{
    register_nav_menus(
        array(
            'footer-menu' => __('Footer Menu'),
        )
    );
}

add_action('init', 'register_my_menus');

// Gutenberg uitschakelen
add_filter('use_block_editor_for_post', '__return_false', 10);
// Disable WordPress Admin Bar for all users
add_filter('show_admin_bar', '__return_false');


// This theme uses wp_nav_menu() in one location.
register_nav_menus(
    array(
        'primary' => esc_html__('Primary', 'cornelis'),
    )
);

/** ACF Option pages */
require get_template_directory() . '/inc/acf.php';
/** ACF Option pages */
require get_template_directory() . '/inc/custom-login.php';
/** Implement the Navwalker */
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
/** SVG  Support. */
require get_template_directory() . '/inc/support-svg.php';


add_theme_support('post-thumbnails');


//Remove Gutenberg Block Library CSS from loading on the frontend
function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('wc-block-style'); // Remove WooCommerce block CSS
}

add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);


remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is



