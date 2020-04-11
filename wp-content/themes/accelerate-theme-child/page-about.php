<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

	<div id="primary" class="home-page hero-content">
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->
	</div><!-- #primary -->

	<!-- OUR SERVICES -->
	<section class="our-services">
		<div class="site-content">
			<h4><?php the_title(); ?></h4>
			<p><?php the_excerpt(); ?></p>
			<ul class="services-list">
			<?php query_posts('name=about'); ?>
		<!-- the loop -->
				<?php while ( have_posts() ) : the_post();
					$image_1 = get_field("image_1");
					$size = "full";
				?>
				<li class="individual-service">
					<figure>
						<?php echo wp_get_attachment_image($image_1, $size); ?>
					</figure>
						<h3><?php the_title(); ?></h3>
						<p><?php the_excerpt(); ?></p>
				</li>
				<?php endwhile; // end of the loop. ?>
				<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
		</div>
	</section>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
