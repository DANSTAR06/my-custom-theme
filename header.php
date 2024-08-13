<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php bloginfo('template_url'); ?>./assets/fontawesome-free-6.5.2-web/css/fontawesome.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>./assets/fontawesome-free-6.5.2-web/css/brands.min.css" rel="stylesheet" />
    <link href="<?php bloginfo('template_url'); ?>./assets/fontawesome-free-6.5.2-web/css/solid.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>style.css">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <nav>
        <div class="top-nav">
            <div class="msc-info">
                <div class="email"><span class="fa fa-envelope"></span><a href="mailto:">servicedesk.hardrik3d.com</a></div>
                <span class="divider">|</span>
                <div class="tel"><span class="fa fa-phone"></span><a href="tel:+">+254-123-456-789</a></div>
                <span class="divider">|</span>
                <div class="hrs"><span class="fa fa-clock"></span><a href="">8:00am - 6:00am</a></div>
            </div>
            <div class="socials">
                <div><i class="fa-brands fa-facebook"></i></div>
                <div><i class="fa-brands fa-instagram"></i></div>
                <div><i class="fa-brands fa-whatsapp"></i></div>
            </div>
        </div>
        <div class="bottom-nav">
            <div class="logo" style="background-color:#004E8A;">
                <a href="/"><img src="<?php bloginfo('template_url'); ?>./assets/images/logo.svg" alt="" /></a>
            </div>
            <div class="menu" style="display:none">
            <button class="menu-toggle">Menu</button>

           <!-- /*added for menu navigation8*/-->
<nav id="site-navigation" class="main-navigation">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
    ));
    ?>
                <div>
                    <span class="fa fa-close"></span>
                    <a href="/" class="menu-item active"><span class="fa fa-home"></span> <span>Home</span></a>
                    <span class="divider"></span>
                    <a href="/services/" class="menu-item"><span class="fa fa-globe"></span> <span>Our Services</span></a>
                    <span class="divider"></span>
                    <a href="/pricing/" class="menu-item"><span class="fa fa-globe"></span> <span>Pricing</span></a>
                    <span class="divider"></span>
                    <a href="/aboutus/" class="menu-item"><span class="fa fa-user"></span> <span>About Us</span></a>
                    <span class="divider"></span>
                    <a href="/contactus/" class="menu-item"><span class="fa fa-bookmark"></span> <span>Contact Us</span></a>
                    <span class="divider"></span>
                    <a href="/contactus/" class="menu-item"><span class="fa fa-user-plus"></span> <span>My Account</span></a>
                    <span class="divider"></span>
                    <a href="#" class="cart"><span class="fa fa-shopping-bag"></span> <span>(3) items</span></a>
                    <span class="divider"></span>
                </div>

</nav>
            </div>
            <script type="text/javascript">
            document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-navigation');

    menuToggle.addEventListener('click', function () {
        nav.classList.toggle('active');
    });
});
</script>
            <div class="action">
                <button class="get-started"><a href="./signup/">Get Started</a></button>
                <div class="icons">
                    <i class="fa fa-bars" aria-hidden="false"></i>
                    <a href="#"><span class="fa fa-search"></span></a>
                    <a href="#"><span class="fa fa-shopping-bag"></span></a>
                </div>
            </div>
        </div>
    </nav>