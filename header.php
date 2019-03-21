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
			</div>
		</nav>
		<header id="header">
			<div class="container">
				<span><a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a></span>
			</div>
		</header>
		<main id="main">
