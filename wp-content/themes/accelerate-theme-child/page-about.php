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
			<?php while ( have_posts() ) : the_post();
				$header_title = get_field("header_title");
				$intro_text = get_field("intro_text");
			?>
				<h4 class="about-title"><?php echo get_field("header_title"); ?></h4>
				<p class="about-intro"><?php echo get_field("intro_text"); ?></p>
			<?php endwhile; // end of the loop. ?>
			<ul class="about-services">
			<?php query_posts('post_type=about_services'); ?>
		<!-- the loop -->
				<?php while ( have_posts() ) : the_post();
					$image = get_field("image");
					$size = "full";
				?>
				<li class="individual-service">
					<figure>
						<?php echo wp_get_attachment_image($image, $size); ?>
					</figure>
					<div class="services-list">
						<h3><?php the_title(); ?></h3>
						<?php the_content(); ?>
					</div>
				</li>
			<?php endwhile; // end of the loop. ?>
			<?php wp_reset_query(); // resets the altered query back to the original ?>
			</ul>
			<hr>
			<h2><?php echo get_field("contact_text"); ?></h2>
			<a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
		</div>
	</section>

<?php get_footer(); ?>