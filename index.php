<?php get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php if ( is_single() ) { ?>
				<time class="post-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
			<?php } ?>
			<h1><?php the_title(); ?></h1>
			<hr>
			<?php the_content(); ?>
		</div>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>
