<?php get_header()?>
<style>
ul{
    padding:0;
}
.product-list li{
    list-style:none;
    padding:25px 15px;
    border:1px solid #ececec;
    border-radius:5px;
    margin-bottom:20px;
}
.product-list li h3{
    font-size:30px;
    color:black;
    font-weight:bold;
}
.product-list .product-details li{
    padding:10px;
    border:1px solid #ececec;
    margin-bottom:5px;
}
.product-details{
    margin-top:20px;
}
.product-list √ li i{
    padding-right:10px;
}
.product-list .product-details li:hover{
    background:#ececec;
}
.product-list .product-details a{
    color:black;
    font-size:20px;

}
.navigators{
    text-align:center;
}
.navigators a{
    padding:8px;
    margin:5px;
}
.product-list .product-details a:hover{
    text-decoration:none;
}
.product-card img{
    width:200px !important;
    height:auto;
    margin:0 !important;
}
.search-form{
    margin-bottom:30px;
}
@media screen and (min-width:700px){
    .search-form input[type='text']{
width:600px;
}
}
</style>
<div class="bluestrip">
    <div class="container">
        <div class="row">
            <div class="col-12">
            <h1>Search</h1>
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

<div class="container search-form">
<div class="row">
<div class="col-md-12">

<form class="form-inline"  action="<?php echo get_home_url(); ?>/search?" method="GET">
  <div class="form-group mx-sm-3 mb-2">
    <label for="search" class="sr-only">Search Term</label>
    <input type="text" class="form-control" name='term' id="search" placeholder="Search Term">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Search</button>
</form>
</div></div></div>
<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$params = array('posts_per_page' => 8, 'paged' => $paged);
if (isset($_GET['term'])) {
    if ($_GET['term'] != null) {
        $params = array('posts_per_page' => 8, 's' => $_GET['term'], 'paged' => $paged);
        ?>
        <div class="container">
        <div class="row">
        <div class="col">
        <h5>Search Result for <?php echo $_GET['term']; ?></h5>
        </div>
        </div>
        </div>
        <?php
} else {
        $params = array('posts_per_page' => 8, 'paged' => $paged);

    }
}
$wc_query = new WP_Query($params);
?>
<div class="container">
<ul class='product-list'>
     <?php if ($wc_query->have_posts()): ?>
     <?php while ($wc_query->have_posts()):
    $wc_query->the_post();?>
																																																																																																																													    <li>
																																																																																																																													    <div class="row product-card">
																																																																																																																													    <div class="col-md-5">
																																																																																																																													    <a href="<?php the_permalink();?>">
																																																																																																																													    <?php the_post_thumbnail();?>
																																																																																																																													    </a>
																																																																																																																													    </div>
																																																																																																																												        <div class="col-md-7"> <a href="<?php the_permalink();?>">
																																																																																																																															              <h3> <?php the_title();?></h3>
																																																																																																																															               </a>
																																																																																																																															          </h3>
																																																																																																																											                          <?php the_excerpt();?>
																																											<h3>

																																											</div>
																																											</div>
																																											</li>

																																											<?php endwhile;?>
                                                                                                                    <div class="navigators">
<?php previous_posts_link(' Previous');
next_posts_link(' Next', $wc_query->max_num_pages)?>
</div>
     <?php wp_reset_postdata();?>

     <?php else: ?>
     <li>
          <?php _e('No Products');?>
     </li>

     <?php endif;?>
</ul>
</div>
       </div>
    </div>
 </div>
    <?php get_footer()?>