<?php

	get_header();
	if(have_posts()){
		while(have_posts()){
			the_post();
			if(class_exists('FLBuilderModel')){
				if(FLBuilderModel::is_builder_enabled()){
					the_content();
				} else {
					// Silence is golden.
				}
			} else {
				// Silence is golden.
			}
		}
	}
	get_footer();
