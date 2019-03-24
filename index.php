<?php get_header(); ?>

	<?php
	/*
	Default homepage (set to display latest posts).
	*/
	if ( is_front_page() && is_home() ) { ?>
		<h1>Recent Posts</h1>
		<?php get_template_part( 'templates/blogroll' ); ?>
	<?php
	/*
	Static homepage.
	*/
	} elseif ( is_front_page() ) { ?>
		<?php get_template_part( 'templates/single' ); ?>
	<?php
	/*
	Separate blog page for when homepage is static.
	*/
	} elseif ( is_home() ) { ?>
		<h1><?php single_post_title(); ?></h1>
		<?php get_template_part( 'templates/blogroll' ); ?>
	<?php
	/*
	Author, Category, Tag, Date, other Taxonomy Term, or custom post type archive.
	*/
	} elseif ( is_archive() ) { ?>
		<h1><?php the_archive_title(); ?></h1>
		<?php get_template_part( 'templates/blogroll' ); ?>
	<?php
	/*
	Search results page.
	*/
	} elseif ( is_search() ) { ?>
		<h1>Search Results for "<?php the_search_query(); ?>"</h1>
		<?php get_template_part( 'templates/blogroll' ); ?>
	<?php
	/*
	Anything else, including single pages and posts.
	*/
	} else { ?>
		<?php get_template_part( 'templates/single' ); ?>
	<?php } ?>

<?php get_footer(); ?>
