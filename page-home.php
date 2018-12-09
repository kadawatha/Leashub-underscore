
<?php
get_header();
?>

<div class="banner-agile-text">
    <div class="container">
        <div class="banner-text-size-w3ls">
            <h3 class="text-banner-agile text-uppercase text-white font-weight-bold">
                latest & exclusive collections for Vehicle Lovers
            </h3>
            <a href="about.html" class="btn button-style">Read More</a>
        </div>
    </div>
</div>
<!-- //banner text -->
<img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/casr.png" alt="" class="img-fluid-md fashion-img">
</div>

<!-- banner bottom -->
<div class="banner-bottom-agile text-center py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="mb-lg-5 mb-sm-4 mb-3">
            <h3 class="title-wthree mb-2">
                Welcome To<span class="mt-2 text-uppercase font-weight-bold">Our Look Site</span></h3>
        </div>
        <!-- //heading title -->
        <p class="para-bottom-wthree">Elit sedc labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud
            exercitation ullamco. Sed semper leo metus, a lacinia eros semper at sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.</p>

    </div>
</div>
<!-- //banner bottom -->




<?php the_content(); ?>



<!-- grids -->
<div class="serives-agile py-5 bg-light">
    <div class="container py-xl-5 py-lg-3">
        <div class="row support-bottom">

            <?php $the_query = new WP_Query( 'posts_per_page=3' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>


                <?php

                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.

                    ?>


                    <div class="col-lg-4 support-grid">
                        <div class="back-icon-wthree bg-white p-5">
                            <div class="bg-light p-lg-4 p-3 icon-button-w3">

                                <?php the_post_thumbnail('thumbnail');  ?>

                            </div>


                            <h5 class="text-dark mt-4 mb-3">Years Experience</h5>

                            <p>Ut enim ad minima veniam, quis nostrum ullam.</p>

                            <a href="about.html" class="btn button-2 text-dark p-0 mt-4">Click Here <i class="fa fa-caret-right" aria-hidden="true"></i></a>

                        </div>
                    </div>



                    <?PHP


                }

                ?>


                <?php
            endwhile;
            wp_reset_postdata();
            ?>













        </div>
    </div>
</div>
<!-- //grids -->

<!-- best in -->
<div class="models-agile py-5">
    <div class="container py-xl-5 py-lg-3">
        <div class="row">
            <div class="offset-xl-2"></div>
            <div class="col-xl-5 col-md-6 left-models mt-lg-5 mt-3 pt-lg-4">
                <!-- heading title -->
                <div class="">
                    <h3 class="title-wthree mb-3">
                        Look Website<span class="mt-2 text-uppercase font-weight-bold">We Are Best In</span></h3>
                    <p class="">Sed semper leo metus, a lacinia eros semper at sed do eiusmod tempor incididunt ut labore et dolore
                        magnaaliqua.</p>
                    <a href="about.html" class="btn button-3 button-style mt-5">Leran More</a>
                </div>
                <!-- //heading title -->
            </div>
            <div class="col-xl-5 col-md-6 right-models text-center mt-md-0 mt-5">
                <div class="row">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body py-lg-5 py-4">
                                <i class="fa fa-spinner" aria-hidden="true"></i>
                                <h5 class="card-title mt-3">category zero</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body py-lg-5 py-4">
                                <i class="fa fa-female" aria-hidden="true"></i>
                                <h5 class="card-title mt-3">category one</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body py-lg-5 py-4">
                                <i class="fa fa-magic" aria-hidden="true"></i>
                                <h5 class="card-title mt-3">category two</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card">
                            <div class="card-body py-lg-5 py-4">
                                <i class="fa fa-paint-brush" aria-hidden="true"></i>
                                <h5 class="card-title mt-3">category three</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //best in -->

