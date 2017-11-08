    <!-- FOOTER 1: full width, sitemap, links -->
    <section class="footer__one">
        <div class="twelve column">
            <?php
                $args = array(
                    'theme_location' => 'secondary'
                );
            ?>
            <?php wp_nav_menu($args); ?>
        </div>
    </section><!-- close: FOOTER 1 -->

    <!-- FOOTER 2: contacting sections -->
    <section class="footer__two">
        <div class="twelve column">
            <ul class="footer__two-list">
                <li class="footer__block">
                    <a href="<?php echo get_theme_mod('footer_two_block_one'); ?>">
                        <?php echo get_theme_mod('footer_two_block_one_text'); ?>
                    </a>
                </li>
                <li class="footer__block">
                    <a href="<?php echo get_theme_mod('footer_two_block_two'); ?>">
                        <?php echo get_theme_mod('footer_two_block_two_text'); ?>
                    </a>
                </li>
                <li class="footer__block">
                    <a href="<?php echo get_theme_mod('footer_two_block_three'); ?>">
                        <?php echo get_theme_mod('footer_two_block_three_text'); ?>
                    </a>
                </li>
                <li class="footer__block">
                    <a href="<?php echo get_theme_mod('footer_two_block_four'); ?>">
                        <?php echo get_theme_mod('footer_two_block_four_text'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </section><!-- close: FOOTER 2 -->

    <!-- ATTRIBUTION -->
    <section class="attribution__section">
        <div class="row">
            <div class="twelve column">
                <p class="attribution__text">Website Created by James Rogers</p>
            </div>
        </div>
    </section>

    <!-- MOBILE FOOTER -->
    <section class="footer__mobile">
        <div class="row">
            <table>
                <tr>
                    <td class="footer__mobile-block" style="width: 25%;"><i class="fa fa-phone"></i></td>
                    <td class="footer__mobile-block" style="width: 25%;"><i class="fa fa-instagram"></i></td>
                    <td class="footer__mobile-block" style="width: 25%;"><i class="fa fa-yelp"></i></td>
                    <td class="footer__mobile-block" style="width: 25%;">BOOK ONLINE</td>
                 </tr>
            </table>    
        </div>
    </section>


    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

    <!-- NAVIGATION -->
    <script>
        jQuery(window).scroll(function(){

            if (jQuery(window).scrollTop() >= 400) {
                jQuery('.nav__desktop').css({
                    "background": "rgba(255, 255, 255, 0.7)"
                });
                jQuery('.nav__backdrop').css({
                    "background": "rgba(255, 255, 255, 0.7)"
                });
                jQuery('.nav').css({
                    "paddingTop": "0",
                    "paddingBottom": "0",
                    "borderBottom": "1px solid #000"
                });

                jQuery('.nav__desktop-top').hide();
                jQuery('.nav__desktop-bottom').show();

            } else {
                jQuery('.nav').css({
                    "paddingTop": "20px",
                    "paddingBottom": "20px",
                    "borderBottom": "0px",
                    "background": "#fff"
                });
                jQuery('.nav__desktop').css({
                    "background": "transparent"
                });

                jQuery('.nav__desktop-bottom').hide();
                jQuery('.nav__desktop-top').show();
            }

            if (jQuery(window).scrollTop() <= 180) {
                jQuery('.nav__desktop').css({
                    "background": "transparent"
                });
            }
        });
   </script>

    <!-- CLICK FUNCTIONS -->
    <script>
        // DESKTOP CLICK FUNCTION
        jQuery('.nav__desktop-bars').click(function() {
        jQuery('.nav__desktop-top').hide();
        jQuery('.nav__desktop-bottom').show(); 
        });
        
        // MOBILE CLICK FUNCTION
        jQuery('.nav__mobile-bars').click(function() {
            
                // SWITCH ICONS
                if (jQuery('.nav__mobile-bars').hasClass('fa-bars')) {
                    jQuery('.nav__mobile-bars').removeClass('fa-bars').addClass('fa-times');
                } else {
                    jQuery('.nav__mobile-bars').removeClass('fa-times').addClass('fa-bars');
                }
                
                // SHOW MOBILE MENU
                jQuery('.nav__mobile-menu').toggle('slow');
        });
    </script>

    <!-- SLIDESHOW -->
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
        
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }
        
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }
        
        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) {slideIndex = 1}    
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
        }
    </script>

    <!-- REVEALING -->
    <script>
        window.sr = ScrollReveal({ reset: true });
        sr.reveal('.section__one');
        sr.reveal('.section__two');
        sr.reveal('.section__three');
        sr.reveal('.section__four');
        sr.reveal('.section__five');
        sr.reveal('.section__six');
        sr.reveal('.section__seven');
    </script>


</body>
</html>