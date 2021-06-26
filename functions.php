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