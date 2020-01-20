<div class="col-4">
    <div class="blog-post">
        <a href="<?php the_permalink(); ?>">
            <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            } else {
                ?>
                <img src="https://placeholder.it/640x400" alt="">
            <?php
            }
            ?>
        </a>
        <a href="<?php the_permalink(); ?>">
            <h4><?php the_title() ?></h4>
        </a>
        <p><?php echo excerpt(50) ?></p>
        <span>
            <?php echo get_the_date(); ?></span>
    </div>
</div>