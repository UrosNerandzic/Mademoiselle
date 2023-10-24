<?php

    $address  = get_option('mademoiselle_address');
    $phone    = get_option('mademoiselle_phone');
    $mobile_1 = get_option('mademoiselle_mobile_1');
    $mobile_2 = get_option('mademoiselle_mobile_2');
    $email_1  = get_option('mademoiselle_email_1');
    $email_2  = get_option('mademoiselle_email_2');
?>
<section class="contact-section-two">
  <div class="container">
    <div class="contact-info">
      <?php
        if(!empty($address)){
      ?>
      <p class="contact-address"><?php echo $address; ?></p>
      <?php
}
?>

      <?php
        if(!empty($phone)){
      ?>
      <p class="contact-phone">
        <a class="text-decoration-none" href="tel:<?php echo $phone ?>">
          <?php echo $phone; ?>
        </a>
      </p>
      <?php
}
?>

      <?php
        if(!empty($mobile_1)){
      ?>
      <p class="contact-phone">
        <a class="text-decoration-none" href="tel:<?php echo $mobile_1 ?>">
          <?php echo $mobile_1; ?>
        </a>
      </p>
      <?php
}
?>

      <?php
        if(!empty($mobile_2)){
      ?>
      <p class="contact-phone">
        <a class="text-decoration-none" href="tel:<?php echo $mobile_2 ?>">
          <?php echo $mobile_2; ?>
        </a>
      </p>
      <?php
}
?>

      <?php
        if(!empty($email_1)){
      ?>
      <p class="contact-email">
        <a class="text-decoration-none" href="mailto:<?php echo $email_1 ?>">
          <?php echo $email_1 ?>
        </a>
      </p>
      <?php
}
?>

      <?php
        if(!empty($email_2)){
      ?>
      <p class="contact-email">
        <a class="text-decoration-none" href="mailto:<?php echo $email_2 ?>">
          <?php echo $email_2 ?>
        </a>
      </p>
      <?php
}
?>
    </div>
  </div>
</section>