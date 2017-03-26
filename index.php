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

	<div class="posts-wrap">
		<div class="row masonry">
			<div class="large-6 columns">
				<a data-open="post-model" data-post-id="1782" class="load-modal">
					<div class="post">
						<h3 clas="post-title">Why I like foundation by Zurb over bootstrap</h3>
						<div class="excerpt">
							<p>Creating performant interfaces and working on challenging projects. I enjoy creating performant interfaces and working on challenging projects.</p>
						</div>
					</div>
				</a>

			</div>

			<div class="large-6 columns">
				<a data-open="post-model" data-post-id="1158" class="load-modal">
					<div class="post">
						<h3 clas="post-title">In every role he is happy and content</h3>
						<div class="excerpt">
							 <p>He is a gifted photographer too. Some of his photographs can be seen in gallery section of this website. In every role he is happy and content, because like a true Buddhist he lives the ideals of compassion, love and brotherhood.</p>
						</div>
					</div>
				</a>
			</div>



			<div class="large-6 columns">
				<a data-open="post-model" data-post-id="1031" class="load-modal">
					<div class="post">
						<h3 clas="post-title">In every role he is happy and content</h3>
						<div class="excerpt">
							 <p>
								 Cupcake ipsum dolor sit amet chocolate bar. Bear claw candy canes cake pudding ice cream I love dragée oat cake. Applicake pie halvah. Sesame snaps cupcake ice cream I love I love cookie I love. Soufflé jelly-o donut cupcake. I love pastry marshmallow marzipan applicake I love carrot cake. Oat cake icing oat cake. Toffee gummi bears dragée I love toffee I love icing I love brownie. Toffee biscuit gummi bears jelly beans pie.
							 </p>
						</div>
					</div>
				</a>
			</div>

			<div class="large-6 columns">
				<div class="post">
					<h3 clas="post-title">In every role he is happy and content</h3>
					<div class="excerpt">
						 <p>
							 Lemon drops jelly candy I love chupa chups I love. Tootsie roll sweet gummies. Chocolate cookie lollipop gummi bears wafer candy canes. Gummi bears dessert cupcake. Tart powder jelly beans pie. Applicake I love croissant.
						</p>
					</div>
				</div>
			</div>

			<div class="large-6 columns">
				<div class="post">
					<h3 clas="post-title">In every role he is happy and content</h3>
					<div class="excerpt">
						<p>
							Topping cookie powder powder cake. Wafer gingerbread applicake sweet cake ice cream soufflé sweet. Icing sugar plum oat cake toffee icing. I love candy canes I love dessert sweet cotton candy gummies. Wafer powder chocolate marshmallow I love tootsie roll I love macaroon. Fruitcake apple pie ice cream carrot cake jelly wypas.
						</p>
					</div>
				</div>
			</div>

			<div class="large-6 columns">
				<div class="post">
					<h3 clas="post-title">In every role he is happy and content</h3>
					<div class="excerpt">
						<p>
							I love icing wafer I love. Bonbon dessert cotton candy dessert pie brownie cupcake croissant sweet roll. Cake jelly beans tart marshmallow wafer. Dragée chupa chups bear claw I love cupcake danish. I love gingerbread soufflé faworki muffin I love pudding gingerbread I love. Donut tootsie roll chocolate cotton candy pastry marshmallow brownie cotton candy. Marshmallow cookie wafer chocolate cake.
						</p>
					</div>
				</div>
			</div>


		</div>
	</div>

</section>


<div class="full reveal" id="post-model" data-reveal>
	<div class="row">
		<div class="columns large-12">
			<div class="post-content">

			</div>
		</div>
	</div>

	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>


<?php
get_footer();
