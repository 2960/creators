<?php
/*
Plugin Name: Make Clickable
Plugin URI: http://the396.com/software/plugins/wordpress/make-clickable/
Description: Converts plaintext URIs in posts or pages to clickable links using the builtin WordPress function "make_clickable()" via the add_filter('the_content', 'make_clickable'). There are no options for this plugin. Just activate it and go.
Version: 1.0
Author: Aoirthoir, Bob O'Neill, Jerry Schetterer
Author URI: http://the396.com/
*/
add_filter('the_content', 'make_clickable');
?>