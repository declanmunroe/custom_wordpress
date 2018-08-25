<!DOCTYPE html>
<html>
    <head>
       <?php wp_head(); ?> 
    </head>
    <body class="background">
        
            <nav class = "navbar navbar-inverse">
                <div class = "container">
                    <div class = "navbar-header">
                        <a class = "navbar-brand" href = "<?php bloginfo('url')?>"><!--<img src = "assets/images/logo.png" width = "150px" height = "150px" alt = "Websites logo"/>--><?php bloginfo('name')?></a>
                            <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#myCollapsingList">
                                <span class = "icon-bar"></span>
                                <span class = "icon-bar"></span>
                                <span class = "icon-bar"></span>
                            </button>
                    </div>
                    <ul id = "myCollapsingList" class = "nav navbar-nav collapse navbar-collapse navbar-right">
<!--                        <li><a href = "index.html">Home</a></li>
                        <li><a href = "about.html">About</a></li>
                        <li><a href = "services.html">Services</a></li>
                        <li><a href = "portfolio.html">Portfolio</a></li>
                        <li><a href = "testimonials.html">Testimonials</a></li>
                        <li><a href = "contact.html">Contact Us</a></li>-->
                        <?php
                            wp_nav_menu(array(
                                'theme_location' => 'header_nav',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav'
                            ));
                        ?>
                    </ul>
                </div>
            </nav>
        