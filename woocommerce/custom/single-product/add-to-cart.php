<?php
defined('ABSPATH') || exit;

global $product;

if (!$product->is_purchasable()) {
    return;
}

?>
<form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
    <div class="mj_product_cart_box">
        <h4><?php echo esc_attr($product->get_name()); ?></h4>
        <p class="product-price">$<?php echo esc_attr($product->get_price()); ?></p>
        <?php
woocommerce_quantity_input(array(
    'min_value' => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
    'max_value' => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
    'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
));

?>
        <?php echo wc_get_stock_html($product); ?>
    </div>
    <div class="spacer"></div>
    <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class="mj_add_to_cart_btn"><?php echo esc_html($product->single_add_to_cart_text()); ?></button>
    <?php do_action('woocommerce_after_add_to_cart_button');?>
</form>

<?php if (get_field('notice_box')) {
    ?>
    <div class="notice_box">
        <p>
            <?php the_field('notice_box');?>
        </p>
        <?php
if (get_field('btn_link')) {
        ?>
            <a class="mj_add_to_cart_btn" href="<?php the_field('btn_link');?>">CLICK HERE</a>
        <?php
}?>
    </div>
<?php
}?>