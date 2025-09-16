<?php get_header(); ?>
<main class='main' style="height: 100vh; background-color: #444; align-content: center; text-align: center;">
    <div class="custom-auth-container" id="customAuthContainer">
        <!-- Sign Up Form -->
        <div class="form-container sign-up-container">
            <form method="post">
                <?php wp_nonce_field('custom_register_action', 'custom_register_nonce'); ?>
                <span class='form-span'>Use your email for registration</span>
                <input type="text" name="username" placeholder="Name" required />
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <button type="submit" name="custom_register">Sign Up</button>
            </form>
        </div>

        <!-- Sign In Form -->
        <div class="form-container sign-in-container">
            <form method="post">
                <?php wp_nonce_field('custom_login_action', 'custom_login_nonce'); ?>
                <span class='form-span'>Use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="<?php echo wp_lostpassword_url(); ?>">Forgot your password?</a>
                <button type="submit" name="custom_login">Sign In</button>
            </form>
        </div>

        <!-- Overlay -->
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost overlay-btn" data-action="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost overlay-btn" data-action="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>