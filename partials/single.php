<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_single() ) { ?>
			<p class="post-date"><time datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time><?php if ( is_sticky() ) { ?><span class="sticky-post">Featured</span><?php } ?></p>
		<?php } ?>
		<h1><?php the_title(); ?></h1>
		<hr>
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
