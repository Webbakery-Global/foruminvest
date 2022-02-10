<?php

    function team() {

        $labels = array(
            'name'                  => _x( 'Teamleden', 'Post Type General Name', 'foruminvest' ),
            'singular_name'         => _x( 'Teamlid', 'Post Type Singular Name', 'foruminvest' ),
            'menu_name'             => __( 'Team', 'foruminvest' ),
            'name_admin_bar'        => __( 'Team', 'foruminvest' ),
            'archives'              => __( 'Item Archives', 'foruminvest' ),
            'attributes'            => __( 'Item Attributes', 'foruminvest' ),
            'parent_item_colon'     => __( 'Parent Item:', 'foruminvest' ),
            'all_items'             => __( 'All Items', 'foruminvest' ),
            'add_new_item'          => __( 'Add New Item', 'foruminvest' ),
            'add_new'               => __( 'Voeg nieuw teamlid toe', 'foruminvest' ),
            'new_item'              => __( 'Nieuw teamlid', 'foruminvest' ),
            'edit_item'             => __( 'Wijzig teamlid', 'foruminvest' ),
            'update_item'           => __( 'Update teamlid', 'foruminvest' ),
            'view_item'             => __( 'Bekijk teamlid', 'foruminvest' ),
            'view_items'            => __( 'View Items', 'foruminvest' ),
            'search_items'          => __( 'Search Item', 'foruminvest' ),
            'not_found'             => __( 'Not found', 'foruminvest' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'foruminvest' ),
            'featured_image'        => __( 'Featured Image', 'foruminvest' ),
            'set_featured_image'    => __( 'Set featured image', 'foruminvest' ),
            'remove_featured_image' => __( 'Remove featured image', 'foruminvest' ),
            'use_featured_image'    => __( 'Use as featured image', 'foruminvest' ),
            'insert_into_item'      => __( 'Insert into item', 'foruminvest' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'foruminvest' ),
            'items_list'            => __( 'Items list', 'foruminvest' ),
            'items_list_navigation' => __( 'Items list navigation', 'foruminvest' ),
            'filter_items_list'     => __( 'Filter items list', 'foruminvest' ),
        );
        $args = array(
            'label'                 => __( 'Teamlid', 'foruminvest' ),
            'description'           => __( 'Team description', 'foruminvest' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'menu_icon'             => 'dashicons-groups',
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'team', $args );

    }
    add_action( 'init', 'team', 0 );


