<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('slaps-saladin-style', get_stylesheet_uri(), array(), '1.0.0');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
