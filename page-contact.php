
<?php
get_header('new');
?>

</div>

<div class="breadcrumb-agile">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
</div>
<!-- //page details -->

<!-- contact -->
<section class="wthree-row w3-contact py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="title-wthree mb-2">
                Get In Touch<span class="mt-2 text-uppercase font-weight-bold">Contact Us</span></h3>
        </div>
        <!-- //heading title -->
        <div class="row contact-form py-3">
            <!-- contact map -->
            <div class="col-lg-6 map text-center">
                <h4>Our world wide range of Branches </h4>
                <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/map.jpg" alt="" class="img-fluid" />
            </div>
            <!-- //contact map -->
            <!-- contact form -->
            <div class="col-lg-6 wthree-form-left mt-lg-0 mt-5">
                <div class="contact-top1">


                      <?php  the_content();  ?>



                </div>
            </div>
            <!-- //contact form -->
        </div>
    </div>
</section>


<?php
get_footer();
?>











