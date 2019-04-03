<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if ( is_single() ) { ?>
			<p class="post-date"><time datetime="<?php echo get_the_date( DATE_W3C ); ?>"><?php echo get_the_date(); ?></time><?php if ( is_sticky() ) { ?><span class="sticky-post">Featured</span><?php } ?></p>
		<?php } ?>
		<h1><?php the_title(); ?></h1>
		<hr>
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
		<?php if ( has_category() ) { ?>
			<h2>Categories:</h2>
			<?php echo get_the_category_list(); ?>
		<?php } ?>
		<?php if ( has_tag() ) { ?>
			<h2>Tags:</h2>
			<?php echo get_the_tag_list( '<p>', ', ', '</p>' ); ?>
		<?php } ?>
	</article>
	<?php comments_template(); ?>
<?php endwhile; endif; ?>
