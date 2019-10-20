<?php get_header(); ?>

	<?php
	/*
	Default homepage (set to display latest posts).
	*/
	if ( is_front_page() && is_home() ) { ?>
		<h1>Recent Posts</h1>
		<?php get_template_part( 'partials/blogroll' ); ?>
	<?php
	/*
	Static homepage.
	*/
	} elseif ( is_front_page() ) { ?>
		<?php get_template_part( 'partials/single' ); ?>
	<?php
	/*
	Separate blog page for when homepage is static.
	*/
	} elseif ( is_home() ) { ?>
		<h1><?php single_post_title(); ?></h1>
		<?php get_template_part( 'partials/blogroll' ); ?>
	<?php
	/*
	Author, Category, Tag, Date, other taxonomy term, or custom post type archive.
	*/
	} elseif ( is_archive() ) { ?>
		<h1><?php the_archive_title(); ?></h1>
		<p><em><?php the_archive_description(); ?></em></p>
		<?php get_template_part( 'partials/blogroll' ); ?>
	<?php
	/*
	Search results page.
	*/
	} elseif ( is_search() ) { ?>
		<h1>Search Results for "<?php the_search_query(); ?>"</h1>
		<?php get_search_form(); ?>
		<?php get_template_part( 'partials/blogroll' ); ?>
	<?php
	/*
	Anything else, including single pages and posts.
	*/
	} else { ?>
		<?php get_template_part( 'partials/single' ); ?>
	<?php } ?>

<?php get_footer(); ?>
