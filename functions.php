<?php
/**
** activation theme
**/
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_theme_support( 'editor-color-palette', array(

    array(

        'name' => __('White', 'genesis-sample' ),

        'slug' => 'white',

        'color' => '#ffffff',

    ),

    array(

        'name' => __( 'Mongoose', 'genesis-sample' ),

        'slug' => 'mongoose',

        'color' => '#b09f82',

    ),

    array(

        'name' => __( 'Mine Shaft', 'genesis-sample' ),

        'slug' => 'Mine-Shaft',

        'color' => '#4a4a4a',

    ),

    array(

        'name' => __( 'Pickled Bean', 'genesis-sample' ),

        'slug' => 'pickled-bean',

        'color' => '#8b572a',

    ),

) );



// Suppression des couleurs sur mesure

add_theme_support( 'disable-custom-colors' );
