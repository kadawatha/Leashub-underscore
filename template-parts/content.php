<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package leashub
 */

?>

<div id="margin-top-bottom" class="col-lg-6 support-grid">
    <div class="back-icon-wthree bg-white p-5">

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <?php
    if (has_post_thumbnail()) {
        ?>
        <div class="img-fluid">
            <?php leashub_post_thumbnail(); ?>
        </div>
        <br>
        <?php
    }
    ?>

        <?php
        if ( is_singular() ) :
            the_title( '<h1 style="font-weight: bold;color: black;font-family: Arial;" class="card-title">', '    <p style="font-weight: bold;color: black;font-family: Arial;" class="card-title">   </p></h1>' );
        else :
            the_title( '<h2 style="font-weight: bold;color: black;font-family: Arial;" class="card-title"><a href="#" rel="bookmark">', '</a></h2>' );
        endif;

        if (get_field('manufactur')){
            $manufactur=get_field('manufactur');
         }

        echo "<h4 style='margin-top: -5px; color: black;font-family: Arial;margin-left: 5px;font-size: 16px; '>".$manufactur."</h4>";

        if ( 'post' === get_post_type() ) :
            ?>
            <div class="entry-meta">
                <?php

                ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>



        <?php


        the_excerpt();


        ?>

      <div class="topandbottom"></div>
    <table  id="customers">
        <tr>
            <th>Annual premium</th>
            <th>Down Payment</th>
        </tr>


        <?php
             if (get_field('annual_premium')){
                $annualpremium=get_field('annual_premium');
             }
             if (get_field('Down Payment')){
                 $downpayment=get_field('down_payment');
             }


        ?>



        <tr>
            <td><p class="circle-line">LKR <?php echo $annualpremium; ?> </p> </td>
            <td><p class="circle-line">  LKR <?php echo $downpayment; ?> </p> </td>
        </tr>

    </table>

    <a href="#" class="btn btn-primary blog-button mt-3">More Details</a>



</article><!-- #post-<?php the_ID(); ?> -->



</div>
</div>







