<?php
/*
Plugin Name: Disable Password Change Admin Email
Description: Whatever
Version: 1.0.0
Author: Sean Ferguson
Author URI: https://github.com/scferg/
License: GPL v3
*/

/**
 * Disable emails sent to admins when a user changes their password
 * Credit: https://wordpress.stackexchange.com/a/266006/48662
 */
 if (!function_exists('wp_password_change_notification')) {
   function wp_password_change_notification($user) {
     return;
   }
 }
