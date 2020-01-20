<?php
/*
Template Name: RTD
Template Post Type: product,page
 */

get_header();
defined('ABSPATH') || exit;

global $product;
$heading = apply_filters('woocommerce_product_description_heading', __('Description', 'woocommerce'));

do_action('woocommerce_before_single_product');

if (post_password_required()) {
    echo get_the_password_form(); // WPCS: XSS ok.
    return;
}
?>
<div class="bluestrip"></div>
<div class="container-fluid">
    <div class="row">
        <div class="col single-post">
            <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div class="container"><div class="row"><div class="col"><p id="breadcrumbs">', '</p></div></div></div>');
}
?>
            <div class="woocommerce">
                <div id="product-<?php the_ID();?>" <?php wc_product_class('', $product);?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4"><?php
/**
 * Hook: woocommerce_before_single_product_summary.
 *
 * @hooked woocommerce_show_product_sale_flash - 10
 * @hooked woocommerce_show_product_images - 20
 */
do_action('woocommerce_before_single_product_summary');
?></div>
                            <div class="col-md-5">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="info-tab" data-toggle="tab" href="#information" role="tab" aria-controls="home" aria-selected="true">Information</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="profile" aria-selected="false">Download</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="RFQ-tab" data-toggle="tab" href="#RFQ" role="tab" aria-controls="contact" aria-selected="false">RFQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tab" data-toggle="tab" href="#customtab" role="tab" aria-controls="contact" aria-selected="false">FAQ</a>
                                    </li>
                                </ul>
                                <div class="tab-content border" id="myTabContent">
                                    <div class="tab-pane fade show active" id="information" role="tabpanel" aria-labelledby="info-tab">
                                        <?php
the_content();
do_action('mj_woocommerce_product_meta');
?></div>
                                    <div class="tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                                        <?php
wc_get_template('/custom/single-product/downloadTab.php');
?></div>
                                    <div class="tab-pane fade" id="RFQ" role="tabpanel" aria-labelledby="RFQ-tab">
                                        <?php
wc_get_template('/custom/single-product/rfq.php');
?>
                                    </div>
                                    <div class="tab-pane fade" id="customtab" role="tabpanel" aria-labelledby="customtab">
                                        <?php
wc_get_template('/custom/single-product/faqTab.php');
?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                          <?php
wc_get_template('/custom/single-product/rtd/add-to-cart-variable.php');
?>
<div class="customization-box">
                             <h5>Need any other customizations?</h5>
                             <a href="#" class="btn rounded">
                                 CUSTOM ORDER
                             </a>
                            </div>
                            </div>

                        </div>
                    </div>


                    <?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action('mj_woocommerce_after_single_product_summary');
?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php do_action('woocommerce_after_single_product');
get_footer()?>