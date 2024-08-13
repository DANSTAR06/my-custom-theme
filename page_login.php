<?php
/*Template Name: Login
*/
get_header();?>

<div class="main">
        <div class="hero contactus">
            <div class="text">
                <h4> Upload you CAD files and get a quote </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia nulla consectetur voluptatibus. Earum
                    repellat
                    quisquam consequatur voluptatibus libero! Esse eligendi aut sequi consectetur voluptatem. Sapiente
                    quas
                    maxime
                    eum sunt unde.</p>
                <!-- <a href="#" class="upload-link"><span class="fa-solid fa-upload"></span>Create Account</a> -->
            </div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/signup-img-1.svg" alt="">
            </div>
        </div>
        <div class="contactus-container">
            <div class="wrap">
                <div class="contact-form">
                    <div class="form-container">
                        <form>
                            <div class="contact-header">
                                <h4>Login into your account</h4>
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="columns login">
                                <div class="row">
                                    <label for="username">Enter your email address / phone no.</label>
                                    <input type="email" name="username" placeholder="Dexter Morgan">
                                </div>
                                <div class="row">
                                    <label for="username">Enter your password</label>
                                    <input type="password" name="username" placeholder="*******">
                                </div>
                            </div>
                            <button type="submit">Sign In</button>

                            <div class="footer">
                                <label for="">- or Sign in with -</label>
                                <div>
                                    <a href="#"><span class="fa-brands fa-google"></span> Google</a>
                                    <a href="#"><span class="fa-brands fa-facebook"></span> Facebook</a>
                                </div>
                            </div>
                            <div class="row">
                                <label for="">Don't have an account? <a href="/signup/"> Sign Up</a></label>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-sidebar">
                    <div class="header">
                        <h4>Contact Information</h4>
                        <div>
                            <span class="fa fa-map-pin"></span>
                            <p>360 King Kong Street Feasterville Trovose,PA 18262</p>
                        </div>
                        <div>
                            <span class="fa fa-phone"></span>
                            <p>+800 900-200-300</p>
                        </div>
                        <div>
                            <span class="fa-brands fa-instagram"></span>
                            <p>info@office.com</p>
                        </div>
                    </div>
                    <div class="footer">
                        <span class="fa-brands fa-facebook"></span>
                        <span class="fa-brands fa-instagram"></span>
                        <span class="fa-brands fa-twitter"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer();?>