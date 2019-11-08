<?php
/**
 * Google Maps JavaScript
 */
function googleMapsFunction() {
    wp_enqueue_script('googleMapsInit', get_theme_file_uri( '/assets/js/map.js' ), [], 1.0, true);
    wp_enqueue_script('googleMaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDwLBvtId4nbZuw1RUgMTJ82-GjGKaJZGE&callback=initMap', ['googleMapsInit'], 1.0, true);
}
add_action('wp_enqueue_scripts', 'googleMapsFunction');