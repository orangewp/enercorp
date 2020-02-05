<?php
get_header();
?>
<div class="bluestrip"></div>
<div class="container">
    <div class="row">
        <div class="col single-post">
            <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div class="container"><div class="row"><div class="col"><p id="breadcrumbs">', '</p></div></div></div>');
}
if (have_posts()) {
    the_post();
    ?>
                <?php if (has_post_thumbnail()) {
        the_post_thumbnail();
    }?>
                <h1><?php
if (get_post_type() != 'product') {
        the_title();
    }?>
                </h1>
                <p><?php the_content();?>
                <?php
}
?>
        </div>
    </div>
</div>
<?php
get_footer();
?>