<?php
/**
 * Header template.
 *
 */
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="icon" type="image/png" href="FIXME">
    <meta http-equiv="Content-Type" 
        content="<?php bloginfo( 'html_type' ); ?>; 
        charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body <?php body_class(); ?>>

<div id="container">
<div id="containerInner">

    <div id="header">

        <div id="topMenu"><!--CHECK IF SITE ADMIN-->

            <ul>
                <li>
                    <a href="<?php echo home_url( '/' ); ?>">
                        <?php echo get_bloginfo( 'title' ); ?>
                    </a>
                </li>

                <?php 
                if ( current_user_can('manage_options') ) {

                    echo '<li><a href="';
                    echo home_url( '/' );
                    echo 'feeds/">RSS feeds</a></li>';

                    echo '<li><a href="';
                    echo home_url( '/' );
                    echo 'wp-admin/">Settings</a></li>';
                }
                if ( is_user_logged_in() ) {
                    echo '<li>You are logged in as ';

                    echo '<a href="';
                    echo home_url( '/' );
                    echo 'wp-admin/profile.php">';

                    global $current_user;
                    get_currentuserinfo();
                    echo $current_user->user_login;
                    
                    echo '</a> <a href="';
                    echo wp_logout_url('$index.php');
                    echo '">Log out</a></li>';
                }
                else {
                    echo '<li><a href="';
                    echo home_url( '/' );
                    echo 'wp-admin/">Log in</a></li>';
                }
                ?>
            </ul>

            <div style="clear:both;"></div>

        </div> <!--#topMenu-->

        <div id="headerTitle">

	        <h2 id="networkTitle">
                <a href="<?php echo network_site_url(); ?>">
                    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dinoLogoWithTitle.png" 
                        alt="Open Web Explorer: cute baby dinosaur logo" 
                        width="160" height="40" />
                </a>
            </h2>

	        <h2 id="siteTitle">
                <a href="<?php echo home_url( '/' ); ?>">
                    <?php echo get_bloginfo( 'title' ); ?>
                </a>
            </h2>

        </div> <!--#headerTitle-->

    </div> <!--#header-->

