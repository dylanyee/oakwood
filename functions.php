<?php
// add menus
register_nav_menus( array(
	'header_menu' => 'Header Menu'
) );

// register custom post type
add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'homepage-content',
		array(
			'labels' => array(
				'name' => __( 'Homepage Sections' ),
				'singular_name' => __( 'Section' )
			),
		'public' => true,
		'has_archive' => false,
		)
	);
}


// add google analytics to footer
function add_google_analytics() {
	echo '<script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>';
	echo '<script type="text/javascript">';
	echo 'var pageTracker = _gat._getTracker("UA-XXXXX-X");';
	echo 'pageTracker._trackPageview();';
	echo '</script>';
}
add_action('wp_footer', 'add_google_analytics');


// add a favicon to your 
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('wpurl').'/favicon.ico" />';
}
add_action('wp_head', 'blog_favicon');


// add a favicon for your admin
function admin_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/images/favicon.png" />';
}
add_action('admin_head', 'admin_favicon');


// custom admin login logo
function custom_login_logo() {
	echo '<style type="text/css">
	h1 a { background-image: url('.get_bloginfo('template_directory').'/images/custom-login-logo.png) !important; }
	</style>';
}
add_action('login_head', 'custom_login_logo');


// disable all widget areas
function disable_all_widgets($sidebars_widgets) {
	//if (is_home())
		$sidebars_widgets = array(false);
	return $sidebars_widgets;
}
add_filter('sidebars_widgets', 'disable_all_widgets');


// kill the admin nag
if (!current_user_can('edit_users')) {
	add_action('init', create_function('$a', "remove_action('init', 'wp_version_check');"), 2);
	add_filter('pre_option_update_core', create_function('$a', "return null;"));
}

add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );

?>