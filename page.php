<?php
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col single-post">
            <?php
            if (have_posts()) {
                the_post();

                ?>
                <h1><?php the_title(); ?></h1>
                <p><?php the_content(); ?>
                <?php
                }
                ?>
        </div>
    </div>
</div>
<?php
get_footer();
?>