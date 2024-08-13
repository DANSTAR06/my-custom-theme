<?php 
/*Template Name: ContactUs
*/
get_header();
?>
<div class="main">
        <div class="hero contactus">
            <div class="text">
                <h4> Get In Touch With Us </h4>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quia nulla consectetur voluptatibus. Earum
                    repellat
                    quisquam consequatur voluptatibus libero! Esse eligendi aut sequi consectetur voluptatem. Sapiente
                    quas
                    maxime
                    eum sunt unde.</p>
                <a href="#">Chat with Us</a>
            </div>
            <div class="img">
                <img src="<?php echo get_template_directory_uri(); ?>./assets/images/contactus-hero.svg" alt="">
            </div>
        </div>
        <div class="contactus-container">
            <div class="wrap">
                <div class="contact-form">
                    <div class="form-container">
                        <form>
                            <div class="contact-header">
                                <h4>Send us a message</h4>
                                <span class="fa fa-envelope"></span>
                            </div>
                            <div class="columns">
                                <div class="row">
                                    <label for="username">Name</label>
                                    <input type="text" name="username" placeholder="Dexter Morgan">
                                </div>
                                <div class="row">
                                    <label for="username">Email</label>
                                    <input type="text" name="username" placeholder="dextermorgan@gmail.com">
                                </div>
                                <div class="row">
                                    <label for="username">Phone</label>
                                    <input type="text" name="username" placeholder="+123 456 789 000">
                                </div>
                                <div class="row">
                                    <label for="username">Category</label>
                                    <input type="text" name="username" placeholder="Technical support">
                                </div>
                            </div>
                            <div class="form-footer">
                                <div class="row">
                                    <label for="username">Message</label>
                                    <textarea type="text" name="username"></textarea>
                                </div>
                                <button type="submit"><span class="fa-brands fa-telegram"></span></button>
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