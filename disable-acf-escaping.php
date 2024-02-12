<?php

/*
Plugin Name: Disable ACF Escaping
Description: Disables the automatic ACF escaping.
Version:     1.0
Author:      Karl Ertl
Author URI:  https://www.lucidstyle.de
*/

add_filter( 'acf/shortcode/allow_unsafe_html', '__return_true' );
add_filter( 'acf/the_field/allow_unsafe_html', '__return_true' );

?>