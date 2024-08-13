<footer style="padding: 100px 140px;
  padding-bottom: 20px;
  background-color: #080000f7;
  background-image: url(./assets/images/footer-bg.png);
  object-fit: fill;">
        <div class="wrap">
        <div class="col-1">
            <div class="header">
                <h3>Hardik 3DF</h3>
                <p>We will help you bring out the best ot your 3D models</p>
            </div>
            <div class="menu">
    <a href="<?php echo home_url(); ?>">Home</a>
    <span>|</span>
    <a href="<?php echo get_permalink(get_page_by_path('services')); ?>">Our Services</a>
    <span>|</span>
    <a href="<?php echo get_permalink(get_page_by_path('pricing')); ?>">Pricing</a>
    <span>|</span>
    <a href="<?php echo get_permalink(get_page_by_path('AboutUs')); ?>">About Us</a>
    <span>|</span>
    <a href="<?php echo get_permalink(get_page_by_path('contactus')); ?>">Contact Us</a>
</div>

        </div>
        <div class="col-2">
            <div>
                <h3>Our Services</h3>
                <div class="menu">
                    <a href="">3D/2D printing</a>
                    <a href="">ModelsSharing</a>
                    <a href="">Service Three</a>
                </div>
            </div>
            <div>
                <h3>Business</h3>
                <div class="menu">
                <a href="<?php echo get_permalink(get_page_by_path('AboutUs')); ?>">About Us</a>
                
                <a href="<?php echo get_permalink(get_page_by_path('pricing')); ?>">Pricing Model</a>
                <a href="">File sharing</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sub-footer">
        <h6>Copyright &copy 2024 || All rights Reserved</h6>
        <div class="menu">
            <a href="#">Terms</a>
            <span></span>
            <a href="#">Privacy</a>
            <span></span>
            <a href="#">Compliances</a>
        </div>
    </div>
    </div>
        <?php wp_footer(); ?>
    </footer>
</body>
</html>
