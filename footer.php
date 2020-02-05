<section class="footer">
        <div class="container">
            <div class="row">
                <?php
if (is_active_sidebar('mj_footer_1')) {
    dynamic_sidebar('mj_footer_1');
}
if (is_active_sidebar('mj_footer_2')) {
    dynamic_sidebar('mj_footer_2');
}
if (is_active_sidebar('mj_footer_3')) {
    dynamic_sidebar('mj_footer_3');
}
if (is_active_sidebar('mj_footer_4')) {
    dynamic_sidebar('mj_footer_4');
}
if (is_active_sidebar('mj_footer_5')) {
    dynamic_sidebar('mj_footer_5');
}
?>

            </div>
        </div>
    </section>
    <section class="footer-end">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 info">
				<p>
					Manufacturing custom instruments while providing
qualified service and technical support.
					</p>
				</div>
				<div class="col-md-8 col-sm-12">
					<p class="text-right">
						© 2019 ENERCORP All Rights Reserved | Terms & Conditions | Sitemap | Created by <a href="https://vkweb.eu"><img width=50 src="https://vkweb.eu/wp-content/uploads/2019/07/cropped-dark-1.png" alt=""></a>
					</p>
				</div>
            </div>
        </div>
    </section>
    <?php wp_footer();?>
</body>

</html>