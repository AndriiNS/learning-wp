<?php
add_action('init', 'handle_custom_login');
function handle_custom_login()
{
    if (
        isset($_POST['custom_login'])
        && isset($_POST['custom_login_nonce'])
        && wp_verify_nonce($_POST['custom_login_nonce'], 'custom_login_action')
    ) {

        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];

        $user = get_user_by('email', $email);
        if ($user) {
            $creds = array(
                'user_login'    => $user->user_login,
                'user_password' => $password,
                'remember'      => true
            );

            $login = wp_signon($creds, false);
            if (is_wp_error($login)) {
                echo "<p style='color:red'>Login error: " . $login->get_error_message() . "</p>";
            } else {
                wp_redirect(home_url());
                exit;
            }
        } else {
            echo "<p style='color:red'>No user found with this email</p>";
        }
    }
}
