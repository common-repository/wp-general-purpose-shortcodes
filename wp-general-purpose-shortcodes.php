<?php
/*
Plugin Name:  WP general purpose shortcodes
Plugin URI:   https://github.com/aheadlabs/wp-general-purpose-shortcodes/
Description:  General purpose shortcodes for WordPress sites
Version:      0.2.4
Author:       Iván Sainz (Ahead Labs)
Author URI:   https://ivansainz.es/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * Shortcode functions
 */
function ahl_current_year() {
    return date('Y');
}

function ahl_years_from_date($atts) {
    $date1 = date_create($atts["date"]);
    $date2 = date_create();

    $interval = date_diff($date2, $date1);
    return $interval->format('%y');
}

/**
 * Wiring everything up...
 */

// adds the shortcode functions one by one
function ahl_shortcodes_init(){
    add_shortcode('ahl_year', 'ahl_current_year');
    add_shortcode('ahl_yearsFromDate', 'ahl_years_from_date');
}

// adds all shortcodes
add_action('init', 'ahl_shortcodes_init');


