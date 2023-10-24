<?php 
/*
Template Name: Services Page
*/
?>
<?php
get_header();
?>
<main>
  <?php
     // Include lead-section
     get_template_part('/template-parts/lead-section');
  ?>

  <?php
     // Include services-section
     get_template_part('/template-parts/services-section');
  ?>
</main>
<?php
get_footer();
?>