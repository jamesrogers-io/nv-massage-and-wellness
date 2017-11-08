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

    <!-- INTRO -->
    <section class="intro">
        <div class="intro__content">
            <div class="slideshow-container">
                
                <!-- SLIDE 1 -->
                <div class="mySlides fade">
                  <div class="numbertext">1 / 3</div>
                  <img src="<?php echo get_theme_mod('slide_one_image'); ?>" style="width:100%">
                  <div class="text__background">
                     <div class="text">
                        <h1 class="intro__headline"><?php echo get_theme_mod('slide_one_heading', 'Default Title'); ?></h1>
                        <p class="intro__text"><?php echo get_theme_mod('slide_one_description', 'Default Description'); ?></p>
                        <a class="button intro__button" href="<?php echo get_theme_mod('slide_one_button_url', '#section-two'); ?>">
                          <?php echo get_theme_mod('slide_one_button_text', 'CLICK ME'); ?>
                        </a>
                     </div>
                  </div>
                </div>
                <!-- SLIDE 2 -->
                <div class="mySlides fade">
                  <div class="numbertext">2 / 3</div>
                  <img src="<?php echo get_theme_mod('slide_two_image'); ?>" style="width:100%">
                  <div class="text__background">
                     <div class="text">
                        <h1 class="intro__headline"><?php echo get_theme_mod('slide_two_heading', 'Default Title'); ?></h1>
                        <p class="intro__text"><?php echo get_theme_mod('slide_two_description', 'Default Description'); ?></p>
                        <a class="button intro__button" href="<?php echo get_theme_mod('slide_two_button_url', '#section-two'); ?>">
                          <?php echo get_theme_mod('slide_two_button_text', 'CLICK ME'); ?>
                        </a>
                     </div>
                  </div>
                </div>
                <!-- SLIDE 3 -->
                <div class="mySlides fade">
                  <div class="numbertext">3 / 3</div>
                  <img src="<?php echo get_theme_mod('slide_three_image'); ?>" style="width:100%">
                  <div class="text__background">
                     <div class="text">
                     <h1 class="intro__headline"><?php echo get_theme_mod('slide_three_heading', 'Default Title'); ?></h1>
                        <p class="intro__text"><?php echo get_theme_mod('slide_three_description', 'Default Description'); ?></p>
                        <a class="button intro__button" href="<?php echo get_theme_mod('slide_three_button_url', '#section-two'); ?>">
                          <?php echo get_theme_mod('slide_three_button_text', 'CLICK ME'); ?>
                        </a>
                     </div>
                  </div>
                </div>
                
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>
        </div>
    </section>

    <!-- SECTION 1: big left image, text on right -->
    <section class="section__one">
            <div class="row">
                <!-- LEFT COLUMN -->
                <div class="section__one-left seven column">
                    <img src="<?php echo get_theme_mod('section_one_image'); ?>">
                </div>
                <!-- RIGHT COLUMN -->
                <div class="section__one-right five column">
                    <h1 class="section__one-heading"><?php echo get_theme_mod('section_one_heading', 'Section One'); ?></h1>
                    <p class="section__one-text"><?php echo get_theme_mod('section_one_description', 'Section One Description'); ?></p>
                </div>
            </div><!-- close: ROW -->
    </section><!-- close: SECTION 1 -->

    <!-- SECTION 2: three boxes -->
    <section class="section__two">
            <div class="row">
                <!-- BOX 1 -->
                <div class="section__two-block four column">
                    <img src="<?php echo get_theme_mod('block_one_image'); ?>">
                    <h3 class="section__two-heading"><?php echo get_theme_mod('block_one_heading', 'Block One'); ?></h3>
                    <p class="section__two-text"><?php echo get_theme_mod('block_one_description', 'Section One'); ?></p>
                </div>

                <!-- BOX 2 -->
                <div class="section__two-block four column">
                    <img src="<?php echo get_theme_mod('block_two_image'); ?>">
                    <h3 class="section__two-heading"><?php echo get_theme_mod('block_two_heading', 'Block Two'); ?></h3>
                    <p class="section__two-text"><?php echo get_theme_mod('block_two_description', 'Block Two'); ?></p>
                </div>

                <!-- BOX 3 -->
                <div class="section__two-block four column">
                    <img src="<?php echo get_theme_mod('block_three_image'); ?>">
                    <h3 class="section__two-heading"><?php echo get_theme_mod('block_three_heading', 'Block Three'); ?></h3>
                    <p class="section__two-text"><?php echo get_theme_mod('block_three_description', 'Block Three'); ?></p>
                </div>
            </div>
    </section>

    <!-- SECTION 3: big intro-style image with a text box in the center -->
    <section class="section__three">
        <!-- OVERLAY -->
        <div class="section__three-outerbox">
            <img src="<?php echo get_theme_mod('section_three_image'); ?>">
            <div class="section__three-innerbox">
            <div class="section__three-text-container">
                <h1 class="section__three-heading"><?php echo get_theme_mod('section_three_heading', 'Section Three'); ?></h1>
                <p class="section__three-text"><?php echo get_theme_mod('section_three_description', 'Section Three'); ?></p>
            </div>
            </div>
        </div><!-- close: OVERLAY -->
    </section>

    <!-- SECTION 4: same as section 1, but reversed. -->
    <section class="section__four">
            <div class="row">
                <!-- LEFT COLUMN -->
                <div class="section__four-left five column">
                    <h1 class="section__four-heading"><?php echo get_theme_mod('section_four_heading'); ?></h1>
                    <p class="section__four-text"><?php echo get_theme_mod('section_four_description'); ?></p>               
                </div>
                <!-- RIGHT COLUMN -->
                <div class="section__four-right seven column">
                    <img src="<?php echo get_theme_mod('section_four_image'); ?>">
                </div>
            </div><!-- close: ROW -->
    </section><!-- close: SECTION 4 -->

    <!-- SECTION 5: same as section 3, different image -->
    <section class="section__five">
        <!-- OVERLAY -->
        <div class="section__five-outerbox">
            <img src="<?php echo get_theme_mod('section_five_image'); ?>">
            <div class="section__five-innerbox">
            <div class="section__five-text-container">
                <h1 class="section__five-heading"><?php echo get_theme_mod('section_five_heading'); ?></h1>
                <p class="section__five-text"><?php echo get_theme_mod('section_five_description'); ?></p>
            </div>
        </div>
    </div><!-- close: OVERLAY -->
    </section><!-- close: SECTION 5 -->

    <!-- SECTION 6: same as sections 4 and 1 -->
    <section class="section__six">
            <div class="row">
                <!-- LEFT COLUMN -->
                <div class="section__six-left five column">
                    <h1 class="section__four-heading"><?php echo get_theme_mod('section_six_heading'); ?></h1>
                    <p class="section__four-text"><?php echo get_theme_mod('section_six_description'); ?></p>                            
                </div>
                <!-- RIGHT COLUMN -->
                <div class="section__six-right seven column">
                    <img src="<?php echo get_theme_mod('section_six_image'); ?>">
                </div>
            </div><!-- close: ROW -->
    </section><!-- close: SECTION 6 -->

    <!-- SECTION 7: mailing list sign-up -->
    <section class="section__seven">
        <style>
            .section__seven {
                background: url(<?php echo get_theme_mod('section_seven_image'); ?>);
            }
        </style>
            
        <div class="section__seven-content">
            <h1 class="section__seven-heading"><?php echo get_theme_mod('section_seven_heading'); ?></h1>
            <p class="section__seven-text"><?php echo get_theme_mod('section_seven_description'); ?></p>
            <input type="email">
            <button>CLICK ME</button>
        </div>
    </section><!-- close: SECTION 7 -->

   <?php get_footer(); ?>