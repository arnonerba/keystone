<?php get_header(); ?>

	<section id="home-showcase">
		<div class="flex-columns">
			<div class="flex-column left">
				<div class="flex-column-content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam aliquet tellus id massa molestie rutrum. Cras commodo risus eu accumsan interdum. Sed dapibus tortor quis odio maximus semper. Maecenas rhoncus diam vitae urna tempus, quis vulputate massa fermentum. Proin ultricies sapien nisl, eget pharetra leo bibendum consectetur.</p>
				</div>
			</div>
			<div class="flex-column right" style="background-image:url(<?php header_image(); ?>)"></div>
		</div>
	</section>
	<div class="container">
		<section id="page-content">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php if ( is_front_page() && is_home() ) { ?>
					<article <?php post_class(); ?>>
						<h1><?php the_title(); ?></h1>
						<hr>
						<p><time datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date(); ?></time> by <?php the_author_link(); ?></p>
						<?php the_content(); ?>
					</article>
				<?php } else { ?>
					<h1>Welcome to <?php bloginfo( 'name' ); ?></h1>
					<hr>
					<?php the_content(); ?>
				<?php } ?>
			<?php endwhile; endif; ?>
		</section>
	</div>

<?php get_footer(); ?>
