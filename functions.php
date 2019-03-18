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
				'width'                  => 0,
				'height'                 => 0,
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
	wp_enqueue_script( 'jquery', includes_url( '/js/jquery/jquery.js' ), '' , false, true );
	wp_enqueue_script( 'keystone-scripts', get_template_directory_uri() . '/scripts.js', array( 'jquery' ), wp_get_theme()->get( 'Version' ), true );
	/*
	Enqueue fonts from Google Fonts and default styles.
	*/
	wp_enqueue_style( 'google-fonts-material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons', '', null );
	wp_enqueue_style( 'google-fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700', '', null );
	wp_enqueue_style( 'keystone-style', get_stylesheet_directory_uri() . '/style.css', '', wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'keystone_enqueue_scripts_styles' );
