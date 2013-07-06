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

        <div id="topMenu">

	        <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php wp_nav_menu(); ?>
	        <?php endif; ?>
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

