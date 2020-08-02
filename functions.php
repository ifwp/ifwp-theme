<?php

add_action('after_setup_theme', function(){
	add_theme_support('fl-theme-builder-headers');
	add_theme_support('fl-theme-builder-footers');
	add_theme_support('fl-theme-builder-parts');
});

// --------------------------------------------------

add_action('init', function(){
	register_nav_menu('ifwp-fake-menu', 'IFWP Fake Menu');
});

// --------------------------------------------------

add_action('ifwp_header', function(){
	if(class_exists('FLThemeBuilderLayoutRenderer')){
		FLThemeBuilderLayoutRenderer::render_header();
	}
});

// --------------------------------------------------

add_action('ifwp_footer', function(){
	if(class_exists('FLThemeBuilderLayoutRenderer')){
		FLThemeBuilderLayoutRenderer::render_footer();
	}
});

// --------------------------------------------------

add_filter('fl_theme_builder_part_hooks', function(){
	return [
		[
			'label' => 'Header',
			'hooks' => [
				'ifwp_before_header' => 'Before Header',
				'ifwp_after_header'  => 'After Header',
			],
		],
		[
			'label' => 'Footer',
			'hooks' => [
				'ifwp_before_footer' => 'Before Footer',
				'ifwp_after_footer'  => 'After Footer',
			],
		],
	];
});

// --------------------------------------------------

add_theme_support('post-thumbnails');
add_theme_support('title-tag');

// --------------------------------------------------

ifwp_build_update_checker('https://github.com/ifwp/ifwp-theme', __FILE__, 'ifwp-theme');
