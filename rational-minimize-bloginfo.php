<?php

// ===============================
// Reducing database calls
// http://jeremyhixon.com/sandbox/snippet/reducing-database-calls-using-bloginfo/
//
// Global variable used to reduce database queries on values commonly requested in themes.
// Use "global $bloginfo;" at the beginnng of any theme file and/or function to be able to access the values.
// ===============================
$bloginfo = array(
	'name'					=> get_bloginfo('name'),
	'description'			=> get_bloginfo('description'),
	'admin_email'			=> get_bloginfo('admin_email'),
	'wpurl'					=> get_bloginfo('wpurl'),
	'stylesheet_directory'	=> get_bloginfo('stylesheet_directory'),
	'stylesheet_url'		=> get_bloginfo('stylesheet_url'),
	'rss2_url'				=> get_bloginfo('rss2_url'),
	'charset'				=> get_bloginfo('charset'),
	'language'				=> get_bloginfo('language'),
	'text_direction'		=> get_bloginfo('text_direction')
);