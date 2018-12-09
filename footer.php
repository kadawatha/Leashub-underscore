<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package leashub
 */

?>

	</div><!-- #content -->



<footer class="footer-emp-w3ls py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row footer-top">
            <div class="col-lg-5 footer-grid-wthree">
                <h1 class="footer-title text-white mb-4">Get In Touch</h1>
                <div class="contact-info">
                    <h4 class="text-light text-uppercase mb-2">Location :</h4>
                    <p>Lorem ipsum dolor sit amet <span>Lorem ipsum dolor sit amet.</span></p>
                    <div class="phone mt-4 pt-2">
                        <h4 class="text-light text-uppercase mb-2">Contact :</h4>
                        <p>Phone : +121 098 8907 9987</p>
                        <p>Email :
                            <a href="mailto:info@example.com">info@example.com</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-wthree mt-lg-0 mt-4">
                <h2 class="footer-title text-white mb-4">Quick Links</h2>
                <ul class="links list-unstyled">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li class="my-2">
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a class="scroll" href="#pricing">Plans</a>
                    </li>
                    <li class="my-2">
                        <a href="gallery.html">Gallery</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 footer-grid-wthree mt-lg-0 mt-5">
                <div class="footer-title">
                    <a class="footer_font_style" href="index.html">
                        <img src="images/logo2.png" class="img-fluid" alt="">Leashub
                    </a>
                </div>
                <p class="copy-right text-center mt-4">&copy; <?php echo date("Y"); ?> Leashub. All Rights Reserved | Design by
                    <a href="admoo.lk"> admoo.lk </a>
                </p>
            </div>
        </div>
    </div>
</footer>



</div><!-- #page -->






<!-- Js files -->
<!-- JavaScript -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-2.2.3.min.js"></script>
<!-- Default-JavaScript-File -->

<!-- navigation -->
<!-- dropdown smooth -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown smooth -->
<!-- fixed nav -->
<script>
    $(window).scroll(function () {
        if ($(document).scrollTop() > 50) {
            $('nav').addClass('shrink');
        } else {
            $('nav').removeClass('shrink');
        }
    });
</script>
<!-- //fixed nav -->
<!-- //navigation -->

<!-- carousel -->
<script src="<?php bloginfo('template_directory'); ?>/js/carousel.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');  ?>/css/carousel.css" type="text/css" media="all" />
<!-- //carousel -->

<!-- smooth scrolling -->
<script src="<?php bloginfo('template_directory'); ?>/js/SmoothScroll.min.js"></script>
<!-- move-top -->
<script src="<?php bloginfo('template_directory'); ?>/js/move-top.js"></script>
<!-- easing -->
<script src="<?php bloginfo('template_directory'); ?>/js/easing.js"></script>
<!--  necessary snippets for few javascript files -->
<script src="<?php bloginfo('template_directory'); ?>/js/look.js"></script>

<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //Js files -->









<?php wp_footer(); ?>


</body>

</html>




