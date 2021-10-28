<?php 
/**
 * all file includeed
 *
 * @param  
 * @return mixed|string
 */
get_template_part( 'inc/admin-function');
get_template_part( 'inc/header-function');
get_template_part( 'inc/footer-function');
get_template_part( 'inc/blog-function');
//breadcrumbs
get_template_part( 'lib/breadcrumbs/breadcrumbs');
//customizer
get_template_part('customizer/extend-customizer/class-zita-wp-customize-panel');
get_template_part('customizer/extend-customizer/class-zita-wp-customize-section');
get_template_part('customizer/color/class-control-color');
get_template_part( 'customizer/custom-customizer');
get_template_part( 'customizer/customizer');