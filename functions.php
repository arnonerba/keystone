<?php

if ( ! function_exists( 'keystone_setup' ) ) {
	function keystone_setup() {
		/*
		Add support for general theme features.
		*/
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'post-thumbnails' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'customize-selective-refresh-widgets' );
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
			)
		);
		add_theme_support(
			'custom-header',
			array(
				'default-image'          => get_template_directory_uri() . '/images/buildings.png',
				'width'                  => 1600,
				'height'                 => 1200,
				'flex-width'             => true,
				'flex-height'            => true,
				'uploads'                => true,
				'random-default'         => false,
				'header-text'            => false,
				'default-text-color'     => '',
				'wp-head-callback'       => '',
				'admin-head-callback'    => '',
				'admin-preview-callback' => '',
				'video'                  => false,
				'video-active-callback'  => '',
			)
		);
		register_default_headers(
			array(
				'buildings' => array(
					'url'           => '%s/images/buildings.png',
					'thumbnail_url' => '%s/images/buildings.png',
					'description'   => __( 'Buildings', 'keystone' ),
				),
				'mountains' => array(
					'url'           => '%s/images/mountains.png',
					'thumbnail_url' => '%s/images/mountains.png',
					'description'   => __( 'Mountains', 'keystone' ),
				),
				'computers' => array(
					'url'           => '%s/images/computers.png',
					'thumbnail_url' => '%s/images/computers.png',
					'description'   => __( 'Computers', 'keystone' ),
				)
			)
		);
		/*
		Add support for editor styles.
		*/
		add_theme_support( 'editor-styles' );
		add_editor_style( 'style-editor.css' );
		add_editor_style( str_replace( ',', '%2C', 'https://fonts.googleapis.com/css?family=Roboto:400,700' ) );
		/*
		Add support for Gutenberg features.
		*/
		add_theme_support( 'align-wide' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'disable-custom-font-sizes' );
		add_theme_support( 'disable-custom-colors' );
	}
}
add_action( 'after_setup_theme', 'keystone_setup' );

function keystone_enqueue_scripts_styles() {
	/*
	Enqueue jQuery bundle and custom scripts.
	*/
	wp_deregister_script( 'jquery' );
	wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), array() , false, true );
	wp_enqueue_script( 'keystone-scripts', get_template_directory_uri() . '/scripts.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	/*
	Enqueue fonts from Google Fonts and default styles.
	*/
	wp_enqueue_style( 'google-fonts-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', array(), null );
	wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700', array(), null );
	wp_enqueue_style( 'keystone-style', get_stylesheet_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
	/*
	Enqueue styles for selected color scheme.
	*/
	$theme = keystone_sanitize_colorscheme( get_theme_mod( 'colorscheme' ) );
	wp_enqueue_style( 'keystone-' . $theme . '-style', get_template_directory_uri() . '/themes/' . $theme . '.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'keystone_enqueue_scripts_styles' );

function keystone_customize_register( $wp_customize ) {
	/*
	Add color scheme options in the Theme Customizer.
	*/
	$wp_customize->add_setting(
		'colorscheme',
		array(
			'default'           => 'light',
			'sanitize_callback' => 'keystone_sanitize_colorscheme',
		)
	);
	$wp_customize->add_control(
		'colorscheme',
		array(
			'section'  => 'colors',
			'label'    => __( 'Color Scheme', 'keystone' ),
			'type'     => 'radio',
			'choices'  => array(
				'light'  => __( 'Light', 'keystone' ),
				'dark'   => __( 'Dark', 'keystone' ),
			),
		)
	);
	/*
	Remove Additional CSS section from the Theme Customizer.
	*/
	$wp_customize->remove_section( 'custom_css' );
}
add_action( 'customize_register', 'keystone_customize_register' );

function keystone_sanitize_colorscheme( $input ) {
	$valid = array( 'light', 'dark' );

	if ( in_array( $input, $valid, true ) ) {
		return $input;
	}

	return 'light';
}
