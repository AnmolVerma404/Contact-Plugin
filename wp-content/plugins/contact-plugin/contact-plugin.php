<?php
/*
 * Plugin Name: Contact Plugin
 * Description: A contact Plugin
 * Version: 1.0.0
 * Text Domain: options-plugin
 */


/*
 * Until and unless wordpress is accessing this plugin this it will have a defined ABSPATH 
 */
if (!defined('ABSPATH')) {
    die('You can\'t be here');
}

if (!class_exists('ContactPlugin')) {
    class ContactPlugin
    {

    }

    new ContactPlugin;
}
?>
