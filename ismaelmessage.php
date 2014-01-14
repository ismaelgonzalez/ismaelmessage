<?php
class IsmaelMessage {
    public function __construct()
    {
        add_option( 'global_message' );
        add_shortcode( 'show_message', array( $this, 'shortcode' ) );
    }

    public function shortcode()
    {
        $global_message = get_option( 'global_message' );
        return '<strong>' . $global_message . '</strong>';
    }

    public function im_admin_actions() {
        add_menu_page( "Add a Global Message", "Add a Global Message", 1, "add-global-message", array( IsmaelMessage, 'im_admin' ), "dashicons-format-status" );
    }

    public function im_admin(){
        add_option( 'global_message' );
        $global_message = get_option( 'global_message' );
        ?>
        <div class="wrap">
            <h2>Add A Global Message</h2>
            <h3>This global message will be printed anywhere else on the blog!</h3>

            <form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI'] ); ?>">
                <h4>Add a new Global Message</h4>
                <p>
                    Global Message:
                    <input type="text" name="im_global_message" value="<?php echo $global_message; ?>" size="40">
                </p>
                <p class="submit">
                    <input type="submit" name="Submit" value="Update Global Message">
                </p>
            </form>
        </div>
        <?php
    }

    public function save_global_message( $global_message )
    {
        update_option( 'global_message', $global_message );
    }
}