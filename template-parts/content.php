<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leashub
 */

?>
<div class="card my-4">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <div class="card-body text-center">

        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="card-title">', '</h1>' );
        else :
            the_title( '<h2 class="card-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
        endif;




        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php
                leashub_posted_on();
                leashub_posted_by();
                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>


    </div>


<?php
if (has_post_thumbnail()) {
    ?>
    <div>
        <?php leashub_post_thumbnail(); ?>
    </div>
    <?php
}
?>
    <div class="card-body text-center">

        <?php


        the_excerpt();


        ?>

        <a href="<?php  echo esc_url( get_permalink() )  ?>" class="btn btn-primary blog-button mt-3">Read More</a>

    </div><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
</div>