<?php

function mbootswatch_wp_enqueue_scripts() {
	$data=get_file_data(get_stylesheet_directory()."/style.css",array(
		'Version' => 'Version'
	));

	$themeUri=get_stylesheet_directory_uri();

	wp_enqueue_style("mbootswatch-style",
		$themeUri."/res/mbootswatch.css",
		array(),$data["Version"]);
}

add_action("wp_enqueue_scripts","mbootswatch_wp_enqueue_scripts");

function mbootswatch_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Footer', 'bootswatch' ),
		'id' => 'footer',
		'before_widget' => '<aside id="%1$s" class="widget col-xs-3 clearfix %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widgettitle">',
		'after_title' => '</h3>',
	) );
}

add_action( 'widgets_init','mbootswatch_widgets_init',11);
