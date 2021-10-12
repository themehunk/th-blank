<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @package  Th Blank
 * @since 1.0.0
 */ 
?>
<footer>
         <?php 
          // top-footer 
          do_action( 'th_blank_top_footer' ); 
          // widget-footer
		      do_action( 'th_blank_widget_footer' );
		      // below-footer
          do_action( 'th_blank_below_footer' );  
        ?>
     </footer> <!-- end footer -->
    </div> <!-- end th-blank-site -->
<?php wp_footer(); ?>
</body>
</html>