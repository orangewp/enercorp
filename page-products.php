<?php get_header()?>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Products</h1>
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
<style>
.product-card{
    background:#e9eff2 !important;
    border:1px solid #018ab9;
}
.product-card p{
    padding:10px;
}
.product-card .marker{
    content:"";
    display:block;
    width:50px;
    margin-left:10px;
    border-top:3px solid #018ab9;
}
.product-card h5{
    color:#018ab9;
    padding:20px 10px 00px 10px;
}
.product-card img{
width: 100%;
}
.padding-sm{
    padding:20px;
}
.spacer{
    margin-top:50px;
}
@media screen and (max-width:600px){
    .col-md-4{
    margin-bottom:30px;
}
}
</style>
<div class="container">
<div class="row padding-sm"><?php if (get_field('full_width_content')) {
    the_field('full_width_content');
}?>
    </div>
<div class="row">
<div class="col-md-4"><div class="product-card">
<img src="<?php if (get_field('col-1-img')) {
    the_field('col-1-img');
}?>" alt="">
<div class="marker"></div>
<h5><?php if (get_field('col-1-title')) {
    the_field('col-1-title');
}?></h5>
<p><?php if (get_field('col-1-description')) {
    the_field('col-1-description');
}?></p>
</div></div>
<div class="col-md-4"><div class="product-card">
<img src="<?php if (get_field('col-2-img')) {
    the_field('col-2-img');
}?>" alt="">
<div class="marker"></div>
<h5><?php if (get_field('col-2-title')) {
    the_field('col-2-title');
}?></h5>
<p><?php if (get_field('col-2-description')) {
    the_field('col-2-description');
}?></p>
</div></div>
<div class="col-md-4"><div class="product-card">
<img src="<?php if (get_field('col-3-img')) {
    the_field('col-3-img');
}?>" alt="">
<div class="marker"></div>
<h5><?php if (get_field('col-3-title')) {
    the_field('col-3-title');
}?></h5>
<p><?php if (get_field('col-3-description')) {
    the_field('col-3-description');
}?></p>
</div></div>
</div>

<div class="spacer"></div>
<div class="row justify-content-md-center">
<div class="col-md-4"><div class="product-card">
<img src="<?php if (get_field('col-4-img')) {
    the_field('col-4-img');
}?>" alt="">
<div class="marker"></div>
<h5><?php if (get_field('col-4-title')) {
    the_field('col-4-title');
}?></h5>
<p><?php if (get_field('col-4-description')) {
    the_field('col-4-description');
}?></p>
</div></div>
<div class="col-md-4"><div class="product-card">
<img src="<?php if (get_field('col-4-img')) {
    the_field('col-4-img');
}?>" alt="">
<div class="marker"></div>
<h5><?php if (get_field('col-4-title')) {
    the_field('col-4-title');
}?></h5>
<p><?php if (get_field('col-4-description')) {
    the_field('col-4-description');
}?></p>
</div></div>
</div>

<div class="spacer"></div>
</div>
       </div>
    </div>
 </div>
    <?php get_footer()?>