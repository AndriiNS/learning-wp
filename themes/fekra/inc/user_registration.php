<?php
add_action('init', 'handle_custom_registration');
function handle_custom_registration()
{
    if (
        isset($_POST['custom_register'])
        && isset($_POST['custom_register_nonce'])
        && wp_verify_nonce($_POST['custom_register_nonce'], 'custom_register_action')
    ) {

        $username = sanitize_user($_POST['username']);
        $email    = sanitize_email($_POST['email']);
        $password = $_POST['password'];

        $user_id = wp_create_user($username, $password, $email);

        if (is_wp_error($user_id)) {
            echo "<p style='color:red'>Error: " . $user_id->get_error_message() . "</p>";
        } else {
            wp_set_current_user($user_id);
            wp_set_auth_cookie($user_id);
            wp_redirect(home_url());
            exit;
        }
    }
}
