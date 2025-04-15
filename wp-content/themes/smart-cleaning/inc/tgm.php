<?php

require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

function smart_cleaning_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Magnify – Suggestive Search', 'smart-cleaning' ),
			'slug'             => 'magnify-suggestive-search',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'smart_cleaning_register_recommended_plugins' );