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

    <!-- JQUERY 3.2.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <!-- SCRIPTS -->
    <script type="text/javascript" href="<?php bloginfo('template_url'); ?>/js/navigation.js"></script>
    <!-- SCROLL REVEAL -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script>

    // SCROLL FUNCTION
    $(window).scroll(function(){

        if ($(window).scrollTop() >= 400) {
            $('.nav__desktop').css({
                "background": "rgba(255, 255, 255, 0.7)"
            });
            $('.nav__backdrop').css({
                "background": "rgba(255, 255, 255, 0.7)"
            });
            $('.nav').css({
                "paddingTop": "0",
                "paddingBottom": "0",
                "borderBottom": "1px solid #000"
            });

            $('.nav__desktop-top').hide();
            $('.nav__desktop-bottom').show();

        } else {
            $('.nav').css({
                "paddingTop": "20px",
                "paddingBottom": "20px",
                "borderBottom": "0px",
                "background": "#fff"
            });
            $('.nav__desktop').css({
                "background": "transparent"
            });

            $('.nav__desktop-bottom').hide();
            $('.nav__desktop-top').show();
        }

        if ($(window).scrollTop() <= 180) {
            $('.nav__desktop').css({
                "background": "transparent"
            });
        }
    });
   </script>

   <script>
   // DESKTOP CLICK FUNCTION
    $('.nav__desktop-bars').click(function() {
        $('.nav__desktop-top').hide();
        $('.nav__desktop-bottom').show(); 
    });
    
    // MOBILE CLICK FUNCTION
    $('.nav__mobile-bars').click(function() {
        
            // SWITCH ICONS
            if ($('.nav__mobile-bars').hasClass('fa-bars')) {
                $('.nav__mobile-bars').removeClass('fa-bars').addClass('fa-times');
            } else {
                $('.nav__mobile-bars').removeClass('fa-times').addClass('fa-bars');
            }
            
            // SHOW MOBILE MENU
            $('.nav__mobile-menu').toggle('slow');
    });
   </script>

   <script>
   //SLIDESHOW
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

   <script>
   // REVEAL
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