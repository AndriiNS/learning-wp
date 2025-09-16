<?php get_header(); ?>

<main class="main" style="height: 100vh; background-color: #444; align-content: center; text-align: center;">
    <div class="reset-password-container">
        <h1>Reset Your Password</h1>

        <?php
        if (is_user_logged_in()) {
            wp_redirect(home_url());
            exit;
        }

        // Обробка форми
        if (isset($_POST['reset_password'])) {
            $user_login = sanitize_text_field($_POST['user_login']);

            $user = get_user_by('login', $user_login);
            if (!$user) {
                $user = get_user_by('email', $user_login);
            }

            if ($user) {
                $reset_key = get_password_reset_key($user);
                $reset_url = site_url("/wp-login.php?action=rp&key=$reset_key&login=" . rawurlencode($user->user_login));

                wp_mail(
                    $user->user_email,
                    'Reset Your Password',
                    "Click here to reset your password: $reset_url"
                );

                echo "<p>Check your email for reset instructions.</p>";
            } else {
                echo "<p>User not found.</p>";
            }
        }
        ?>

        <form method="post">
            <input type="text" name="user_login" placeholder="Username or Email" required>
            <button type="submit" name="reset_password">Reset Password</button>
        </form>
    </div>
</main>