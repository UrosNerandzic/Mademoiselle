<?php
get_header();
?>
<main>
  <?php
     // Include lead-section
     get_template_part('/template-parts/lead-section');
  ?>
  <section class="home-section-two animation" data-animation="slide-right">
    <div class="container">
      <h2 class="text-uppercase home-section-two-title">
        <?php echo  get_the_content(); ?>
      </h2>
      <span class="span-home"></span>
    </div>
  </section>
  <?php 
     // Include blog-section
     get_template_part('/template-parts/blog-section');
  ?>
  <section class="home-section-three animation" data-animation="slide-left">
    <div class="container">
      <h2 class="text-uppercase home-section-three-title">
        Our Services
      </h2>
      <span class="span-home"></span>
      <?php
         // Include services-section
        get_template_part('/template-parts/services-section');
      ?>

      <?php
        get_template_part('/template-parts/home-section-four');
      ?>
</main>
<?php
get_footer();
?>