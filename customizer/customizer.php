<?php 
/**
 * all customizer setting includeed
 *
 * @param  
 * @return mixed|string
 */
function th_blank_customize_register( $wp_customize ){
	//site identity
require TH_BLANK_THEME_DIR . 'customizer/section/site-identity.php';
}
add_action('customize_register','th_blank_customize_register');