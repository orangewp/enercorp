<?php
defined('ABSPATH') || exit;
global $product;
?>
<div class="downloadTab">
    <ul class="list-group">
        <?php
if (get_field('product_summary')) {
    ?>
            <a target="_blank" href="<?php the_field('product_summary');?>">
                <li class="list-group-item"><i class="fa fa-bars"></i>&nbsp; Product Summary</li>
            </a>
        <?php
}
?>
        <?php
if (get_field('specs_manual')) {
    ?>
            <a target="_blank" href="<?php the_field('specs_manual');?>">
                <li class="list-group-item"><i class="fa fa-book"></i>&nbsp; Specs & Manual Sheet</li>
            </a>
        <?php
}
?>
        <?php
if (get_field('product_certificate')) {
    ?>
            <a target="_blank" href="<?php the_field('product_certificate');?>">
                <li class="list-group-item"><i class="fa fa-check-square"></i>&nbsp; Certificate</li>
            </a>
        <?php
}
?>
    </ul>
</div>