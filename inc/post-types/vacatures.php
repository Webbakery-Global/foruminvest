<?php

    function Vacatures() {

        $labels = array(
            'name'                  => _x( 'Vacatures', 'Post Type General Name', 'foruminvest' ),
            'singular_name'         => _x( 'Vacature', 'Post Type Singular Name', 'foruminvest' ),
            'menu_name'             => __( 'Vacatures', 'foruminvest' ),
            'name_admin_bar'        => __( 'Vacatures', 'foruminvest' ),
            'archives'              => __( 'Item Archives', 'foruminvest' ),
            'attributes'            => __( 'Item Attributes', 'foruminvest' ),
            'parent_item_colon'     => __( 'Parent Item:', 'foruminvest' ),
            'all_items'             => __( 'Alle Vacature', 'foruminvest' ),
            'add_new_item'          => __( 'Voeg nieuwe Vacatures toe', 'foruminvest' ),
            'add_new'               => __( 'Voeg nieuwe Vacatures toe', 'foruminvest' ),
            'new_item'              => __( 'Voeg nieuwe Vacatures toe', 'foruminvest' ),
            'edit_item'             => __( 'Wijzig Vacature', 'foruminvest' ),
            'update_item'           => __( 'Update Vacature', 'foruminvest' ),
            'view_item'             => __( 'Bekijk Vacature', 'foruminvest' ),
            'view_items'            => __( 'Bekijk Vacatures', 'foruminvest' ),
            'search_items'          => __( 'Zoek Vacature', 'foruminvest' ),
            'not_found'             => __( 'Not found', 'foruminvest' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'foruminvest' ),
            'featured_image'        => __( 'Vacature Foto', 'foruminvest' ),
            'set_featured_image'    => __( 'Kies een Vacature foto', 'foruminvest' ),
            'remove_featured_image' => __( 'Verwijder Vacature foto', 'foruminvest' ),
            'use_featured_image'    => __( 'Kies als Vacature foto', 'foruminvest' ),
            'insert_into_item'      => __( 'Insert into item', 'foruminvest' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'foruminvest' ),
            'items_list'            => __( 'Items list', 'foruminvest' ),
            'items_list_navigation' => __( 'Items list navigation', 'foruminvest' ),
            'filter_items_list'     => __( 'Filter items list', 'foruminvest' ),
        );
        $args = array(
            'label'                 => __( 'Vacature', 'foruminvest' ),
            'description'           => __( 'Vacatures beschrijving', 'foruminvest' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'menu_icon'             => 'dashicons-admin-users',
            'can_export'            => true,
            'has_archive'           => false,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'Vacatures', $args );

    }
    add_action( 'init', 'Vacatures', 0 );

