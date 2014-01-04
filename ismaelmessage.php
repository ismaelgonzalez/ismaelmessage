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

function im_admin(){
	//call file with form do update of message there
	include( 'im_add_message_form.php' );
}

function im_getmessage_shortcode() {
	$wpdb           = new wpdb( 'root', 'root', 'wordpress', 'localhost' );
	$table_name     = "wp_global_message";
	$global_message = $wpdb->get_row(" SELECT message FROM $table_name" );

	return "<strong>" . $global_message->message . "</strong>";
}

add_action( 'admin_menu', 'im_admin_actions' );
add_shortcode( 'show_message', 'im_getmessage_shortcode' );
