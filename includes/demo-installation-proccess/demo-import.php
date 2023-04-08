<?php


function ocdi_import_files() {
	return [
	  [
		'import_file_name'             => 'Demo Import 1',
		'categories'                   => [ 'Category 1', 'Category 2' ],
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/demo-data/main.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/demo-data/main.json',
		'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'assets/demo-data/main.dat',
		
		'import_preview_image_url'     => ELEMAKER_URI.'/assets/images/demo1.png',
		'preview_url'                  => 'http://thesharif.dev',
	  ],
	  [
		'import_file_name'             => 'Demo Import 2',
		'categories'                   => [ 'New category', 'Old category' ],
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'ocdi/demo-content2.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'ocdi/widgets2.json',
		'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'ocdi/customizer2.dat',
		'local_import_redux'           => [
		  [
			'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux.json',
			'option_name' => 'redux_option_name',
		  ],
		  [
			'file_path'   => trailingslashit( get_template_directory() ) . 'ocdi/redux2.json',
			'option_name' => 'redux_option_name_2',
		  ],
		],
		'import_preview_image_url'     => 'http://www.your_domain.com/ocdi/preview_import_image2.jpg',
		'preview_url'                  => 'http://www.your_domain.com/my-demo-2',
	  ],
	];
  }
  add_filter( 'ocdi/import_files', 'ocdi_import_files' );
