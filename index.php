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

get_header();
?>

<section id="blog">
	<div class="row">
		<div class="large-12 columns">
			<!-- <h2>Recent Posts</h2> -->
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
						<!-- <a data-open="post-model" data-post-id="<?php echo get_the_ID(); ?>" class="load-modal"> -->
						<a href="<?php the_permalink(); ?>">
							<div class="post<?php if(get_post_format() == 'gallery') {echo " gallery";}?>" <?php
							$thumbnail = get_the_post_thumbnail_url();
							if(get_post_format() == 'gallery' && $thumbnail) {?>style="background-image: url('<?php echo $thumbnail; ?>');"<?php } ?>>
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

	<div class="row">
		<div class="columns large-3 large-offset-9">
			<?php the_posts_navigation(); ?>
		</div>
	</div>
	<?php endif; ?>

</section>

<!-- <section id="upcoming-events">
	<div class="row">
		<div class="large-12 columns">
			<h2>Upcoming Events</h2>

			<div class="events">
				<div class="event">

				</div>
			</div>
		</div>
	</div>


</section> -->

<!-- AJAX -->
<!-- <div class="full reveal" id="post-model" data-reveal>
	<div class="row">
		<div class="columns large-12">
			<h2 class="post-title"></h2>
			<div class="post-content"></div>

			<a href="" class="comment-link"><img src="<?php echo get_template_directory_uri(); ?>/img/comment.svg" alt="">Comment</a>
		</div>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div> -->


<?php
get_footer();
