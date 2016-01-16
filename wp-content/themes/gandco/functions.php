<?php 
	
	
	update_option('siteurl','localhost:8888/gandco');
	update_option('home','localhost:8888/gandco');
	
	function theme_name_scripts() {
		wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	}
	
	add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
	
	function register_my_menu() {
		register_nav_menu('header-menu',__( 'Main Navigation' ));
	}
	add_action( 'init', 'register_my_menu' );

	show_admin_bar( false );
	
	?>