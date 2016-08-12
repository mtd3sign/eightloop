<div class="container-hero">
  <div class="hero-outer">
  <div class="hero">
    <video class="hero-video" autoplay>
      <source src="<?php bloginfo('template_directory'); ?>/dist/images/Comp_1_10_1_grey.mp4" type="video/mp4">
      <!-- <source src="<?php bloginfo('template_directory'); ?>/dist/images/Satellite.webm" type="video/webm"> -->
    </video>
    <img class="hero-img" src="<?php bloginfo('template_directory'); ?>/dist/images/backup-image.jpg" title="Your browser does not support the <video> tag" />

      <div class="video-overlay">
        <img class="logo" src="<?php bloginfo('template_directory'); ?>/dist/images/postfiftythree-logo-circle-grey-50.png" title="POSTFIFTYTHREE logo" />
        <h1><?php the_field( 'hero_title' ); ?></h1>
        <h3><?php the_field( 'hero_text' ); ?></h3>
      </div>

  </div>
</div>
</div>
