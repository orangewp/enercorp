<?php

//Setup

//Includes
include get_theme_file_path('/includes/front/enqueue.php');
include get_theme_file_path('/includes/setup.php');
include get_theme_file_path('/includes/widgets.php');
include get_theme_file_path('/includes/theme-customizer.php');
include get_theme_file_path('/includes/woocommerce-config.php');

//Hooks
add_action('wp_enqueue_scripts', 'mj_enqueue');
add_action('after_setup_theme', 'mj_registerMenu');
add_action('widgets_init', 'mj_widgets');
add_action('customize_register', 'mj_customize_register');

// Woocommerce Hooks
add_action('mj_woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
add_action('mj_woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
add_action('mj_woocommerce_product_meta', 'woocommerce_template_single_meta', 40);
add_action('mj_woo_add_to_cart', 'woocommerce_template_single_add_to_cart', 10);
add_action('mj_woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 10);
add_action('mj_variable_add_to_cart', 'mj_variable_add_to_cart', 10);
add_action('mj_single_product_add_to_cart', 'mj_single_product_add_to_cart', 10);

// Filters
add_filter('wc_get_template_part', 'my_custom_product_template', 10, 3);

//Shortcodes

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);
// remove_action('woocommerce_single_variation', 'woocommerce_single_variation', 10);
remove_action('woocommerce_single_variation', 'woocommerce_single_variation_add_to_cart_button', 20);
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);