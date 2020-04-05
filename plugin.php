<?php
/*
Plugin Name: Enhanced Auth Cookies
Description: Unique timebased short auth cookies
Version: 0.1
Author: Ozh
*/


// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();

// Make auth cookie life 1 mn (that is, user sessions will never last more)
yourls_add_filter( 'get_cookie_life', 'ozh_cookie_life' );
function ozh_cookie_life() {
    return 60; // 1 mn, in seconds
}

// Give auth cookie a unique and timebased name: append to the cookie name a nonce that will be valid just for the cookie life
yourls_add_filter( 'cookie_name', 'ozh_cookie_name' );
function ozh_cookie_name( $name ) {
    yourls_add_filter( 'get_nonce_life', 'ozh_cookie_life' );
    $name = $name . '_' . yourls_create_nonce( 'cookie', 'cookie' );
    yourls_remove_filter( 'get_nonce_life', 'ozh_cookie_life' );

    return $name;
}
