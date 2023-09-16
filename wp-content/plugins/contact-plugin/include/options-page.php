<?php
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
     */
    Container::make('theme_options', __('Theme Options'))
        ->add_fields(
            array(
                Field::make('text', 'crb_facebook_url', __('Facebook URL')),
                Field::make('textarea', 'crb_footer_text', __('Footer Text'))
            )
        );
}
?>