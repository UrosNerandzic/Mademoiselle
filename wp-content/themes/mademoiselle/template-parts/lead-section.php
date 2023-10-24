<?php
if(is_home()&& get_option('page_for_posts')){
  $leadImage = get_the_post_thumbnail_url(get_option('page_for_posts'), 'full');
  $leadTitle = get_the_title(get_option('page_for_posts'));
}else{
$leadImage = get_the_post_thumbnail_url(get_the_ID(), 'full');
$leadTitle = get_the_title();
}
?>
<section class="home-page" style="
  background-image: linear-gradient(
      180deg,
      rgba(0, 0, 0, 0.45),
      rgba(255, 255, 255, 0)
    ),
    url(<?php echo $leadImage ?>);
">
  <div class="container">
    <h1 class="home-title"><?php echo $leadTitle ?></h1>
  </div>
</section>
<!-- section-end -->