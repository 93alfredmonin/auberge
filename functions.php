<?php
/**
 * Auberge WordPress Theme
 *
 * Auberge WordPress Theme, Copyright 2015 WebMan [https://www.webmandesign.eu/]
 * Auberge is distributed under the terms of the GNU GPL
 *
 * @package    Auberge
 * @copyright  WebMan Design, Oliver Juhas
 * @license    GPL-3.0, http://www.gnu.org/licenses/gpl-3.0.html
 *
 * @since    1.0
 * @version  2.6.0
 *
 * @link  https://www.webmandesign.eu
 *
 * Contents:
 *
 * 1) Required files
 */





/**
 * 1) Required files
 */

	// Global functions

		require_once( get_template_directory() . '/library/core.php' );

	// Theme setup

		require_once( get_template_directory() . '/includes/setup/setup.php' );
		
		
		
function register_my_widgets(){
	register_sidebar( array(
		'name' => "Cofe sidebar",
		'id' => 'cofe-sidebar',
		'description'   => 'Add widgets',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>'
	) );
}
add_action( 'widgets_init', 'register_my_widgets' );
