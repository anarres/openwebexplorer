
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
    <meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body <?php body_class(); ?>>

<div id="container">
<div id="containerInner">

<div id="header">

	<h2>
        <a href="<?php echo network_site_url(); ?>">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/images/dinoLogoWithTitle.png" 
            alt="Open Web Explorer title with cute baby dinosaur logo">
        </a>
    </h2>

	<?php if ( has_nav_menu( 'primary' ) ) : ?>

	<div role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'p2' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#main" title="<?php esc_attr_e( 'Skip to content', 'p2' ); ?>"><?php _e( 'Skip to content', 'p2' ); ?></a></div>

		<?php wp_nav_menu( array(
			'theme_location' => 'primary',
			'fallback_cb'    => '__return_false',
		) ); ?>

    <?php do_action( 'before' ); ?>

	<div class="sleeve">
<!--
		<h1>
            <a href="<?php echo home_url( '/' ); ?>">FIXME</a>
        </h1>
-->
		<?php if ( get_bloginfo( 'description' ) ) : ?>
			<small><?php bloginfo( 'description' ); ?></small>
		<?php endif; ?>
		<a class="secondary" href="<?php echo home_url( '/' ); ?>"></a>

		<?php if ( current_user_can( 'publish_posts' ) ) : ?>
			<a href="" id="mobile-post-button" style="display: none;"><?php _e( 'Post', 'p2' ) ?></a>
		<?php endif; ?>
	</div>


	</div>
	<?php endif; ?>
</div>

<div id="wrapper">

	<?php get_sidebar(); ?>
