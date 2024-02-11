<?php
/*
Plugin Name: Text List Fade
Description: Creates a shortcode to display a list of fading text.
Version: 1.0
Author: M-Dot
Author URI: https://www.mdotweb.com/
*/

// Enqueue CSS
function text_list_fade_styles() {
    wp_enqueue_style('text-list-fade-css', plugins_url('text-list-fade.css', __FILE__));
}
add_action('wp_enqueue_scripts', 'text_list_fade_styles');

// Enqueue JavaScript
function text_list_fade_scripts() {
    wp_enqueue_script('text-list-fade-js', plugins_url('text-list-fade.js', __FILE__), array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'text_list_fade_scripts');

// Shortcode function
function text_list_fade_shortcode($atts) {
    $atts = shortcode_atts(array(
        'words' => '',
        'duration' => 5000
    ), $atts);

    $words_array = explode(',', $atts['words']);

    ob_start();
    ?>
    <div class="text-list-fade">
        <?php foreach ($words_array as $word) : ?>
            <span class="word"><?php echo trim($word); ?></span>
        <?php endforeach; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('text_list_fade', 'text_list_fade_shortcode');
