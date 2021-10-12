<?php
/**
 * Primary sidebar
 *
 * @package  Th Blank
 * @since 1.0.0
 */
?>
<div id="sidebar-primary" class="sidebar-content-area">
  <div class="sidebar-main">
    <?php
    if ( is_active_sidebar('sidebar-1') ){
    dynamic_sidebar('sidebar-1');
     }
      ?>
  </div>  <!-- sidebar-main End -->
</div> <!-- sidebar-primary End -->                