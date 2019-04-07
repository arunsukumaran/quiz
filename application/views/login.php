<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Form for MASHUPSTACK</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/loginpage3/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/loginpage3/css/style.css">
</head>
<body>

    <div class="main">

        

        <!-- Login  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="<?php echo base_url(); ?>/assets/loginpage3/images/signin-image.jpg" alt="sing up image"></figure>
                        <a href="signup" class="signup-image-link">Create an account</a>
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Login</h2>
                        <span class="alert alert-danger"><?php if( !empty( validation_errors() ) ){ echo validation_errors(); } ?></span>
                        <span class="alert alert-danger"><?php if( !empty( $error ) ){ echo $error; } ?></span>
                        <span class="alert alert-success"><?php if( !empty( $message ) ){ echo $message; } ?></span>
                        <form method="POST" action="<?php echo base_url()?>index.php/login" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <!-- <input type="email" name="email" id="email" placeholder="Email"/> -->
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <!-- <input type="password" name="your_pass" id="your_pass" placeholder="Password"/> -->
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="ulogin" id="ulogin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        <!-- <div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>
                                <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="<?php echo base_url(); ?>/assets/loginpage3/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/loginpage3/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>