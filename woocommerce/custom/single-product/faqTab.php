<?php
defined('ABSPATH') || exit;

?>
<div class="faqTab_form">
    <?php
if (the_field('faqTab')) {
    get_field('faqTab');
}
?>
</div>