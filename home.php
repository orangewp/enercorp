<?php
get_header();
?>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Our Blog</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
<?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('<div class="container"><div class="row"><div class="col"><p id="breadcrumbs">', '</p></div></div></div>');
}
?>
<div class="row">
<div class="col blog-page-description">
    <?php
the_field('description', 38);
?>
</div>
</div>
    <div class="row">
        <div class="col-md-10">
        <article>
<?php // Display blog posts on any page @ https://m0n.co/l
$temp = $wp_query;
$wp_query = null;
$wp_query = new WP_Query();
$wp_query->query('posts_per_page=5' . '&paged=' . $paged);
while ($wp_query->have_posts()): $wp_query->the_post();?>
																			 <div class="blog-post-item">
																																		<div class="row">
																													                    <div class="col-md-3">
																													                    <a href="<?php the_permalink();?>" title="Read more"><img width=200 src="<?php the_post_thumbnail_url()?>" alt=""></a>
																													                    </div>
																													                    <div class="col-md-8">

																																	    <a href="<?php the_permalink();?>" title="Read more"><h2><?php the_title();?></h2></a>
																																		<?php the_excerpt();?>
																																	    </div>
																											                            </div>
																													                    </div>
																																		<?php endwhile;?>

<?php if ($paged > 1) {?>

<nav id="nav-posts">
    <div class="prev"><?php next_posts_link('&laquo; Previous Posts');?></div>
    <div class="next"><?php previous_posts_link('Newer Posts &raquo;');?></div>
</nav>

<?php } else {?>

<nav id="nav-posts">
    <div class="prev"><?php next_posts_link('&laquo; Previous Posts');?></div>
</nav>

<?php }?>

<?php wp_reset_postdata();?>

</article>
        </div>
        <div class="col-md-2">
        <?php dynamic_sidebar('mj_blog_sidebar');?>
        </div>
    </div>
</div>
<?php
get_footer();
?>