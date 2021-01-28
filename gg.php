<?php global $wpdb; $query = "SELECT * FROM $wpdb->postmeta
WHERE meta_key = '" . $my_option_name . "'"; $results =
$wpdb->get_results( $query );
