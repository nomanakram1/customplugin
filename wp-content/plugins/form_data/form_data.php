<?php
/**
 * @package Akismet
 */
/*
Plugin Name: form_data
Plugin URI: http://mercurysols.org/
Description: just testing
Version: 1.0
Author: Automattic
Text Domain: akismet
*/
//define('ABSPATH', '/');
defined(('ABSPATH')) || die("you cant access");

//***********************__ below line includes php code from other file to this file __****************************
include plugin_dir_path(__FILE__)."inc/shortcodes.php";
include plugin_dir_path(__FILE__)."inc/menu.php";

//***********************__ hook __****************************
//register_activation_hook(__FILE__, "pwspk_register_activation_hook");
//register_deactivation_hook(__FILE__, "pwspk_register_deactivation_hook");
//register_uninstall_hook(__FILE__, "pwspk_register_uninstall_hook");
//function pwspk_register_activation_hook(){
//    add_option('blogdescription','Your Title is haked');
//}
//function pwspk_register_deactivation_hook(){
//    delete_option('blogdescription');
//}
//function pwspk_register_uninstall_hook(){}

//***********************__ filters __****************************
add_filter('the_title', 'pwspk_the_title');
function pwspk_the_title($title){
    return "Titles are hacked";
}
add_action('wp_enqueue_scripts', 'pwspk_wp_enqueue_scripts');
function pwspk_wp_enqueue_scripts(){
    wp_enqueue_style('pwspk_dev_style', plugin_dir_url(__FILE__)."assets/css/style.css");
    wp_enqueue_script('pwspk_dev_script', plugin_dir_url(__FILE__)."assets/js/script.js",array(), 1.1, true);
}




