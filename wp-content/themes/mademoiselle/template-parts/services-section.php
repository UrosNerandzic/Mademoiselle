<?php
  $leadImageServices = get_the_post_thumbnail_url(get_the_ID(),'full');
  $arg = array(
    'posts_per_page' => -1,
    'post_type' => 'our_services',
    'order' => 'ASC',
    'orderby' =>'date'
  );
  $services = new WP_Query($arg);
  if($services -> have_posts()){
    ?>
<section class="home-section-three mb-5">
  <div class="container">
    <?php
    while($services -> have_posts()){
        $services -> the_post();
        ?>
    <article class="service-item">
      <div class="row">
        <div class="col-sm-6 service-item-text">
          <p class="text-uppercase home-section-three-text">
            <?php the_title(); ?>
          </p>
          <button type="submit" name="learn-more" value="true" class="home-section-three-link px-5 py3 text-uppercase">
            <a href="<?php the_permalink(); ?>" class="text-decoration-none text-reset">learn
              more</a>
          </button>
        </div>
        <div class="col-sm-6 service-item-image">
          <figure class="h-100 mb-0">
            <a href="<?php the_permalink(); ?>">
              <?php  the_post_thumbnail('services-list');?>
            </a>
          </figure>
        </div>
      </div>
    </article>
    <?php
    }
  }
  wp_reset_postdata();
  ?>
  </div>
  <!-- container -->
</section>
<!-- home-section-three -->