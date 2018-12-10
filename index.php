
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
                <span class="mt-2 font-weight-bold">BEST DEALS <small style="font-size: 22px;font-weight: bold;">from</small> LEASE HuB </span></h3>
        </div>
        <!-- //heading title -->


        <div class="row blog-content">
            <!-- left side -->


            <div class="container">



                        <!-- //heading title -->
                        <div class="row team-bottom">

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
    'posts_per_page' => 6 // limit of posts
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
            <!-- //right side -->
        </div>
    </div>
</div>








<?php
get_footer();
?>














