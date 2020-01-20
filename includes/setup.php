<?php

function mj_registerMenu() {
    add_theme_support('post-thumbnails');
    register_nav_menu('primary', __('Primary Menu', 'enercorp'));
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
/**
 *
 * Redirect to specific single product page template based on category
 */

function my_custom_product_template($template, $slug, $name) {

    if ($name === 'single-product' && $slug === 'content') {
        global $product_cat;
        $isTshirt = has_term('testing', 'product_tag');
        if ($isTshirt == 1) {
            $temp = locate_template(array("{$slug}-{$name}-testing.php", WC()->template_path() . "{$slug}-{$name}-testing.php"));
        } else {
            $temp = locate_template(array("{$slug}-{$name}-{$product_cat}.php", WC()->template_path() . "{$slug}-{$name}-{$product_cat}.php"));
        }
        if ($temp) {
            $template = $temp;
        }
    }
    return $template;
}
