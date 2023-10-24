<?php
get_header();
?>
<?php

if(have_posts()){
  while(have_posts()){
    the_post();
    ?>
<section class="single-blog-section">
  <div class="container">
    <div class="single-blog-Allp">
      <?php
      $newCategories = get_the_category(get_the_ID());
      foreach($newCategories as $newCategory){
        ?>
      <a href="<?php echo get_category_link($newCategory -> term_id); ?>"
        class="sinlge-blog-p text-decoration-none text-reset"><?php echo $newCategory -> name; ?>|
        <?php echo get_the_date('j.m.Y'); ?>
      </a>
      <?php
      }
      ?>
    </div>
    <div class="row justify-content-center">
      <div class="single-blog-item col-12 col-md-6">
        <h3 class="text-uppercase single-blog-title">
          <?php the_title(); ?>
        </h3>
        <p class="single-blog-text">
          <?php the_excerpt();?>
        </p>
      </div>
      <div class="single-blog-item col-12 col-md-6">
        <a href="<?php the_permalink(); ?>">
          <?php  the_post_thumbnail('single-blog'); ?>
        </a>
      </div>
      <div class="col-12 col-md-8 single-blog-item">
        <?php the_content(); ?>
      </div>
      <div class="single-blog-item-p col-12 col-md-8 text-center">
        <div class="single-blog-button">
          <p><i>Tags:</i></p>
          <?php 
          $newTags = get_the_tags(get_the_ID());
          foreach($newTags as $newTag){
            ?>
          <a href="<?php echo get_tag_link($newTag -> term_id); ?>"
            class="text-decoration-none text-reset"><?php echo $newTag -> name ?></a>
          <?php
          }

          ?>
        </div>
      </div>
      <!-- col-end -->
    </div>
    <!-- row-end -->
  </div>
  <!-- container-end -->
</section>
<!-- single-blog-section-end -->
<?php
  }
}

?>
<main>

</main>

<?php
get_footer();
?>