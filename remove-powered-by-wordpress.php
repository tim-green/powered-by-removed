<?php
/*
Plugin Name: Remove Powered by WordPress
Description: Removes the "Proudly powered by WordPress" message from the footer.
Version: 1.0
Author: Tim Green
*/

function remove_powered_by_wordpress() {
    remove_filter('wp_footer', 'credit_link');
}
add_action('init', 'remove_powered_by_wordpress');
