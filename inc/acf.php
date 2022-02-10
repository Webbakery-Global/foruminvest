<?php
// Options pages
if (function_exists('acf_add_options_page')) {
// Add parent.

    acf_add_options_page(array(
        'page_title' => 'Algemene opties',
        'menu_title' => 'Algemene opties',
        'menu_slug' => 'algemene-opties',
        'capability' => 'manage_options',
        'redirect' => false

    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Vacature formulier',
        'menu_title'	=> 'Vacature formulier',
        'parent_slug'	=> 'algemene-opties',
    ));


}
