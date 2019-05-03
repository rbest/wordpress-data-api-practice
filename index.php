<?php

/**
 * Plugin Name: JS Advancers - DATA API Examples
 * Description: 
 * Version: 1.0.0
 * Author: js-advancers
 * Text Domain: js-advancers
 */

NAMESPACE jsadvancers\data_api_examples;

add_action( 'init', __NAMESPACE__.'\register_block_assets' );

function register_block_assets() {

    // register the main JS file that houses all our blocks
    wp_register_script(
        'block-js',
        plugins_url( '/build/index.js' , __FILE__ ),
        ['wp-blocks', 'wp-data']
    );

    // register our block styles
    wp_register_style(
        'block-style',
        plugins_url( '/style.css' , __FILE__ ),
        []    
    );

    // register our editor styles
    wp_register_style(
        'block-editor-style',
        plugins_url( '/editor.css' , __FILE__ ),
        []
    );

    // register our block
    register_block_type( 'jsadvancers/data-api-examples', array(
        'editor_script' => 'block-js',
        'editor_style' => 'block-editor-style',
        'style' => 'block-style'
    ));


}