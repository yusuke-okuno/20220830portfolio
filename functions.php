

<?php

function enqueue_scripts()
{
    // CSS
    wp_enqueue_style('main-css', get_stylesheet_directory_uri() . '/assets/sass/styles.css', array(), '', 'all');

    // JS
    // wp_enqueue_script('index-js', get_stylesheet_directory_uri() . '/assets/js/index.js', array( 'jquery' ), '', true);
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');