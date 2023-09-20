<?php
if (!defined('ABSPATH')) {
    die('You can\'t be here');
}
use Carbon_Fields\Container;
use Carbon_Fields\Field;

/**
 * This hook allow us to call function load_carbon_field after theme is loded
 */
add_action('after_setup_theme', 'load_carbon_field');
add_action('carbon_fields_register_fields', 'create_options_page');

function load_carbon_field()
{
    \Carbon_Fields\Carbon_Fields::boot();
}

/**
 * Create options page in contact plugin.
 * This page will show in left dashboard of wordpress
 */
function create_options_page()
{
    /**
     * @package Container create a new field in dashboard of wordpress
     * @package Field takes @param like text/textarea to create input and many more
     ** @package Field takes @param type, id, and disply text as argument
     * Function __() is commonly used as a function name for translating text or strings, if user choose different language the text inside __() will be only translated into that language
     * The order matters
     */
    Container::make('theme_options', __('Contact Form'))
        ->set_icon('dashicons-media-text')
        ->add_fields(
            array(
                Field::make('checkbox', 'contact_plugin_active', __('Active')),
                Field::make('text', 'contact_plugin_recipients', __('Recipients Email'))
                    ->set_attribute('placeholder', 'eg. your@email.com')
                    ->set_help_text('The email that the form is submitted to'),
                Field::make('textarea', 'contact_plugin_message', __('Conformation Message'))
                    ->set_attribute('placeholder', 'Enter conformation message')
                    ->set_help_text('Type the message you want the submitter to recieve')
            )
        );
}
?>