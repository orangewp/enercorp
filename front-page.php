<?php get_header()?>
    <section class="homepage-banner">
        <div class="container">
            <div class="row">
                <div class="col">
                <div id="carouselExampleControls" class=" carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <?php
$count = 0;
if (have_rows('header-banner')):
    while (have_rows('header-banner')): the_row();
        $count++;
        ?>
																		                        <div class="carousel-item  <?php if ($count == 1) {echo 'active';}?>">
																		                            <div class="row align-items-center">
																		                            <div class="col-md-8 col-sm-12"> <h2><?php the_sub_field('banner-title');?></h2></div>
																		                            <div class="col-md-4 col-sm-12">
																		                            <img src="<?php the_sub_field('banner-items');?>">
																		                            </div>
																		                            </div>
																		                        </div>
																		                        <?php
    endwhile;
else:
endif;
?>
                              </div>
                </div>
            </div>
        </div>
    </section>
    <section class="categories">
        <div class="container">
            <div class="row spacer">
                <div class="col">
                    <h3><?php the_field('category_section_title');?></h3>
                </div>
            </div>
            <div class="row">
            <?php

// check if the repeater field has rows of data
if (have_rows('category_items')):

    // loop through the rows of data
    while (have_rows('category_items')): the_row();
        ?>

																		<div class="col text-center">		<a href="<?php the_sub_field('category_link');?>">
																		                    <p><?php the_sub_field('category_name');?></p>
																		                    <img src="<?php the_sub_field('category_image');?>" alt="<?php the_sub_field('category_name');?>">
														                                    </a>
														                                </div>

																		<?php
        // display a sub field value

    endwhile;

else:

    // no rows found

endif;

?>
            </div>
        </div>
    </section>
    <section class="industry-solutions">
        <div class="container">
            <div class="row spacer">
                <div class="col">
                    <h3><?php the_field('industry_section_title');?></h3>
                </div>
            </div>
            <div class="row">
            <?php

// check if the repeater field has rows of data
if (have_rows('industry_item')):
    // loop through the rows of data
    while (have_rows('industry_item')): the_row();
        ?>
																		  <div class="col-md-3 col-sm-6 margin-bottom-20">
																		                  <a href="<?php the_sub_field('link');?>">
												                                          <div class="box">
																		                        <p class='uppercase text-center bold'><?php the_sub_field('title');?></p>
																		                        <img src="<?php the_sub_field('image');?>" alt="<?php the_sub_field('title');?>">
																		                    </div>
												                                          </a>
																		                </div>
																		<?php
    endwhile;
else:
endif;
?>
            </div>
        </div>
    </section>
    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-7"></div>
                <div class="col-5">
                    <h3><?php the_field('about-title')?></h3>
                    <p><?php the_field('about-content')?></p>
                    <a href="<?php the_field('about-btn-link');?>">Read More About Company</a>
                </div>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <h4><?php the_field('blog_title');?></h4>
                    <p><?php the_field('blog-content');?></p>
                    <a href="/blog" class="btn-outline fullwidth">ALL NEWS</a>
                </div>
                <div class="col-9">
                        <h4 class="heading">Latest Article</h4>
                    <div class="row">
                       <?php

$args = array(
    'posts_per_page' => 3,
    'post_type' => 'post', //choose post type here
    'order' => 'DESC',
);
// query
$the_query = new WP_Query($args);

if ($the_query->have_posts()):
    while ($the_query->have_posts()): $the_query->the_post();
        get_template_part('partials/posts/content', 'excerpt');
    endwhile;
else:

endif;
?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <?php get_footer()?>