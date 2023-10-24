<?php 
/*
    Template Name: About Page
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
  <section class="about-section-two">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-8">
          <article class="about-data">
            <?php the_content(); ?>
          </article>
        </div>
        <!-- col-end -->

        <div class="col-12 col-md-4">
          <aside>
            <?php get_sidebar(); ?>
          </aside>
        </div>
      </div>
    </div>
    <!-- col-end -->
    </div>
    <!-- row-end -->
    </div>
    <!-- container-end -->
  </section>
  <!-- about-section-two-end -->
</main>
<?php
get_footer();
?>