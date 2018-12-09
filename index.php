
<?php
get_header('new');
?>
</div>
<!-- //banner -->
<div class="breadcrumb-agile">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Blog Page</li>
        </ol>
    </nav>
</div>




<div class="blog-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="title-wthree mb-2">
                Some More<span class="mt-2 text-uppercase font-weight-bold">Blog Page</span></h3>
        </div>
        <!-- //heading title -->


        <div class="row blog-content">
            <!-- left side -->
            <div class="col-lg-8 blog_section">



                <div class="card my-4">

                    <?php




                    if ( have_posts() ) :

                        if ( is_home() && ! is_front_page() ) :
                            ?>
                            <header>
                                <h1 class="page-title screen-reader-text"></h1>
                            </header>
                        <?php
                        endif;




                        while ( have_posts() ) :

                            ?>

                            <?php  the_post(); ?>

                            <?php get_template_part( 'template-parts/content', get_post_type() );  ?>


                        <?php
                        endwhile;

                        the_posts_navigation();

                    else :
                        get_template_part( 'template-parts/content', 'none' );
                    endif;

                    ?>

                </div>


                <nav aria-label="Page navigation example">
                    <ul class="pagination mt-5">

<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

query_posts(array(
    'post_type' => 'post', // You can add a custom post type if you like
    'paged' => $paged,
    'posts_per_page' => 2 // limit of posts
));

if ( have_posts() ) :  while ( have_posts() ) : the_post();

    // post content goes here...

endwhile;




    post_pagination();




else :

// no posts found message goes here...

endif;
?>



               </ul>
                </nav>




                <!-- //left side -->
            </div>
            <!-- right side -->
            <div class="col-lg-4 event-right mt-lg-0 mt-sm-5 mt-4">
                <div class="event-right1">
                    <div class="category-story tech-btm">
                        <h3 class="blog-title text-dark mb-3">More Stories</h3>
                        <ul class="list-unstyled">
                            <li class="border-bottom mb-3 pb-3">
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>
                            <li class="border-bottom mb-3 pb-3">
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>
                            <li class="border-bottom mb-3 pb-3">
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>
                            <li class="border-bottom mb-3 pb-3">
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>
                            <li class="border-bottom mb-3 pb-3">
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>
                            <li>
                                <i class="fa fa-caret-right mr-2"></i>
                                <a href="#" class="text-danger">sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</a>
                            </li>

                        </ul>
                    </div>
                    <div class="categories my-4">
                        <h3 class="blog-title text-dark mb-3">Categories</h3>
                        <ul class="list-group single">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Cras justo odio
                                <span class="badge badge-primary badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Dapibus ac facilisis in
                                <span class="badge badge-primary badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Morbi leo risus
                                <span class="badge badge-primary badge-pill">1</span>
                            </li>
                        </ul>
                    </div>
                    <div class="search1">
                        <h3 class="blog-title text-dark mb-3">Search</h3>
                        <form class="form-inline" action="#" method="post">
                            <input class="form-control rounded-0 mr-sm-2" type="search" placeholder="Search Here" aria-label="Search"
                                   required>
                            <button class="btn bg-dark text-white rounded-0 mt-3" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="posts p-4 border my-4">
                        <h3 class="blog-title text-dark mb-3">Our Events</h3>
                        <div class="posts-grids">
                            <div class="row posts-grid">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="single.html">
                                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/g9.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>

                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="single.html">
                                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/g2.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>

                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="single.html">
                                        <img src="<?php bloginfo( 'stylesheet_directory' ) ?>/images/g3.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tags p-4 border">
                        <h3 class="blog-title text-dark">Recent Tags</h3>
                        <ul class="mt-4">
                            <li>
                                <a href="single.html" class="text-dark border">Designs</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Growth</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Latest</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Price</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Tools</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Style</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Model</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">New Trends</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Advantage</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Excellent</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Beautiful</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Styles</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Research</a>
                            </li>
                            <li>
                                <a href="single.html" class="text-dark border">Trendy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- //right side -->
        </div>
    </div>
</div>








<?php
get_footer();
?>














