<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<hr>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<p class="post-date"><time datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time><?php if ( is_sticky() ) { ?><span class="sticky-post">Featured</span><?php } ?></p>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
		<?php } ?>
		<?php the_excerpt(); ?>
	</article>
<?php endwhile; else : ?>
	<hr>
	<p>No posts found.</p>
<?php endif; ?>

<?php the_posts_pagination(); ?>
