<?php
/*Desativando A API do Wordpress*/
add_filter ('rest_enabled', '_return_false');
add_filter ('rest_jsonp_enabled', '_return_false');
add_filter ( 'json_enabled', '__return_false');
add_filter ( 'json_jsonp_enabled', '__return_false');
remove_action('rest_api_init', 'create_initial_rest_routes', 99);

/*Desativando xmlrp*/
add_filter('xmlrpc_enabled', '__return_false'); 

/* Removing WP Version for security reaon */
remove_action('wp_head', 'wp_generator');
