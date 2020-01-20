<?php get_header()?>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col single-post contact-page">
            <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div class="container"><div class="row"><div class="col"><p id="breadcrumbs">', '</p></div></div></div>');
}
?>
  <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if (the_field('first_paragraph_text')) {
    the_field('first_paragraph_text');
}?>
            </div>
        </div>
        <div class="row padding-top-sm">
            <div class="col-sm-12 col-md-6 rfq_form contact-page-form">
                <?php echo do_shortcode('[contact-form-7 id="214" title="Contact Page Form"]'); ?>
            </div>
            <div class="col-sm-12 col-md-6 call-us-details">
<?php if (the_field('call_us_details')) {
    the_field('call_us_details');
}?>
            </div>
        </div>
        <div class="row padding-top-sm">
            <div class="col-12">
            <?php if (the_field('map')) {
    the_field('map');
}?>
            </div>
        </div>
    </div>
       </div>
    </div>
 </div>
    <?php get_footer()?>