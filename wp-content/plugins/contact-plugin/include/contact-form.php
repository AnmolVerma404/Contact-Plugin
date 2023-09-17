<?php
add_shortcode('contact', 'show_contact_form');
add_action('rest_api_init', 'create_rest_endpoint');
function show_contact_form()
{
    include MY_PLUGIN_PATH . '/include/templates/contact-form.php';
}

function create_rest_endpoint()
{
    register_rest_route(
        'v1/contact-form',
        'submit',
        array(
            'methods' => 'POST',
            'callback' => 'handle_enquiry'
        )
    );
}

/**
 * @param $data will contain all the response from the AJAX request
 */
function handle_enquiry($data)
{
    $params = $data->get_params();
}