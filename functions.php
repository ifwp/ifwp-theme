<?php

 // --------------------------------------------------

	add_action('after_setup_theme', function(){
		add_theme_support('fl-theme-builder-headers');
		add_theme_support('fl-theme-builder-footers');
		add_theme_support('fl-theme-builder-parts');
	});

 // --------------------------------------------------

	add_action('init', function(){
		register_nav_menu('vidsoe-fake-menu', 'Vidsoe Fake Menu');
	});

 // --------------------------------------------------

	add_action('vidsoe_header', function(){
		if(class_exists('FLThemeBuilderLayoutRenderer')){
			FLThemeBuilderLayoutRenderer::render_header();
		}
	});

 // --------------------------------------------------

	add_action('vidsoe_footer', function(){
		if(class_exists('FLThemeBuilderLayoutRenderer')){
			FLThemeBuilderLayoutRenderer::render_footer();
		}
	});

 // --------------------------------------------------

	add_action('wp_enqueue_scripts', function(){
		wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', [], '4.5.0');
		wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js', ['jquery'], '4.5.0', true);
		wp_enqueue_script('bs-custom-file-input', 'https://cdn.jsdelivr.net/npm/bs-custom-file-input@1.3.4/dist/bs-custom-file-input.min.js', ['jquery'], '1.3.4', true);
		wp_add_inline_script('bs-custom-file-input', 'jQuery(function($){ bsCustomFileInput.init(); });');
	});

 // --------------------------------------------------

	add_filter('fl_theme_builder_part_hooks', function(){
		return [
			[
				'label' => 'Header',
				'hooks' => [
					'vidsoe_before_header' => 'Before Header',
					'vidsoe_after_header'  => 'After Header',
				],
			],
			[
				'label' => 'Footer',
				'hooks' => [
					'vidsoe_before_footer' => 'Before Footer',
					'vidsoe_after_footer'  => 'After Footer',
				],
			],
		];
	});

 // --------------------------------------------------

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');

 // --------------------------------------------------
