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
				<h1>Welcome to <?php bloginfo( 'name' ); ?></h1>
				<hr>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
		</section>
	</div>

<?php get_footer(); ?>
