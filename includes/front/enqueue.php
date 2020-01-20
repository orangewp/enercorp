<?php

function mj_enqueue()
{
    $uri = get_theme_file_uri();
    wp_register_style('mj_bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
    wp_register_style('mj_fontawesome', $uri . '/assets/css/fontawesome.min.css');
    wp_register_style('mj_fontawesome_solid', $uri . '/assets/css/solid.min.css');
    wp_register_style('mj_main_style', $uri . '/assets/css/style.css');

    wp_enqueue_style('mj_bootstrap');
    wp_enqueue_style('mj_fontawesome');
    wp_enqueue_style('mj_fontawesome_solid');
    wp_enqueue_style('mj_main_style');

    wp_register_script('mj_script', $uri . '/assets/js/script.js');
    wp_enqueue_script('mj_script');
}
