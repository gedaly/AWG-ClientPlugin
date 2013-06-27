<?php

/*
Plugin Name: AWG-Client
Plugin URI: http://awesomewebguy.com/awg-client-plugin/
Description: Adding helpful links for Awesome Web Guy design and support clients.
Version: 0.1
Author: Gedaly Guberek
Author URI: http://gedaly.com/
*/


// Add custom footer in admin section

function awg_custom_footer_admin () {
    echo 'Built by <a href="http://awesomewebguy.com" target="_blank">Awesome Web Guy</a> | <a href="mailto:gedaly@awesomewebguy.com?subject=Support Please [AWGwpf]">Email Support</a></p>';
    }

    add_filter('admin_footer_text', 'awg_custom_footer_admin');



// Add Dropdown Menu to WordPress Admin Bar

add_action('admin_bar_menu', 'awg_add_toolbar_items', 100);
function awg_add_toolbar_items($admin_bar){
	$admin_bar->add_menu( array(
		'id'    => 'awg-menu',
		'title' => 'Awesome Web Guy',
		'href'  => 'http://awesomewebguy.com',	
		'meta'  => array(
			'title' => __('Awesome Web Guy'),	
			'target' => '_blank',		
		),
	));
	$admin_bar->add_menu( array(
		'id'    => 'awg-support',
		'parent' => 'awg-menu',
		'title' => 'Support Area',
		'href'  => 'http://awesomewebguy.com/support/',
		'meta'  => array(
			'title' => __('Support Area'),
			'target' => '_blank',
			'class' => 'awg_menu_item_class'
		),
	));
	$admin_bar->add_menu( array(
		'id'    => 'awg-wp-tutorials',
		'parent' => 'awg-menu',
		'title' => 'WordPress Tutorials',
		'href'  => 'http://awesomewebguy.com/tutorials/wordpress/',
		'meta'  => array(
			'title' => __('WordPress Tutorials'),
			'target' => '_blank',
			'class' => 'awg_menu_item_class'
		),
	));
}









?>