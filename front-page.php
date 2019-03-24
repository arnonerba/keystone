<?php get_header(); ?>

	<?php if ( is_home() ) {
		get_template_part( 'home' );
	} else {
		get_template_part( 'index' );
	} ?>

<?php get_footer(); ?>
