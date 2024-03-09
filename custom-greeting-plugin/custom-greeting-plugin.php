<?php
/*
Plugin Name: Custom Greeting Plugin
Description: A custom WordPress plugin to display personalized greeting messages.
Version: 1.0
Author: Vedant Parkhe
*/


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// custom_greeting_shortcode
function custom_greeting_shortcode() {
    if ( is_user_logged_in() ) {
        $user = wp_get_current_user();
        $user_display_name = $user->display_name;
        $current_hour = date( 'G' );

        if ( $current_hour >= 5 && $current_hour < 12 ) {
            $greeting = "Good Morning, $user_display_name!";
        } elseif ( $current_hour >= 12 && $current_hour < 17 ) {
            $greeting = "Good Afternoon, $user_display_name!";
        } else {
            $greeting = "Good Evening, $user_display_name!";
        }
    } else {
        $greeting = "Welcome, Guest!";
    }

    return $greeting;
}
add_shortcode( 'greeting_message', 'custom_greeting_shortcode' );
