<?php
function mytheme_enqueue_assets()
{
    // styles
    wp_enqueue_style('slaps-saladin-style', get_stylesheet_uri(), array(), '1.0.0');

    // scripts (optionally conditional)
    if (is_front_page()) {
        wp_enqueue_script(
            'slaps-saladin-js',
            get_template_directory_uri() . '/js/posts.js',
            array('jquery'),
            '1.0.0'
        );
    }
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');
