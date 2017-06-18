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
	<div class="columns medium-4">
		<div class="image-logo-wrap"></div>
		<h4 class="">Siddharth Ashok</h4>
		<p>Feel free to mail me <a href="mailto:hello@sidd.in">hello@sidd.in</a></p>

	</div>
	<div class="columns medium-offset-4 medium-4">
		<p class="follow-me">Follow Me</p>
		<div class="social github"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_github.svg" alt=""></a></div>
		<div class="social instagram"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_instagram.svg" alt=""></a></div>
		<div class="social twitter"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/footer_twitter.svg" alt="Siddharth Ashok's Twitter"></a></div>
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
