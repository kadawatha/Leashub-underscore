


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

<div class="blog-w3l py-5">
    <div class="container py-xl-5 py-lg-3">
        <!-- heading title -->
        <div class="text-center mb-lg-5 mb-4">
            <h3 class="title-wthree mb-2">
                Some More<span class="mt-2 text-uppercase font-weight-bold">Single Page</span></h3>
        </div>
        <!-- //heading title -->
        <div class="row blog-content">
            <!-- left side -->
            <div class="col-lg-8 left-blog-info text-left">
                <div class="blog-grid-top">



                    <div class="b-grid-top">
                        <div class="blog_info_left_grid">
                            <a href="single.html">
                                <img src="images/blog3.jpg" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>



                    <?php
                    while ( have_posts() ) :
                        the_post();

                        get_template_part( 'template-parts/content-page');

                        the_post_navigation();

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                    endwhile; // End of the loop.
                    ?>









                    <p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                        labore dolore reprehender</p>








                    <p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut
                        <span class="text-danger">aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore
								reprehender</span>
                    </p>





                    <div class="offset-lg-2 mt-5">
                        <p>Elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis
                            nostrud
                            exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                            labore
                            dolore reprehender</p>
                        <p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                            labore dolore reprehender</p>
                        <p>Jabore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut
                            aliquip exea
                            <span class="text-danger">commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</span>
                        </p>
                    </div>
                    <h3>
                        <a href="single.html" class="single-text text-dark font-weight-light">Nemo enim ipsam voluptatem quia
                            voluptas
                            sit aspernatur aut odit aut fugit 2018</a>
                    </h3>
                    <p class="my-3">Ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta
                        labore dolore reprehender</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et
                        dolore magna
                        aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo
                        consequat
                        duis
                        aute irudre dolor in elit sed uta labore dolore reprehender</p>
                </div>

                <div class="comment-top mt-4">
                    <h4>Comments</h4>
                    <div class="media">
                        <img src="images/te1.jpg" alt="" class="img-fluid rounded" />
                        <div class="media-body pt-xl-2 pl-3">
                            <h5 class="mb-2">Joseph Goh</h5>
                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
                                cursus eros.
                                Cras a ornare elit.</p>

                            <div class="media my-5">
                                <a class="d-flex pr-3" href="#">
                                    <img src="images/te2.jpg" alt="" class="img-fluid rounded" />
                                </a>
                                <div class="media-body pt-xl-2">
                                    <h5 class="mb-2">Richard Spark</h5>
                                    <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="media">
                        <img src="images/te3.jpg" alt="" class="img-fluid rounded" />
                        <div class="media-body  pt-xl-2 pl-3">
                            <h5 class="mb-2">Goh James</h5>
                            <p>Lorem Ipsum convallis diam consequat magna vulputate malesuada. id dignissim sapien velit id felis ac
                                cursus eros.
                                Cras a ornare elit.</p>
                        </div>
                    </div>
                </div>
                <div class="comment-top mt-5">
                    <h4>Leave a Comment</h4>
                    <div class="comment-bottom">
                        <form action="#" method="post">
                            <div class="form-group">
                                <input class="form-control" type="text" name="Name" placeholder="Name" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="email" name="Email" placeholder="Email" required="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" name="Subject" placeholder="Subject" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="Message" placeholder="Message..." required=""></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- //left side -->

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
                                        <img src="images/g9.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>15/05/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="single.html" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="single.html">
                                        <img src="images/g2.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>23/05/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="single.html" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row posts-grid mt-4">
                                <div class="col-lg-4 col-md-3 col-4 posts-grid-left pr-0">
                                    <a href="single.html">
                                        <img src="images/g3.jpg" alt=" " class="img-fluid" />
                                    </a>
                                </div>
                                <div class="col-lg-8 col-md-7 col-8 posts-grid-right mt-lg-0 mt-md-5 mt-sm-4">
                                    <h4>
                                        <a href="single.html" class="text-dark">Sed ut perspiciatis unde omni</a>
                                    </h4>
                                    <ul class="wthree_blog_events_list mt-2">
                                        <li class="mr-2 text-dark">
                                            <i class="fa fa-calendar mr-2" aria-hidden="true"></i>13/06/18</li>
                                        <li>
                                            <i class="fa fa-user" aria-hidden="true"></i>
                                            <a href="single.html" class="text-dark ml-2">Admin</a>
                                        </li>
                                    </ul>
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



