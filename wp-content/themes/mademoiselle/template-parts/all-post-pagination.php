<?php
  $arg = array(
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'date'
  );
  $AllPost = new WP_Query($arg);
  if($AllPost -> have_posts()){
    ?>
<section class="home-section-two">
  <div class="container">
    <div class="row">
      <?php
          while($AllPost -> have_posts()){
            $AllPost -> the_post();
            ?>
      <div class="col-sm-4 position-relative blog-section zoom">
        <article class="blog-item">
          <div class="home-section-two-text text-center">
            <p class="home-section-two-text-1"><?php echo get_the_date('j.m.Y') ?></p>
            <p class="home-section-two-text-2 text-uppercase">
              <?php the_title();?>
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
</section>
<section class="blog-pagination mb-5">
  <div class="container">
    <?php
          the_posts_pagination(array(
            'screen_reader_text' => '',
            'prev_text' => '<<',
            'next_text' => '>>',
            'current' => 2

          ));
      ?>
  </div>
</section>
<?php
  }else{
    ?>
<section class="home-section-two">
  <div class="container">
    <div class="row">
      <div class="jumbotron">
        <h3>There are no posts to show.</h3>
      </div>
    </div>
  </div>
</section>
<?php
  }
  ?>