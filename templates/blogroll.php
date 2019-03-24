<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<hr>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<time class="post-date" datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php if ( has_post_thumbnail() ) { ?>
			<figure class="post-thumbnail"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
		<?php } ?>
		<?php the_content(); ?>
	</div>
<?php endwhile; endif; ?>
