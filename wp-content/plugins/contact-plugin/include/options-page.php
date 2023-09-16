<?php

use Carbon_Fields\Container;
use Carbon_fields\Field;

/*
 * This hook allow us to call function load_carbon_field after theme is loded
 */
add_action('after_setup_theme', 'load_carbon_field');

function load_carbon_field()
{
    \Carbon_Fields\Carbon_Fields::boot();
}
?>