<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});

// New Menu for history and resources pages
  add_action( 'init', function() {
    register_nav_menu('history-menu',__( 'History Pages' ));
    register_nav_menu('resources-menu',__( 'Resources Pages' ));
  } );

add_action('acf/init', function () {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'Photo Carousel',
			'title'				=> __('Carousel'),
			'description'		=> __('A carousel of photographs.'),
			'render_callback'	=> 'carousel_render_callback',
			'category'			=> 'layout',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'carousel', 'photo' ),
		));
	}
});

function carousel_render_callback( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);
	
	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/partials/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/partials/block/content-{$slug}.php") );
	}
}