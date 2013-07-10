<?php
/*
Template Name: Page With Stream
 */
?>

<?php get_header(); ?>

    <div id="main">

	    <?php while ( have_posts() ) : the_post(); ?>

	        <h1><?php the_title(); ?></h1>

	        <?php the_content(); ?>

	    <?php endwhile; // end of the loop. ?>

        <?php
            $bookmarks = get_bookmarks();
            $feed_urls=array();
            foreach ( $bookmarks as $bookmark ) { 
                array_push($feed_urls, $bookmark->link_url);
            }

            echo SimplePieWP($feed_urls, array(
                'items_per_feed' => 5,
                'cache_duration' => 1800,
                'date_format' => 'j M Y, g:i a'
            ));
        ?>

    </div> <!--#main-->

<?php get_footer(); ?>



