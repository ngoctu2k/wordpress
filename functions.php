<?php 
function theme_settup(){
	 register_nav_menu('header-menu',__( 'Menu chính' ));
	 add_theme_support( 'post-thumbnails' ); 
}	
add_action('init','theme_settup')
 ?>
