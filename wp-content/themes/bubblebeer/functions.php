<?php

add_theme_support( 'post-thumbnails' );

if (! is_admin()) {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

register_nav_menus();

function bb_pagination()
{
    global $wp_query;
    echo paginate_links();
}
