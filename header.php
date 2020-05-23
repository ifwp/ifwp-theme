<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php
		if(is_singular() and get_option('thread_comments')){
			wp_enqueue_script('comment-reply');
		}
		wp_head(); ?>
    </head>
    <body <?php body_class(); ?>><?php
		do_action('vidsoe_before_header');
		do_action('vidsoe_header');
		do_action('vidsoe_after_header');
