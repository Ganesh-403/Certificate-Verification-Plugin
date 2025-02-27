<?php
// Exit if file called directly
if (!defined('ABSPATH')) { 
    exit; 
}

function course_certificate_AB_certificate_onActivation() {
    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'AB_course_certificates';

    $create_table_query = "CREATE TABLE IF NOT EXISTS `$table_name` (
        id INT NOT NULL AUTO_INCREMENT,
        certificate_code VARCHAR(255) NOT NULL,
        student_name TEXT NOT NULL,
        course_name TEXT NOT NULL,
        course_duration TEXT NOT NULL,
        award_date TEXT NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY `certificate_code_unique` (`certificate_code`)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($create_table_query);
}

// Hook function to plugin activation
register_activation_hook(__FILE__, 'course_certificate_AB_certificate_onActivation');
?>
