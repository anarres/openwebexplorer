<?php
/*
Template Name: Page With Stream
*/
?>

<?php get_header(); ?>

<div class="sleeve_main">

	<div id="main">

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

	</div> <!-- main -->

</div> <!-- sleeve -->

<?php get_footer(); ?>
