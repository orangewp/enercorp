<?php
session_start();
function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt) >= $limit) {
        array_pop($excerpt);
        $excerpt = implode(" ", $excerpt) . '...';
    } else {
        $excerpt = implode(" ", $excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`', '', $excerpt);
    return $excerpt;
}

function content($limit) {
    $content = explode(' ', get_the_content(), $limit);
    if (count($content) >= $limit) {
        array_pop($content);
        $content = implode(" ", $content) . '...';
    } else {
        $content = implode(" ", $content);
    }
    $content = preg_replace('/[.+]/', '', $content);
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    return $content;
}

//

if (!function_exists('mj_variable_add_to_cart')) {

    /**
     * Output the variable product add to cart area.
     */
    function mj_variable_add_to_cart() {
        global $product;

        // Enqueue variation scripts.
        wp_enqueue_script('wc-add-to-cart-variation');

        // Get Available variations?
        $get_variations = count($product->get_children()) <= apply_filters('woocommerce_ajax_variation_threshold', 30, $product);

        // Load the template.
        wc_get_template(
            '../woocommerce/custom/single-product/rtd/variable.php',
            array(
                'available_variations' => $get_variations ? $product->get_available_variations() : false,
                'attributes' => $product->get_variation_attributes(),
                'selected_attributes' => $product->get_default_attributes(),
            )
        );
    }
}

if (!function_exists('mj_single_product_add_to_cart')) {

    /**
     * Output the variable product add to cart area.
     */
    function mj_single_product_add_to_cart() {
        global $product;

        // Enqueue variation scripts.
        wp_enqueue_script('wc-add-to-cart-variation');

        // Get Available variations?
        $get_variations = count($product->get_children()) <= apply_filters('woocommerce_ajax_variation_threshold', 30, $product);

        // Load the template.
        wc_get_template(
            '../woocommerce/custom/single-product/rtd/variable.php',
            array(
                'available_variations' => $get_variations ? $product->get_available_variations() : false,
                'attributes' => $product->get_variation_attributes(),
                'selected_attributes' => $product->get_default_attributes(),
            )
        );
    }
}

add_action('woocommerce_add_to_cart', 'custome_add_to_cart');
function custome_add_to_cart() {
    global $woocommerce;
    // print_r($_POST);
    if (isset($_POST['attribute_temp'])) {
        $productId = $_POST['product_id'];
        if ($_POST['attribute_temp']) {
            $leadWireCostMultiplier = 0;
            $immersionCostMultiplier = 0;
            if ($_POST['attribute_temp'] == '200C') {
                $leadWireCostMultiplier = 0.167;
                $immersionCostMultiplier = 0.540;
            } else {
                $leadWireCostMultiplier = 0.29;
                $immersionCostMultiplier = 0.67;
            }
            if ($_POST['wirelength'] && $_POST['immersionlength']) {
                $wireLength = $_POST['wirelength'];
                $immersionLength = $_POST['immersionlength'];
                $_SESSION[$productId . $_POST['attribute_temp'] . $wireLength . $immersionLength] = ($wireLength * $leadWireCostMultiplier) + ($immersionLength * $immersionCostMultiplier);
            }
            // if ($_POST['immersionlength']) {
            //     $immersionlength = $_POST['immersionlength'];
            //     $_SESSION['immersionlength'] = $immersionlength;
            // } else {
            //     $_SESSION['immersionlength'] = 0;
            // }
        }
    }

}
add_action('woocommerce_before_calculate_totals', 'add_custom_price');

function add_custom_price($cart_object) {
    foreach ($cart_object->cart_contents as $key => $value) {
        // print_r($value['thwepof_options']['wirelength']['value']);
        $productId = $value['product_id'];
        if (isset($value['thwepof_options'])) {
            if (isset($value['variation']['attribute_temp'])) {
                if (isset($_SESSION[$productId . $value['variation']['attribute_temp'] . $value['thwepof_options']['wirelength']['value'] . $value['thwepof_options']['immersionlength']['value']])) {
                    $additionalCost = $_SESSION[$productId . $value['variation']['attribute_temp'] . $value['thwepof_options']['wirelength']['value'] . $value['thwepof_options']['immersionlength']['value']];
                    $originalPrice = $value['data']->get_price();
                    // for WooCommerce version 3+ use:
                    $value['data']->set_price($originalPrice + $additionalCost);
                }

            }
        }

    }
}

function add_the_date_validation($passed) {
    if (isset($_POST['wirelength']) && isset($_POST['immersionlength'])) {
        if ($_POST['wirelength'] < 0) {
            wc_add_notice(__('Please enter valid lead wire length.', 'woocommerce'), 'error');
            $passed = false;
        }
        if ($_POST['immersionlength'] < 0) {
            wc_add_notice(__('Please enter valid immersion length.', 'woocommerce'), 'error');
            $passed = false;
        }
    }
    return $passed;
}

add_filter('woocommerce_add_to_cart_validation', 'add_the_date_validation', 10, 5);
