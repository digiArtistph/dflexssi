<?php 
	if(function_exists('wp_nav_menu')) {
		$params = array('container' => 'nav',
						'theme_location' => 'main-menu'
			 		);
		wp_nav_menu($params);
	}
?>s