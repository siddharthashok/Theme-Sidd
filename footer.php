<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sidd
 */

?>

<footer>
<svg class="slant white" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 102" preserveAspectRatio="none">
	<path d="M0 0 L100 100 L100 0 Z"></path>
</svg>

<div class="row">
	<div class="columns medium-5 medium-centered center">
		<a href="<?php echo site_url(); ?>">
		<div class="image-logo-wrap"></div>
		<h4 class="">Siddharth Ashok</h4>
		</a>

		<div class="social-links">
			<p class="follow-me">Follow me @siddharthashok</p>
			<div class="social github">
				<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="1" title="Follow me on GitHub">
					<a href="https://github.com/siddharthashok" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_github.svg" alt=""></a>
				</span>
			</div>
			<div class="social instagram">
				<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="2" title="Follow my story on Instagram">
					<a href="https://www.instagram.com/siddharthashok/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_instagram.svg" alt=""></a>
				</span>
			</div>
			<div class="social twitter">
				<span data-tooltip aria-haspopup="true" class="has-tip" data-disable-hover="false" tabindex="3" title="Follow me on Twitter">
					<a href="https://twitter.com/siddharthashok" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_twitter.svg" alt="Siddharth Ashok's Twitter"></a>
				</span>
			</div>
		</div>
	</div>
	<div class="columns medium-offset-3 medium-4">

	</div>
	<div class="columns medium-8 medium-centered center">
		<div class="about-the-site">
			<p>This site is powered by WordPress, uses custom theme build on Foundation framework.</p>
			<p>The content of this site by Siddharth Ashok, is licensed under <a href="http://creativecommons.org/licenses/by-sa/4.0/" target="_blank">Creative Commons Attribution-ShareAlike 4.0 International License</a>. Supporting humanity with "<a href="http://freedomdefined.org/Definition" target="_blank">Free Cultural Works</a>".</p>
		</div>

		<!-- <p>Feel free to mail me <a href="">hello@sidd.in</a></p> -->


		<ul class="footer-navigation">
			<li><a href="#">About</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="mailto:hello@sidd.in">Contact</a></li>
		</ul>

	</div>
</div>
</footer>
<?php wp_footer(); ?>

<script type="text/javascript">
	var siteUrl = '<?php echo site_url(); ?>';
	var siteTitle = '<?php bloginfo( 'name' ); ?>';

</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/what-input.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/instafeed.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/foundation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/app.js"></script>

<!-- Google analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-87484936-1', 'auto');
	ga('send', 'pageview');

</script>
</body>
</html>
