<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sidd
 */

get_header(); ?>

<section id="about">
	<div class="header_wrap">
		<div class="row">
			<div class="medium-4 large-4 medium-push-8 large-push-8 columns">
				<div class="image-logo-wrap">
					<img src="<?php echo get_template_directory_uri(); ?>/img/siddharthashok.jpg" alt="Siddharth Ashok"/>
					<div class="overlay"></div>
				</div>

				<h1 class="sidd"><span>Siddharth Ashok</span></h1>
			</div>

			<div class="medium-8 large-7 medium-pull-4 large-pull-5 columns">
				<h2>About</h2>
				<p>I'm Siddharth Ashok, I code and make stuff. Currently working with Indian-Swedish Web agency <a href="http://nextbigthing.in/" target="_blank">Next Big Thing Media</a> as Front-End and WordPress developer.</p>

				<p>I believe in staying curious, learning constantly, and never giving up. I enjoy creating performant interfaces and working on challenging projects.</p>

				<p>Born in Varanasi, I now live in the land of sun and sea - Goa. You can follow my story on <a href="https://www.instagram.com/siddharthashok/" target="_blank">Instagram</a>, <a href="https://twitter.com/siddharthashok" target="_blank">tweet me</a> or simply mail me at <a href="mailto:hello@sidd.in">hello@sidd.in</a>.</p>

			</div>


		</div>
	</div>
</section>

<section id="blog">
	<div class="row">
		<div class="large-12 columns">
			<h2>Blog</h2>
		</div>
	</div>


	<?php
	if ( have_posts() ) : ?>

	<div class="posts-wrap">
		<div class="row masonry">

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post(); ?>

					<div class="large-6 columns">
						<a data-open="post-model" data-post-id="<?php echo get_the_ID(); ?>" class="load-modal">
							<div class="post">
								<h3 class="post-title"><?php the_title(); ?></h3>
								<div class="excerpt">
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</a>
					</div>

					<?php
					endwhile;
					?>

		</div>
	</div>

	<?php
	the_posts_navigation();
	endif; ?>

</section>


<div class="full reveal" id="post-model" data-reveal>
	<div class="row">
		<div class="columns large-12">
			<h2 class="post-title"></h2>
			<div class="post-content"></div>
		</div>
	</div>

	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>


<?php
get_footer();
