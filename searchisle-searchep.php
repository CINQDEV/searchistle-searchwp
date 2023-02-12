<?php
/*
Plugin Name: SearchWP Customizations
Description: Customizations for SearchWP
Version: 1.0.0
*/

// Add all hooks and custom code here.


// @link https://searchwp.com/documentation/multisite/
// Tell SearchWP to search the entire Multisite network when searching on the main site.
add_filter( 'searchwp\query\args', function( $args, $query ) {
	// If this is not site 1, bail out.
	if ( 1 !== get_current_blog_id() ) {
	  return $args;
	}

	// Search sites with ID 1, 2, 3.
	$args['site'] = [1,2,3,4,5,6,7];

	// Retain site info in results.
	$args['fields'] = 'default';

	return $args;
}, 10, 2 );
view raw