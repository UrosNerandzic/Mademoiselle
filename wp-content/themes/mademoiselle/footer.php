<footer class="bg-white">
  <div class="container">
    <?php

      $menuLocations = get_nav_menu_locations();
      $socialMenuID = $menuLocations['social'];
      $socialMenuItems = wp_get_nav_menu_items($socialMenuID);
      
      if($socialMenuItems){
        ?>
    <nav class="social">
      <?php
          foreach($socialMenuItems as $socialItem){
              if($socialItem -> menu_item_parent == 0){
                  ?>
      <a href="<?php echo $socialItem -> url ?>"
        class="fa-brands fa-<?php echo strtolower($socialItem -> title); if($socialItem -> title == 'Facebook'){echo '-f';} ?>"></a>
      <?php
              }
          }
        ?>
    </nav>
    <?php
      }

    ?>
    <!-- <nav class="social">
      <a href="#" class="fa-brands fa-facebook-f"></a>
      <a href="#" class="fa-brands fa-twitter"></a>
      <a href="#" class="fa-brands fa-instagram"></a>
    </nav> -->
    <p class="copyright">Copyright &copy; <?php echo date('Y'); ?> <a class="text-decoration-none copyright text-reset"
        href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></p>
  </div>
</footer>
<!-- footer-end -->


<?php
// include default WordPress js files
wp_footer();
?>
</body>

</html>