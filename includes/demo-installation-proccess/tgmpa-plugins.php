<?php

include_once  ELEMAKER_DIR  . '/includes/demo-installation-proccess/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'mytheme_require_plugins' );
function mytheme_require_plugins() {
   
	$plugins = array(
		array(
			'name'      => 'Elementor',
			'slug'      => 'elementor',
			'required'  => true, // this plugin is recommended 
		),
		array(
			'name'      => 'ElementsKit',
			'slug'      => 'elementskit-lite',
			'required'  => true, // this plugin is recommended 
		),
		array(
			'name'      => 'One click dmeo import',
			'slug'      => 'one-click-demo-import',
			'required'  => true, // this plugin is recommended 
		)
	);
    $config = array( /* The array to configure TGM Plugin Activation */ );
    tgmpa( $plugins, $config );
}