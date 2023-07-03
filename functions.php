<?php
	function sbonzix2023_scripts() {
			wp_enqueue_style( 'sbonzix2023-style', get_stylesheet_uri() );
			/*
			wp_enqueue_style( 'sbonzix2023-clean', get_template_directory_uri() . '/css/clean-blog.min.css' );
			wp_enqueue_style( 'sbonzix2023-bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
			wp_enqueue_style( 'sbonzix2023-fontawesome', get_template_directory_uri() . '/css/fa-all.min.css' );
			wp_enqueue_style( 'sbonzix2023-font1', "https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" );
			wp_enqueue_style( 'sbonzix2023-font2', "https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" );

			wp_enqueue_script( 'sbonzix2023-jq', get_template_directory_uri() . '/js/jquery.min.js');
			wp_enqueue_script( 'sbonzix2023-bootstrap', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
			wp_enqueue_script( 'sbonzix2023-clean', get_template_directory_uri() . '/js/clean-blog.min.js');
			*/
	}    

	add_action( 'wp_enqueue_scripts', 'sbonzix2023_scripts' );
?>