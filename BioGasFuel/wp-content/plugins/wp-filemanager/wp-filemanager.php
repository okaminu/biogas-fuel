<?php
/*
Plugin Name: WP-FileManager
Plugin URI: http://johannesries.de/webwork/wp-filemanager/
Description: FileManager for WordPress allows you to easily change, delete, organize and upload files.
Version: 1.2.6
Author: Johannes Ries , Anant Shrivastava
Author URI: http://johannesries.de 
*/

/* DO NOT EDIT ANYTHING BELOW THIS LINE */
function get_list_ext($lst_type)
{
	if (get_option($lst_type)  != "")
	{
		$ext_list =  get_option($lst_type);
	}
	else
	{
		$ext_list =  get_option( $lst_type . '_default');
	}
	return $ext_list;
}
function fm_post_add_options() {
	add_menu_page('FileManager', 'FileManager', 8, 'wp-filemanager/fm.php');
	add_submenu_page('wp-filemanager/fm.php','FileManager',8,'wpfileman', 'wpfileman_options_admin');
}
function wpfileman_options_admin()
{
//	echo "options panel for wordpress file man";
include_once('conf/config.inc.php');
include_once('wp_filemanager_admin.php');
}
add_action('admin_menu', 'fm_post_add_options');
//add_action('admin_menu', 'wpfileman_admin');
if ($_GET['action'] == 'edit')
{
	wp_enqueue_script('codepress');
	wp_enqueue_script('jquery');
}
?>