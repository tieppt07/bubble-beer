<?php

if (! is_admin()) {
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

register_nav_menus();