<!-- pricing -->
<section class="pricing py-5" id="pricing">
    <div class="container-fluid">
        <div class="inner-sec-w3layouts">
            <div class="row">
                <div class="col-xl-5 price-left p-0">

                </div>
                <div class="col-xl-7 price-right">
                    <div class="tabs">
                        <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                   aria-selected="true">Weekly</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                   aria-selected="false">Monthly</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="menu-grids mt-4">
                                    <div class="row t-in">
                                        <div class="col-md-6 price-main-info text-center">
                                            <div class="price-inner card box-shadow">

                                                <div class="card-body">
                                                    <h4 class="text-uppercase mb-3">Trendy</h4>
                                                    <h5 class="card-title pricing-card-title">
                                                        <span class="align-top">$</span>30

                                                    </h5>
                                                    <ul class="pricing-lists list-unstyled mt-3 mb-4">
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                    </ul>
                                                    <div class="log-in mt-md-3 mt-2">
                                                        <a class="btn text-uppercase" href="single.html">
                                                            Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 price-main-info text-center mt-md-0 mt-4">
                                            <div class="price-inner card box-shadow">

                                                <div class="card-body">
                                                    <h4 class="text-uppercase mb-3">Models</h4>
                                                    <h5 class="card-title pricing-card-title">
                                                        <span class="align-top">$</span>90

                                                    </h5>
                                                    <ul class="pricing-lists list-unstyled mt-3 mb-4">
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                    </ul>
                                                    <div class="log-in mt-md-3 mt-2">
                                                        <a class="btn text-uppercase" href="single.html">
                                                            Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="menu-grids mt-4">
                                    <div class="row t-in">
                                        <div class="col-md-6 price-main-info text-center">
                                            <div class="price-inner card box-shadow">

                                                <div class="card-body">
                                                    <h4 class="text-uppercase mb-3">Fashions</h4>
                                                    <h5 class="card-title pricing-card-title">
                                                        <span class="align-top">$</span>60

                                                    </h5>
                                                    <ul class="pricing-lists list-unstyled mt-3 mb-4">
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                    </ul>
                                                    <div class="log-in mt-md-3 mt-2">
                                                        <a class="btn text-uppercase" href="single.html">
                                                            Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 price-main-info text-center mt-md-0 mt-4">
                                            <div class="price-inner card box-shadow">

                                                <div class="card-body">
                                                    <h4 class="text-uppercase mb-3">New Trend</h4>
                                                    <h5 class="card-title pricing-card-title">
                                                        <span class="align-top">$</span>80

                                                    </h5>
                                                    <ul class="pricing-lists list-unstyled mt-3 mb-4">
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                        <li>Lorem Ipsum is simply</li>
                                                    </ul>
                                                    <div class="log-in mt-md-3 mt-2">
                                                        <a class="btn text-uppercase" href="single.html">
                                                            Read More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //pricing -->

<!-- model slider -->
<div class="slider-middle py-5" id="models">
    <div class="container py-xl-5 py-lg-3">
        <h3 class="title-wthree text-center mb-sm-5 mb-4">
            Trendy Styles<span class="mt-2 text-uppercase font-weight-bold">Lorem Ipsum</span></h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">
            <div class="carousel-inner row w-100 mx-auto" role="listbox">




                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 1" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m1.jpg" alt="slide 1">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 3" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m2.jpg" alt="slide 2">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 4" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m3.jpg" alt="slide 3">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="carousel-item col-md-3 active">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 5" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m4.jpg" alt="slide 4">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 6" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m5.jpg" alt="slide 5">
                            </a>
                        </div>
                    </div>
                </div>




                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 7" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m6.jpg" alt="slide 6">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item col-md-3 ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 8" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m7.jpg" alt="slide 7">
                            </a>
                        </div>
                    </div>
                </div>



                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m9.jpg" alt="slide 8">
                            </a>
                        </div>

                    </div>
                </div>



                <div class="carousel-item col-md-3  ">
                    <div class="panel panel-default">
                        <div class="panel-thumbnail">
                            <a href="#" title="image 2" class="thumb">
                                <img class="img-fluid mx-auto d-block" src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/m8.jpg" alt="slide 9">
                            </a>
                        </div>

                    </div>
                </div>


            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next text-faded" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<!-- //model slider -->

<!-- subscribe -->
<div class="calls-agile py-5">
    <div class="container py-xl-5 py-md-3">
        <div class="row">
            <div class="col-xl-7 mt-xl-3">
                <div class="subscribe-info-w3l text-center bg-white rounded p-md-5 py-md-0 py-5 px-md-0 px-4">
                    <form action="#" method="post" class="bg-light p-4">
                        <i class="fa fa-envelope mr-sm-3 mr-2" aria-hidden="true"></i>
                        <input type="email" name="email" placeholder="Enter your Email..." required="">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="col-xl-5 left-models pl-xl-5 mt-xl-0 mt-sm-5 mt-4">
                <!-- heading title -->
                <div class="">
                    <h3 class="title-wthree mb-3"><span class="mt-2 text-uppercase font-weight-bold">Lorem Ipsum</span></h3>
                    <p class="">Sed semper leo metus, a lacinia eros semper at sed do eiusmod tempor incididunt ut.</p>
                    <a href="contact.html" class="btn button-3 button-style mt-5">Contact Us</a>
                </div>
                <!-- //heading title -->
            </div>
        </div>
    </div>
</div>
<!-- //subscribe -->




<!---->
<!--<div  class="container">-->
<!---->
<!--<ul>-->
<!--    // Define our WP Query Parameters-->
<!--    --><?php //$the_query = new WP_Query( 'posts_per_page=2' ); ?>
<!---->
<!--    // Start our WP Query-->
<!--    --><?php //while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
<!---->
<!--        // Display the Post Title with Hyperlink-->
<!--        <li><a href="--><?php //the_permalink() ?><!--">--><?php //the_title(); ?><!--</a></li>-->
<!---->
<!--        // Display the Post Excerpt-->
<!--        <li>--><?php //the_excerpt(__('(more…)')); ?><!--</li>-->
<!---->
<!--        // Repeat the process and reset once it hits the limit-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--        --><?php
//    endwhile;
//    wp_reset_postdata();
//    ?>
<!--</ul>-->
<!---->
<!--</div>-->
<!---->
<!---->
<!---->









<?php

get_footer();


?>


