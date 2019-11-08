<?php
require_once('googleMapsApiKey.php');
/**
 * Google Maps JavaScript
 */

function googleMapsFunction()
{
    wp_enqueue_script('googleMapsInit', get_theme_file_uri('/assets/js/map.js'), [], 1.0, true);
    wp_enqueue_script('googleMaps', 'https://maps.googleapis.com/maps/api/js?key=' . GOOGLEMAPSAPIKEY . '&callback=initMap', ['googleMapsInit'], 1.0, true);
}
add_action('wp_enqueue_scripts', 'googleMapsFunction');
