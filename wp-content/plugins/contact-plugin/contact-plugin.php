<?php
/*
 * Plugin Name: Contact Plugin
 * Description: A contact Plugin
 * Version: 1.0.0
 * Text Domain: contact-plugin
 */


/*
 * Until and unless wordpress is accessing this plugin this it will have a defined ABSPATH 
 */
if (!defined('ABSPATH')) {
    die('You can\'t be here');
}

/*
 * class_exists checks if the class is defined
 */
if (!class_exists('ContactPlugin')) {
    class ContactPlugin
    {
        /*
         * Create a constructer for @class ContactPlugin
         * Require once will check if the file has already been included and if not it will get the file given the file path
         * plugin_dir_path is a wordpress function which find's plugin folder form the current dir then in the end we can mention the plugin autoload file
         */
        public function __construct()
        {
            define('MY_PLUGIN_PATH', plugin_dir_path(__FILE__));
            require_once(MY_PLUGIN_PATH . '/vendor/autoload.php');
        }

        /*
         * To simplify our code and break down it into different files, we have created a utilities class, and we will include it once in the initialize function
         */
        public function initialize()
        {
            include_once MY_PLUGIN_PATH . 'include/utilities.php';
            include_once MY_PLUGIN_PATH . 'include/options-page.php';
            include_once MY_PLUGIN_PATH . 'include/contact-form.php';
        }
    }

    $contactPlugin = new ContactPlugin;
    $contactPlugin->initialize();
}
?>
