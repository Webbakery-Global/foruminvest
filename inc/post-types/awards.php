<?php

// Register Custom Post Type
function awards()
{

    $labels = array(
        'name' => _x('Awards', 'Post Type General Name', 'foruminvest'),
        'singular_name' => _x('Award', 'Post Type Singular Name', 'foruminvest'),
        'menu_name' => __('Awards', 'foruminvest'),
        'name_admin_bar' => __('Awards', 'foruminvest'),
        'archives' => __('Item Archives', 'foruminvest'),
        'attributes' => __('Item Attributes', 'foruminvest'),
        'parent_item_colon' => __('Parent Item:', 'foruminvest'),
        'all_items' => __('Alle awards', 'foruminvest'),
        'add_new_item' => __('Add New Item', 'foruminvest'),
        'add_new' => __('Voeg nieuwe award toe', 'foruminvest'),
        'new_item' => __('Voeg nieuwe award toe', 'foruminvest'),
        'edit_item' => __('Wijzig Award', 'foruminvest'),
        'update_item' => __('Update Award', 'foruminvest'),
        'view_item' => __('Bekijk Award', 'foruminvest'),
        'view_items' => __('Bekijk Awards', 'foruminvest'),
        'search_items' => __('Zoek award', 'foruminvest'),
        'not_found' => __('Niet gevonden', 'foruminvest'),
        'not_found_in_trash' => __('Not found in Trash', 'foruminvest'),
        'featured_image' => __('Award foto', 'foruminvest'),
        'set_featured_image' => __('Kies Award foto', 'foruminvest'),
        'remove_featured_image' => __('Verwijder award foto', 'foruminvest'),
        'use_featured_image' => __('Kies als Award foto', 'foruminvest'),
        'insert_into_item' => __('Voeg in als Award foto', 'foruminvest'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'foruminvest'),
        'items_list' => __('Items list', 'foruminvest'),
        'items_list_navigation' => __('Items list navigation', 'foruminvest'),
        'filter_items_list' => __('Filter items list', 'foruminvest'),
    );
    $args = array(
        'label' => __('Award', 'foruminvest'),
        'description' => __('Award description', 'foruminvest'),
        'labels' => $labels,
        'supports' => array('title', 'thumbnail'),
        'hierarchical' => false,
        'public' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-awards',
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'page',
    );
    register_post_type('awards', $args);

}

add_action('init', 'awards', 0);
