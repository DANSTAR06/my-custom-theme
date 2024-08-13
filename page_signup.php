<?php
/*
Template Name: Signup
*/
get_header();?>

<div class="main">
        <div class="hero signup">
            <div class="text">
                <h4> Upload you CAD files and get a quote </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia nulla consectetur voluptatibus. Earum
                    repellat
                    quisquam consequatur voluptatibus libero! Esse eligendi aut sequi consectetur voluptatem. Sapiente
                    quas
                    maxime
                    eum sunt unde.</p>
                <a href="#" class="create-account">Create Account</a>
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
                                <h4>Create an account</h4>
                                <span class="fa fa-user-plus"></span>
                            </div>
                            <div class="columns">
                                <div class="row">
                                    <label for="username">Company Name</label>
                                    <input type="text" name="username" placeholder="Dexter Morgan">
                                </div>
                                <div class="row">
                                    <label for="username">Company email address</label>
                                    <input type="text" name="username" placeholder="dextermorgan@gmail.com">
                                </div>
                                <div class="row">
                                    <label for="username">First Name</label>
                                    <input type="text" name="username" placeholder="John">
                                </div>
                                <div class="row">
                                    <label for="username">Last Name</label>
                                    <input type="text" name="username" placeholder="Doe">
                                </div>
                            </div>
                            <div class="row">
                                <input type="checkbox" name="" id="">
                                <label for="">Agree with <a href="/login">terms and conditions</a> of use</label>
                            </div>
                            <button type="submit"> Sign Up</button>
                            <div class="footer">
                                <label for="">- or Sign Up with -</label>
                                <div>
                                    <a href="#"><span class="fa-brands fa-google"></span> Google</a>
                                    <a href="#"><span class="fa-brands fa-facebook"></span> Facebook</a>
                                </div>
                            </div>
                            <div class="row" style="margin:5px;padding:5px">
                                <label for="">Already have an account? <a href="/login"> Login</a></label>
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