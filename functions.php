<?php

function my_enqueue_styles()
{
    wp_enqueue_style('main-css', get_template_directory_uri() . '/sass/styles.css', array(), '', 'all');
}
add_action('wp_enqueue_scripts', 'my_enqueue_styles');