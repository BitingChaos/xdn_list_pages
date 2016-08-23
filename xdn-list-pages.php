<?php
/*
Plugin Name: XdN List Pages
Plugin URI: http://xenomorph.net/
Description: This list child pages (and has optional configuration). Add "[list_subpages]" to list the current page's child objects.
Author: Nicholas Caito
Author URI: http://xenomorph.net/
Version: 0.3.0
*/

// ----------

/*

Example usage:

[list_subpages]

[list_subpages title="Menu"]

[list_subpages parent="3"]

[list_subpages depth="2"]

[list_subpages parent="5" sort="desc"]

[list_subpages parent="25" depth="4"]

*/

// ----------

// enable shortcodes in text widgets
add_filter('widget_text', 'do_shortcode');

// ----------

/* add list_subpages shortcode
 https://kopepasah.com/tutorial/listing-the-child-pages-of-a-parent-page-using-a-shortcode/
*/

// add shortcode for listing child pages of a parent page
function list_pages_shortcode( $atts ) {
	// basic shortcode markup and their default values
		extract( shortcode_atts( array(
		'parent' => false,
		'depth' => '1',
		'title' => false,
		'sort' => 'asc',
	), $atts ) );

	// if the post parent attribute isn't specified, use the current post's ID
	if ( ! $parent ) {
		global $post;
		if ( is_object( $post ) ) {
			$parent = $post->ID;
		} else {
			return false;
		}
	}
 	
	// build the arguments - we want the child of the post_parent
	$args = array(
		'depth'		=> $depth,
		'child_of'	=> $parent,
		'title_li'	=> $title,
		'echo'		=> 0,
		'sort_column'	=> 'post_title',
		'sort_order'	=> $sort
	);
 
	// if there is a title, remove its margin and bullet
	if ( $title ) {
	return "<ul style=\"margin-left: inherit; list-style: none;\">" . wp_list_pages( $args ) . "</ul>";
	} else {
		// if no title, display the list as normal 
		return "<ul>" . wp_list_pages( $args ) . "</ul>";
	}
}

// add the shortcode
add_shortcode( 'list_subpages', 'list_pages_shortcode' );
