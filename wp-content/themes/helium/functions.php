<?php 
	// register resources

	function register_resources(){

		//register menu

		register_nav_menu('main-menu','Main Menu');

		//register a slide

		$arg = array(
	    	'labels' => array(
	        'name' => 'Slides',
	        'singular_name' => 'Slide',
	        'menu' => 'Slides'
	      ),
	      	'public' => true,
	      	'show_in_nav_menues' => true,
	    );

		register_post_type( 'slide', $arg);

		$arg = array(
	    	'labels' => array(
	        'name' => 'Features',
	        'singular_name' => 'Feature',
	        'menu' => 'Features'
	      ),
	      	'public' => true,
	      	'show_in_nav_menues' => true,
	    );

		register_post_type( 'feature', $arg);
		
		$arg = array(
	    	'labels' => array(
	        'name' => 'Staff',
	        'singular_name' => 'Staff',
	        'menu' => 'Staff'
	      ),
	      	'public' => true,
	      	'show_in_nav_menues' => true,
	    );

		register_post_type( 'staff', $arg);
	}

	add_action('init','register_resources');

	//menu items hooks

	function add_menu_li_class($classes,$item,$args){
		$classes[] = 'nav-item';
		return $classes;
	}
	add_filter('nav_menu_css_class', 'add_menu_li_class',10,3);

	//add menu anchor hooks

	function add_menu_anchor_class($attrs,$item,$args){
		$attrs['class'] = 'nav-link';
		return $attrs;
	}
	add_filter('nav_menu_link_attributes', 'add_menu_anchor_class',10,3);
 ?>