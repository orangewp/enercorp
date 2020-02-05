<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php wp_head()?>
    <title>Enercorp</title>
</head>
<body>
<div id="content">
 <div class="white-bg sticky-top">
 <section class="top-bar border-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                <form class="form-inline"  action="<?php echo get_home_url(); ?>/search?" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <label for="search" class="sr-only">Search Term</label>
    <input type="text" class="form-control" name='term' id="search" placeholder="Search Term">
  </div>
</form>
                </div>
                <div class="col-4 text-grey border-right">
                    <div class="row">
                        <div class="col text-sm">
                        <?php
if (get_theme_mod('mj_header_first_text')) {
    ?>
                            <p class="nopadding nomargin"><?php echo get_theme_mod('mj_header_first_text') ?></p>
                            <p class="nopadding nomargin">Local Telephone Number</p>
                            <?php
}
?>
                        </div>
                        <div class="col text-sm">
                        <?php
if (get_theme_mod('mj_header_second_text')) {
    ?>
                            <p class="nopadding nomargin"><?php echo get_theme_mod('mj_header_second_text') ?></p>
                            <p class="nopadding nomargin">Toll Free Number</p>
                            <?php
}
?>
                        </div>
                    </div>
                </div>
                <div class="col-2 border-right text-center signintab"><a href="<?php echo home_url('/') ?>my-account">Sign in | Create</a></div>
                <div class="col-2"> <i class="fas fa-shopping-cart"></i><a href="<?php echo home_url('/') ?>cart"> Cart</a></div>
            </div>
        </div>
    </section>
    <section class="menu ">
        <div class="container">
            <div class="row">
                <div class="col-2 align-items-center logo-image">
                <?php
if (has_custom_logo()) {
    the_custom_logo();
} else {
    ?>
                        <a href="<?php echo home_url('/') ?>" class="standard-logo"><?php bloginfo('name');?></a>
                   <?php }
?>
                </div>
                <div class="col-10 align-items-center">
                    <?php
if (has_nav_menu('primary')) {
    wp_nav_menu([
        'theme_location' => 'primary',
        'container' => false,
        'fallback_cb' => false,
        'depth' => 1,
    ]);
}
?>
                </div>
            </div>
        </div>
    </section>
 </div>