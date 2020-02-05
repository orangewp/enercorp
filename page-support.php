<?php get_header()?>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Support</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col single-post support-page">
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
            <div class="col-sm-12 col-md-6 ">
                <h3 class="col-title text-primary">Support Request</h3>
                <div class="rfq_form contact-page-form">
                <?php echo do_shortcode('[contact-form-7 id="920" title="Contact Page"]'); ?>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 faq-tabs">
            <h3 class="col-title ">FAQ</h3>
            <div class="accordion" id="accordionExample">
                <?php
$count = 0;
if (have_rows('faq')):

    // loop through the rows of data
    while (have_rows('faq')): the_row();
        ?>
																												  <div class="card">
																												    <div class="card-header" id="headingOne">
																												      <h2 class="mb-0">
																												        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $count ?>" aria-expanded="true" aria-controls="collapse<?php echo count ?>">
																												        <?php the_sub_field('question');?>
																												        </button>
																												      </h2>
																												    </div>

																												    <div id="collapse<?php echo $count ?>" class="collapse show" aria-labelledby="heading<?php echo $count ?>" data-parent="#accordionExample">
																												      <div class="card-body">
																												        <?php the_sub_field('answer');?>
																												      </div>
																												    </div>
																												  </div>
																												<?php
        // display a sub field value
        $count++;
    endwhile;
endif;

?>

</div>
<!-- dadsa -->

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