<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Th Blank
 * @since 1.0.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>

	<?php wp_body_open();?>

<div id="page" class="th-blank-site <?php echo esc_attr($page_post_meta_sidebar);?>">
	<header>
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'th-blank' ); ?></a>
        <?php do_action( 'th_blank_main_header' ); ?> 
		<!-- end below-header -->
	</header> <!-- end header -->
		