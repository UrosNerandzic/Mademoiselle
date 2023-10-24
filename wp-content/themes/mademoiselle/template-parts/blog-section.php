<?php
      $arg = array(
        
        'posts_per_page' => 3,
        'paged' => 2,
        'order' => 'ASC',
        'orderby' => 'date'
      );
      $threePost = new WP_Query($arg);
      
      if($threePost -> have_posts()){
        ?>
<section class="home-section-two service-single-two">
  <div class="container">
    <div class="row">
      <?php 
while($threePost -> have_posts()){
  $threePost -> the_post();
  ?>
      <div class="col-sm-4 position-relative">
        <article class="blog-item">
          <div class="home-section-two-text text-center">
            <p class="home-section-two-text-1"><?php echo get_the_date('j.m.Y') ?></p>
            <p class="home-section-two-text-2 text-uppercase">
              <?php the_title(); ?>
            </p>
          </div>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('blog-list');  ?>
          </a>
        </article>
      </div>
      <!-- col-end -->
      <?php
}
?>
    </div>
    <?php
      }else{
        ?>
    <div class="jumbotron">
      <h2>Empty</h2>
    </div>
    <?php
      }
      wp_reset_postdata();
      ?>
  </div>
  <!-- row-end -->
  </div>
  <!-- container-end -->
</section>
<!-- home-section-two-end -->