<?php
get_header();
?>
<main>

  <section class="eror home-page eror-image" style="
   background-image: linear-gradient(
       180deg,
       rgba(0, 0, 0, 0.49),
       rgba(255, 255, 255, 0)
     ),
     url(/wp-content/themes/mademoiselle/frontend/img/eror_home.png);
     
 ">
    <div class="container text-center eror-item">
      <h1 class="home-title">
        Eror 404
        <br />
        Page not found
      </h1>
      <a href="<?php echo home_url(); ?>" class="text-decoration-none home-section-three-link px-5 py3 text-uppercase">
        back to home
      </a>
    </div>
    <!-- container-end -->
  </section>
  <!-- section-end -->

</main>
<?php
get_footer();
?>