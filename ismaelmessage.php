<?php
/**
 * Plugin Name: Ismael Message
 * Description: This will just add a global message that can be displayed anywhere.
 * Version: 1.0
 * Author: Ismael Gonzalez
 * License: GPL2
 */
function im_admin_actions() {
	add_menu_page( "Add a Global Message", "Add a Global Message", 1, "Add Global Message", "im_admin", "dashicons-format-status" );
}

function install_global_message_table() {
	global $wpdb;

	$table_name = $wpdb->prefix . "global_message";
	
	$sql = "CREATE TABLE $table_name ( id INT NOT NULL AUTO_INCREMENT, message TEXT NULL, PRIMARY KEY (id) );";

	$wpdb->query( $sql );
}

function im_admin(){
	//call file with form do update of message there
	include( 'im_add_message_form.php' );
}

function im_getmessage_shortcode() {
	global $wpdb;
	$table_name     = $wpdb->prefix . "global_message";
	$global_message = $wpdb->get_row(" SELECT message FROM $table_name" );

	return "<strong>" . $global_message->message . "</strong>";
}

register_activation_hook(__FILE__, 'install_global_message_table');
add_action( 'admin_menu', 'im_admin_actions' );
add_shortcode( 'show_message', 'im_getmessage_shortcode' );
