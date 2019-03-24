<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav id="nav-drawer"></nav>
	<div id="wrapper">
		<nav id="tab-bar">
			<div class="container">
				<?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'tab-bar' ) ); ?>
			</div>
		</nav>
		<header id="header">
			<div class="container">
				<span><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></span>
			</div>
		</header>
		<main id="main">
			<?php if ( is_front_page() ) { ?>
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
			<?php } else { ?>
				<section id="page-showcase" style="background-image:url(<?php ( has_post_thumbnail() ) ? the_post_thumbnail_url() : header_image(); ?>)"></section>
			<?php } ?>
			<div class="container">
				<section id="page-content">
