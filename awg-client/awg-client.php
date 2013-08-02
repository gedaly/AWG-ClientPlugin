<?php

/*
Plugin Name: AWG-Client
Plugin URI: http://awesomewebguy.com/awg-client-plugin/
Description: Adding helpful links for Awesome Web Guy design and support clients.
Version: 0.2
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


// Add WP Lifeguard Tutorial Video Section

add_action('admin_menu', 'lgap_add_pages');


function lgap_add_pages()  {
add_menu_page(__('Help Videos','menu-test'), __('Help Videos','menu-test'), 'read', 'lifeguard-assistant-plugin', 'lgap_main_page' );
}

function lgap_main_page() {echo "<h2>" . __( 'Help Videos', 'menu-test' ) . "</h2>";


     echo '<style type="text/css">#wplg { font-family: "Varela",Helvetica,Trebuchet MS,Verdana,"DejaVu Sans",sans-serif; }#wplg a:link,#wplg a:visited { color: #21759b; text-decoration: none; }#wplg a:hover { color: #d54e21; }.wplg-video { background: #f6f6f6; border: 1px solid #dadada; padding: 12px; margin: 0 12px 12px 0; float: left; }.wplg-clear { clear: both; }.wplg-green-button { box-shadow:inset 0 0 3px rgba(0,0,0,.1); font-size: 20px; line-height: 32px; height: 32px; width: 434px; margin: 0 12px 12px 0; text-align: center; display: block; border: 2px solid #9abf89; background: #7da742; color: #f1ffeb !important; text-shadow: 0 0 3px rgba(125,167,66,.75); }.wplg-green-button:hover { border: 2px solid #c0e1aa; background: #8ac636; }.wplg-green-button:active { border: 2px solid #88a65e; background: #5d822a; }</style><link href="http://fonts.googleapis.com/css?family=Varela" rel="stylesheet" type="text/css"><div id="wplg"><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32852753?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32856785?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857648?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32860297?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32872861?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32878118?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32881530?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32864178?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32863614?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32862744?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-video"><iframe src="http://player.vimeo.com/video/32857481?title=0&byline=0&portrait=0&color=ffffff" width="412" height="309" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe></div><div class="wplg-clear"></div></div>';}         






?>