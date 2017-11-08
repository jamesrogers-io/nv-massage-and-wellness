<?php get_header(); ?>

    
    <!-- NAVIGATION -->
    <div class="nav__backdrop">
        <div class="nav container">
            
             <!-- DESKTOP NAVIGATION -->
            <div class="row">
                <div class="nav__desktop">
                    <table class="nav__desktop-top">
                        <tr>
                            <!-- LOGO -->
                            <td class="nav__desktop-logo">
                                <!--<img class="nav__logo" src="./img/nv-logo.png">-->
                                <i class="fa fa-envira" id="leaf-logo"></i> &nbsp; NAPA VALLEY <strong>MASSAGE & WELLNESS</strong>
                            </td>

                            <!-- MENU -->
                            <td class="nav__desktop-bars">
                                <i class="fa fa-bars"></i>
                            </td>
                            
                            <!-- BOOK ONLINE -->
                            <td class="nav__desktop-btn">
                                <button>BOOK ONLINE</button>
                            </td>
                            
                            <!-- RIGHT -->
                            <td class="nav__desktop-social">
                                <ul style="text-align: right;">
                                    <li><i class="fa fa-instagram"></i></li>
                                    <li><i class="fa fa-yelp"></i></li>
                                    <li><i class="fa fa-facebook"></i></li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <table class="nav__desktop-bottom">
                        <tr>
                            <!-- LOGO -->
                            <td class="nav__desktop-logo-scrolled">
                                <!--<img class="nav__logo" src="./img/nv-logo.png">-->
                                <i class="fa fa-envira" id="leaf-logo"></i> &nbsp; NV<strong>M&W</strong>
                            </td>
                            <td class="nav__desktop-links">
                                <!--
                                <ul>
                                        <li>Home</li>
                                        <li>Massage</li>
                                        <li>Spa Packages</li>
                                        <li>Body Treatments</li>
                                        <li>Facials</li>
                                        <li>Waxing</li>
                                        <li>Lash Extensions</li>
                                        <li>Spa Etiquette</li>
                                        <li>Gift Certificates</li>
                                </ul>
                                -->
                                <?php
                                    $args = array(
                                        'theme_location' => 'primary'
                                    );
                                ?>
                                <?php wp_nav_menu($args); ?>
                            </td>
                        </tr>
                    </table>
                </div><!-- close: DESKTOP NAVIGATION -->
            </div><!-- close: ROW -->

        </div><!-- close: CONTAINER -->
    </div><!-- close: NAV -->

    <!-- MOBILE NAVIGATION -->
    <div class="nav__mobile">
        <table>
            <tr>
                <!-- LEFT -->
                <td class="nav__mobile-left">
                    <i class="fa fa-bars nav__mobile-bars"></i>
                </td>
                <!-- RIGHT -->
                <td class="nav__mobile-right">
                    <!-- <img class="nav__logo" src="./img/nv-logo.png"> -->
                    <i class="fa fa-envira"></i> &nbsp; NV<strong>M&W</strong>
                </td>
            </tr>
        </table>
        <!-- MOBILE MENU -->
        <div class="nav__mobile-menu">
                <!-- <ul class="nav__mobile-menu-content">
                        <li>HOME</li>
                        <li>MASSAGE</li>
                        <li>SPA PACKAGES</li>
                        <li>GIFT WHATEVER</li>
                        <li><SEX SERVICES</li>
                    </ul> -->
            <?php
                $args = array(
                    'theme_location' => 'primary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </div><!-- close: MOBILE NAV -->

    <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>

            <!-- SLIDE 1 -->
            <div>
                <?php if(has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail(); ?>
                </div>
                <?php endif; ?>

                <div class="text__background">
                    <div class="text">
                        <h1 class="intro__headline"><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div><!-- close: ROW -->

        <!-- PAGE CONTENT -->
        <div class="row">
            <div class="page__content">
                <?php the_content(); ?>
            </div><!-- close: PAGE CONTAINER -->
        </div><!-- close: ROW -->

        <?php endwhile; ?>
    <?php endif; ?>

   <?php get_footer(); ?>