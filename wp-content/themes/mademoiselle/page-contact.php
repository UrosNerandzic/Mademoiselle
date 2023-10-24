<?php
/*
    Template Name: Contact Page
*/
?>

<?php
    get_header();
?>
<main>
  <section class="contact-section-one mt-5">
    <div class="contact-map embed-responsive embed-responsive-1by1">
      <?php the_field('contact_page_map') ?>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-11 naslov">
          <?php the_content(); ?>
        </div>
        <!-- col-end -->
      </div>
      <!-- row-end -->
    </div>
    <!-- container-end -->
  </section>
  <!-- section-end -->

  <?php
      get_template_part('/template-parts/contact-data');
  ?>
</main>
<?php
get_footer();
?>