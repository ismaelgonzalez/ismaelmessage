<?php
global $wpdb;

$table_name = $wpdb->prefix . "global_message";

	if ( $_POST ) {
		$message_count = $wpdb->get_var( "SELECT COUNT(*) FROM $table_name" );

		if ( $message_count > 0 ) {
			$wpdb->update( $table_name, array( 'message' => $_POST['im_global_message'] ), array( 'id' => 1 ) );
		} else {
			$wpdb->insert( $table_name, array( 'message' => $_POST['im_global_message'] ) );
		}
	}
?>

<div class="wrap">
	<h2>Add A Global Message</h2>
	<h3>This global message will be printed anywhere else on the blog by using the shortcode [show_message] in your post content!</h3>

	<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
		<p>
			<?php
				_e( "Global Message:" );
				$global_message = $wpdb->get_row( "SELECT message FROM $table_name" );
			?>
			<input type="text" name="im_global_message" value="<?php echo $global_message->message; ?>" size="40">
		</p>
		<p class="submit">
			<input type="submit" name="Submit" value="<?php _e( 'Update Global Message' ); ?>">
		</p>
	</form>
</div>
