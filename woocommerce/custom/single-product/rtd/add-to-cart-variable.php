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
<p class="right-sidebar-product-price"><?php echo $product->get_price_html(); ?></p>
</div>
<div class="margin-top-sm">

<div class="ordering-data margin-top-sm">
<h4>Ordering Data</h4>
<?php
if (get_field('ordering_data')) {
    ?><?php the_field('ordering_data');?>
<?php }?>
</div>
<div class="mjvariationtable">
<?php do_action('mj_variable_add_to_cart');?>

</div></div>

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