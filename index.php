<?php
/**
 * Plugin Name: Ismael Message
 * Description: This will just add a global message that can be displayed anywhere.
 * Version: 1.0
 * Author: Ismael Gonzalez
 * License: GPL2
 */
require_once dirname(__FILE__) . '/ismaelmessage.php';

$IsmaelMessage = new IsmaelMessage();

if ( !empty( $_POST["im_global_message"] ) ) {
    IsmaelMessage::save_global_message( $_POST["im_global_message"] );
}

add_action( 'admin_menu', function() {
    IsmaelMessage::im_admin_actions();
} );

