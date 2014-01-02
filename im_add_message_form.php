<div class="wrap">
	<h2>Add A Global Message</h2>
	<h3>This global message will be printed anywhere else on the blog!</h3>

	<form method="post" action="">
		<h4>Add a new Global Message</h4>
		<p>
			<?php _e("Global Message:"); ?>
			<input type="text" name="im_global_message" value="<?php echo $global_message; ?>" size="40">
		</p>
		<p class="submit">
			<input type="submit" name="Submit" value="<?php _e('Update Global Message'); ?>">
		</p>
	</form>
</div>