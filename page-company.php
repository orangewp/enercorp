<?php get_header()?>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Company</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col single-post company-page">
            <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div class="container"><div class="row"><div class="col"><p id="breadcrumbs">', '</p></div></div></div>');
}
?>
  <div class="container">
<div class="row row-padding border-bottom-primary">
    <div class="col-sm-12 col-md-6">
    <img src="<?php the_field('row1_col1');?>" alt="">
    </div>
    <div class="col-sm-12 col-md-6"><?php the_field('row1_col2');?></div>
</div>
<div class="row row-padding border-bottom-primary">
    <div class="col-sm-12 col-md-6">
    <?php the_field('row2_col1');?>
    </div>
    <div class="col-sm-12 col-md-6">
        <img src="<?php the_field('row2_col2');?>" alt="">
</div>
</div>
<div class="row row-padding ">
    <div class="col-sm-12 col-md-6">  <?php the_field('row3_col1');?></div>
    <div class="col-sm-12 col-md-6">  <?php the_field('row3_col2');?></div>
</div>
    </div>
       </div>
    </div>
 </div>
    <?php get_footer()?>