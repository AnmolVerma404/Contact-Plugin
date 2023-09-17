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

    if (!wp_verify_nonce($params['_wpnonce'], 'wp_rest')) {
        return new WP_Rest_Response('Message not sent', 422);
    }

    unset($params['_wpnonce']);
    unset($params['_wp_http_referer']);

    // foreach ($params as $key => $val) {
    //     echo $key . " " . $val . "\n";
    // }

    $headers = [];

    $sender_email = get_bloginfo('admin_email');
    $sender_name = get_bloginfo('name');

    $headers[] = "From: {$sender_name} <{$sender_email}>";
    $headers[] = "Reply-to: {{$params['name']}} <{{$params['email']}}>";
}