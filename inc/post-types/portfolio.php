<?php

function us_portfolio()
{

    $labels = array(
        'name' => _x('Portfolio items', 'Post Type General Name', 'foruminvest'),
        'singular_name' => _x('Portfolio', 'Post Type Singular Name', 'foruminvest'),
        'menu_name' => __('Portfolio', 'foruminvest'),
        'name_admin_bar' => __('Portfolio', 'foruminvest'),
        'archives' => __('Item Archives', 'foruminvest'),
        'attributes' => __('Item Attributes', 'foruminvest'),
        'parent_item_colon' => __('Parent Item:', 'foruminvest'),
        'all_items' => __('Portfolio', 'foruminvest'),
        'add_new_item' => __('Add New Item', 'foruminvest'),
        'add_new' => __('Voeg nieuw portfolio item toe', 'foruminvest'),
        'new_item' => __('Nieuw portfolio item', 'foruminvest'),
        'edit_item' => __('Wijzig portfolio item', 'foruminvest'),
        'update_item' => __('Update portfolio item', 'foruminvest'),
        'view_item' => __('Bekijk portfolio item', 'foruminvest'),
        'view_items' => __('Bekijk portfolio items', 'foruminvest'),
        'search_items' => __('Zoek portfolio item', 'foruminvest'),
        'not_found' => __('Not found', 'foruminvest'),
        'not_found_in_trash' => __('Not found in Trash', 'foruminvest'),
        'featured_image' => __('Featured Image', 'foruminvest'),
        'set_featured_image' => __('Set featured image', 'foruminvest'),
        'remove_featured_image' => __('Remove featured image', 'foruminvest'),
        'use_featured_image' => __('Use as featured image', 'foruminvest'),
        'insert_into_item' => __('Insert into item', 'foruminvest'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'foruminvest'),
        'items_list' => __('Items list', 'foruminvest'),
        'items_list_navigation' => __('Items list navigation', 'foruminvest'),
        'filter_items_list' => __('Filter items list', 'foruminvest'),
    );
    $args = array(
        'label' => __('Portfolio item', 'foruminvest'),
        'description' => __('Portfolio description', 'foruminvest'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'taxonomies' => array('portfolio_category'),
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-building',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => true,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('us_portfolio', $args);

}

add_action('init', 'us_portfolio', 0);


function portfolio_category()
{

    $labels = array(
        'name' => _x('Portfolio categorieën', 'Taxonomy General Name', 'foruminvest'),
        'singular_name' => _x('Portfolio categorieën', 'Taxonomy Singular Name', 'foruminvest'),
        'menu_name' => __('Portfolio categorieën', 'foruminvest'),
        'all_items' => __('Alle categorieën', 'foruminvest'),
        'parent_item' => __('Parent Item', 'foruminvest'),
        'parent_item_colon' => __('Parent Item:', 'foruminvest'),
        'new_item_name' => __('Nieuwe portfolio categorie', 'foruminvest'),
        'add_new_item' => __('Nieuwe portfolio categorie', 'foruminvest'),
        'edit_item' => __('Wijzig categorie', 'foruminvest'),
        'update_item' => __('Update categorie', 'foruminvest'),
        'view_item' => __('View Item', 'foruminvest'),
        'separate_items_with_commas' => __('Separate items with commas', 'foruminvest'),
        'add_or_remove_items' => __('Add or remove items', 'foruminvest'),
        'choose_from_most_used' => __('Choose from the most used', 'foruminvest'),
        'popular_items' => __('Popular Items', 'foruminvest'),
        'search_items' => __('Search Items', 'foruminvest'),
        'not_found' => __('Not Found', 'foruminvest'),
        'no_terms' => __('No items', 'foruminvest'),
        'items_list' => __('Items list', 'foruminvest'),
        'items_list_navigation' => __('Items list navigation', 'foruminvest'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('portfolio_category', array('us_portfolio'), $args);

}

add_action('init', 'portfolio_category', 0);

