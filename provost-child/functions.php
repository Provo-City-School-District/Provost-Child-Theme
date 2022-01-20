/*==========================================================================================
// Favicon
============================================================================================*/
function pcsd_add_favicon(){ ?>
	<!-- Custom Favicons -->
	<link rel="shortcut icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon.png"/>
	<link rel="apple-touch-icon" href="<?php echo get_theme_file_uri(); ?>/assets/images/favicon.png">
	<?php }
//add the favicon link to the live site head
add_action('wp_head','pcsd_add_favicon');
//add the favicon to the login page
add_action('login_head','pcsd_add_favicon');
