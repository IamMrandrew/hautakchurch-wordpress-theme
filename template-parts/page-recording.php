<?php
/**
 * Template Name: 講道錄音
 * 
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package hautakchurch
 */

get_header();
?>


<!-- <h2 class="my-4"></h2>         -->

<!--<img class="my-2" src="#" width="100%">
    <img class="my-2" src="img/cover1.jpg" width="100%"> -->
<div class="container content-wrapper">
    <h1 style="padding: 15px"><?php the_title() ?></h1>
    <!-- <form action="">
        <select name="orderby" id="orderby">
            <option value="date">new to old</option>
        </select>
    </form> -->

    <div class="row">
    <?php
    $recordingQuery = new WP_Query(array(
        'post_type'     => 'recording',
        'post_status'   => 'publish',
        'orderby'       => 'date',
        'order'         => 'DESC',
        'posts_per_page' => 10,
        'paged'         => get_query_var('paged')
        // 'category_name' => '講道錄音'`
    ));

    while ( $recordingQuery->have_posts() ) :
        $recordingQuery->the_post();
    ?>
        <div class="col-lg-4 my-2">
        <?php
        get_template_part( 'template-parts/content', 'recording' );
        ?>
    </div>
    <?php
    endwhile; // End of the loop.

    the_posts_navigation();

    echo paginate_links(array(
        'total' => $recordingQuery->max_num_pages
    ));
    ?>

    </div>

    
</div>


 <?php

get_footer();
