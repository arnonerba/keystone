<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<nav id="nav-drawer">
		<header id="nav-drawer-header">
			<span>Menu</span>
		</header>
		<hr>
		<?php wp_nav_menu( array( 'container' => false, 'depth' => 1, 'theme_location' => 'main-menu' ) ); ?>
	</nav>
	<div id="wrapper">
		<nav id="tab-bar">
			<button class="button icon-button material-icons toggle-nav">menu</button>
			<div class="container">
				<?php wp_nav_menu( array( 'container' => false, 'depth' => 1, 'theme_location' => 'main-menu' ) ); ?>
			</div>
		</nav>
		<header id="header">
			<div class="container">
				<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
			</div>
		</header>
		<main id="main">
			<?php if ( is_front_page() ) { ?>
				<section id="home-showcase">
					<div class="flex-columns">
						<div class="flex-column left">
							<div class="flex-column-content">
								<?php if ( is_active_sidebar( 'sidebar-1' ) ) {
									dynamic_sidebar( 'sidebar-1' );
								} else {
									keystone_default_homepage_widget();
								} ?>
							</div>
						</div>
						<div class="flex-column right" style="background-image:url(<?php header_image(); ?>)"></div>
					</div>
				</section>
			<?php } else { ?>
				<section id="page-showcase" style="background-image:url(<?php ( has_post_thumbnail() && ( is_single() || is_page() ) ) ? the_post_thumbnail_url() : header_image(); ?>)"></section>
			<?php } ?>
			<div class="container">
				<section id="page-content">
