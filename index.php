<?php get_header(); ?>

	<section id="page-showcase" style="background-image:url(<?php header_image(); ?>)"></section>
	<div class="container">
		<section id="page-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<hr>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>

<?php get_footer(); ?>
