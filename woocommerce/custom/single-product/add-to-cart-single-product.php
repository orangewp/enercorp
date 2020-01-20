<?php

defined('ABSPATH') || exit;
global $product;

?>
<div class="primary-bg">
<p class="right-sidebar-product-title">
<?php
if (get_field('product_title')) {
    the_field('product_title');
}?>
</p>
<p class="right-sidebar-product-price"><?php echo $product->get_price_html();
if ($product->get_type() == 'grouped') {
    global $product;

    $products = array_filter(array_map('wc_get_product', $product->get_children()), 'wc_products_array_filter_visible_grouped');
    if ($product) {
        wc_get_template('/custom/single-product/grouped.php', array(
            'grouped_product' => $product,
            'grouped_products' => $products,
            'quantites_required' => false,
        ));
    }

}
?></p>
</div>
<div class="margin-top-sm">

<div class="mjvariationtable">
    <div class="single_variation_wrap">

    <div class="right-side-pricing-section">
<?php do_action('woocommerce_single_variation');
if ($product->get_type() != 'grouped') {
    wc_get_template('custom/single-product/simple.php');
}
?>
</div>

    </div>
    <div class="simple-product-sidebar-content">
    <?php
if (get_field('simple_product_content')) {
    the_field('simple_product_content');
}?>
    </div>
</div>
</div>

<?php

/**
 * Hook: woocommerce_single_product_summary.
 *
 * @hooked woocommerce_template_single_title - 5
 * @hooked woocommerce_template_single_rating - 10
 * @hooked woocommerce_template_single_price - 10
 * @hooked woocommerce_template_single_excerpt - 20
 * @hooked woocommerce_template_single_add_to_cart - 30
 * @hooked woocommerce_template_single_meta - 40
 * @hooked woocommerce_template_single_sharing - 50
 * @hooked WC_Structured_Data::generate_product_data() - 60
 */
?>