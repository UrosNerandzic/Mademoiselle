<?php
get_header();
?>
<main>

  <section class="service-single-section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-7">
          <figure class="service-single-img">
            <?php  the_post_thumbnail('single-services');?>
          </figure>
        </div>
        <div class="col-12 col-md-5 service-single-text">
          <h3 class="service-single-title text-uppercase">
            <?php the_title(); ?>
          </h3>
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
  <?php
      // Include blog-section
      get_template_part('/template-parts/blog-section');
  ?>
</main>
<?php 
get_footer();
?>