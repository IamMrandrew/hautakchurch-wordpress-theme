<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hautakchurch
 */

?>


<!-- <h2 class="my-4"></h2>         -->

<!--<img class="my-2" src="#" width="100%">
    <img class="my-2" src="img/cover1.jpg" width="100%"> -->
<div class="">

    <div class="row my-2">
        <div class="col">
            <h3 style="font-size: 17px;"><a href="<?php the_permalink(); ?>" style="color: #202020"><?php the_title(); ?></a></h3>  
            <span class="blockquote-footer" style="font-size: 13px"><?php echo get_the_date(); ?></span>
            <p style="font-size: 16px"><?php the_excerpt(); ?></p>
        </div>
    </div>


    <?php 
    // while ( have_posts() ) :
    //     the_post();

    //     get_template_part( 'template-parts/content', 'page' );


    // endwhile; // End of the loop.
    ?>
</div>

