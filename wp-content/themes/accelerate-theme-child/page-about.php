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

	<div id="primary" class="site-content">
		<div class="main-content" role="main">
	<?php while ( have_posts() ) : the_post();
			$image_1 = get_field("image_1");
			$size = "full";
			$services = get_field('services');
			$description = get_field('description') ?>

		<article class="our-services clearfix">
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			<div class="services-list">
				<h4><?php echo $services; ?></h4>
				<p><?php echo $description; ?></p>
				<?php if($image_1) {
					echo wp_get_attachment_image( $image_1, $size );
				} ?>
			</div>
		</article>
	<?php endwhile; // end of the loop. ?>

		</div><!-- .main-content -->
	</div><!-- #primary -->

<?php get_footer(); ?>
