<?php
/**
 * Plugin Name: Uganda Shipping Zones
 * Plugin URI: https://github.com/shid94
 * Author: Rashid Migadde
 * Author URI: https://github.com/shid94
 * Description: Custom Woo Shipping Zones
 * Version: 0.1.0
 * License: GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: prefix-plugin-name
*/
// add basic plugin security.
defined( 'ABSPATH' ) or die;

add_filter( 'woocommerce_states', 'uganda_shipping_zones' );

function uganda_shipping_zones( $states ) {

    $map = array();

    $cities = array(
        'UG19999' => array(
            'city'     => 'Kampala',
            'division' => 'Nakawa',
        ),
        'UG29999' => array(
            'city'     => 'Kampala',
            'division' => 'Makindye'
        ),
        'UG39999' => array(
            'city'     => 'Kampala',
            'division' => 'Kamwokya'
        ),
        'UG49999' => array(
            'city'     => 'Kampala',
            'division' => 'Mulago'
        ),
    );

    foreach ( $cities as $city => $cityValue ) {
        $map[$city] = $cityValue['city'] . ', '. $cityValue['division'];
    }
    
    $states['UG'] = $map;
    
    return $states;
}

?>