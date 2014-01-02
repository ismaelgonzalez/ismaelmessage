<?php
/**
 * Plugin Name: Ismael Message
 * Description: This will just add a global message that can be displayed anywhere.
 * Version: 1.0
 * Author: Ismael Gonzalez
 * License: GPL2
 */

#connect to the database where we will store the global message
#check the action hook where we will display this message with a shortcode
#???
#profit

function im_admin_actions() {
	add_menu_page("Add a Global Message", "Add a Global Message", 1, "Add Global Message", "im_admin", "dashicons-format-status");
}

function im_admin(){
	echo "admin here yo";
	include('im_add_message_form.php');
}

add_action('admin_menu', 'im_admin_actions');