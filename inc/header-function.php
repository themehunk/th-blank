<?php 
/**
 * Header Function for th blank theme.
 * 
 * @package     Th Blank
 * @author      Th Blank
 * @copyright   Copyright (c) 2021, Th Blank
 * @since       Th Blank 1.0.0
 */

/**************************************/
//Main Header function
/**************************************/
if ( ! function_exists( 'th_blank_main_header_markup' ) ){	
function th_blank_main_header_markup(){ 
$main_header_layout = get_theme_mod('th_blank_main_header_layout','mhdrthree');
$main_header_opt = get_theme_mod('th_blank_main_header_option','none');
$th_blank_menu_alignment = get_theme_mod('th_blank_menu_alignment','center');
$th_blank_menu_open = get_theme_mod('th_blank_mobile_menu_open','left');
$offcanvas = get_theme_mod('th_blank_canvas_alignment','cnv-none');
?>
<div class="main-header <?php echo esc_attr($main_header_layout);?> <?php echo esc_attr($main_header_opt);?> <?php echo esc_attr($th_blank_menu_alignment).'-menu';?>  <?php echo esc_attr($offcanvas);?>">
			<div class="container">
        <div class="desktop-main-header">
				<div class="main-header-bar thnk-col-3">
					<div class="main-header-col1">
          <span class="logo-content">
            <?php th_blank_logo();?> 
          </span>
        </div>
					<div class="main-header-col2">
        <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <button type="button" class="menu-btn" id="menu-btn">
                <div class="btn">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
               </div>
            </button>
        </div>
        <div class="sider main  th-blank-menu-hide <?php echo esc_attr($th_blank_menu_open);?>">
        <div class="sider-inner">
          <?php if(has_nav_menu('th-blank-main-menu' )){ 

             if (wp_is_mobile()!== false){
                   if(has_nav_menu('th-blank-above-menu' )){
                                th_blank_abv_nav_menu();
                       }
                  }  
                    th_blank_main_nav_menu();
              }else{
                 wp_page_menu(array( 
                 'items_wrap'  => '<ul class="th-blank-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
        </div>
        </div>
        </nav>
      </div>
					<div class="main-header-col3">
            
          </div>
				</div> 
      </div>
        <!-- end main-header-bar -->
        <!-- responsive mobile main header-->
        <div class="responsive-main-header">
          <div class="main-header-bar thnk-col-3">
            <div class="main-header-col1">
            <span class="logo-content">
            <?php th_blank_logo();?> 
          </span>
          
          </div>

           <div class="main-header-col2">
            <?php if ( class_exists( 'WooCommerce' ) ){
              th_blank_product_search_box();
             } ?>
           </div>

           <div class="main-header-col3">
            <div class="thunk-icon-market">
                <div class="menu-toggle">
                    <button type="button" class="menu-btn" id="menu-btn">
                        <div class="btn">
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                           <span class="icon-bar"></span>
                       </div>
                    </button>
                </div>
            </div>
          </div>
            </div>
          </div> <!-- responsive-main-header END -->
			</div>
		</div> 
      
<?php	}
}
add_action( 'th_blank_main_header', 'th_blank_main_header_markup' );

/**************************************/
//logo & site title function
/**************************************/
if ( ! function_exists( 'th_blank_logo' ) ){
function th_blank_logo(){
$title_disable          = get_theme_mod( 'title_disable','enable');
$tagline_disable        = get_theme_mod( 'tagline_disable','enable');
$description            = get_bloginfo( 'description', 'display' );
th_blank_custom_logo(); 
if($title_disable!='' || $tagline_disable!=''){
if($title_disable!=''){ 
?>
<div class="site-title"><span>
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
</span>
</div>
<?php
}
if($tagline_disable!=''){
if( $description || is_customize_preview() ):?>
<div class="site-description">
   <p><?php echo esc_html($description); ?></p>
</div>
<?php endif;
      }
    } 
  }
}
/***************************/
// Product search
/***************************/
function th_blank_product_search_box(){  
  if (shortcode_exists( 'th-aps' )) {
    echo do_shortcode('[th-aps]');          
  }       
}
// mobile panel
function th_blank_cart_mobile_panel(){
$th_blank_mobile_menu_open = get_theme_mod('th_blank_mobile_menu_open','left');
  ?>
      <div class="mobile-nav-bar sider main  th-blank-menu-hide <?php echo esc_attr($th_blank_mobile_menu_open); ?>">
        <div class="sider-inner">
        
          <div class="mobile-tab-wrap">
              <?php if(class_exists( 'WooCommerce' )){?>
            <div class="mobile-nav-tabs">
                <ul>
                  <li class="primary active" data-menu="primary">
                     <a href="#mobile-nav-tab-menu"><?php _e('Menu','th-blank');?></a>
                  </li>
                  
                  <li class="categories" data-menu="categories">
                    <a href="#mobile-nav-tab-category"><?php _e('Categories','th-blank');?></a>
                  </li>
                
                </ul>
            </div>
            <?php }?>
            <div id="mobile-nav-tab-menu" class="mobile-nav-tab-menu panel">
          <?php if(has_nav_menu('th-blank-main-menu' )){ 
                    if(has_nav_menu('th-blank-above-menu' )){
                         th_blank_abv_nav_menu();
                       }
                        th_blank_main_nav_menu();
              }else{
                 wp_page_menu(array( 
                 'items_wrap'  => '<ul class="th-blank-menu" data-menu-style="horizontal">%3$s</ul>',
                 'link_before' => '<span>',
                 'link_after'  => '</span>'));
             }?>
           </div>
            <?php if(class_exists( 'WooCommerce' )){?>
           <div id="mobile-nav-tab-category" class="mobile-nav-tab-category panel">
             <?php th_blank_product_list_categories_mobile(); ?>
           </div>
           <?php }?>
          </div>
        </div>
      </div>
<?php 
}
add_action( 'th_blank_below_header', 'th_blank_cart_mobile_panel' );