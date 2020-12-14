<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */
function remove_output_structured_data() {
   remove_action( 'wp_footer', array( WC()->structured_data, 'output_structured_data' ), 10 ); // Frontend pages
   remove_action( 'woocommerce_email_order_details', array( WC()->structured_data, 'output_email_structured_data' ), 30 ); // Emails
}
add_action( 'init', 'remove_output_structured_data' );