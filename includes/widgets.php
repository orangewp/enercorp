<?php

function mj_widgets() {
    register_sidebar([
        'name' => __('Footer 1', 'enercorp'),
        'id' => 'mj_footer_1',
        'description' => __('Footer Widget 1', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Footer 2', 'enercorp'),
        'id' => 'mj_footer_2',
        'description' => __('Footer Widget 2', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Footer 3', 'enercorp'),
        'id' => 'mj_footer_3',
        'description' => __('Footer Widget 3', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Footer 4', 'enercorp'),
        'id' => 'mj_footer_4',
        'description' => __('Footer Widget 4', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Footer 5', 'enercorp'),
        'id' => 'mj_footer_5',
        'description' => __('Footer Widget 5', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Shop Sidebar', 'enercorp'),
        'id' => 'mj_shop_sidebar',
        'description' => __('Shop Sidebar', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
    register_sidebar([
        'name' => __('Food Processing Sidebar', 'enercorp'),
        'id' => 'mj_food_sidebar',
        'description' => __('Food Processing Sidebar', 'enercorp'),
        'before_widget' => '<div id="%1$s" class="col %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h5>',
        'after_title' => '</h5>',
    ]);
}
?>