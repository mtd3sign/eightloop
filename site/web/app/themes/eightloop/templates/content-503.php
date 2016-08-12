<?php		if ( is_page_template('503.php') ) { ?>
<div class="container-hero">
  <div class="hero-outer">
    <div id="hero">
       <img class="background-image" src="<?php bloginfo('template_directory'); ?>/dist/images/sea-background3.jpg" title="sea-background" />
      <div id="video-overlay">
        <div id="logo">
          <h1><img alt="Eightloop" id="hero-logo" src="<?php bloginfo('template_directory'); ?>/dist/images/eightloop-logo.png" /></h1>
        </div>
        <div id="text">
          <h1><?php echo "New website coming soon!"( 'hero_title' ); ?></h1>
        <?php the_field( 'hero_text' ); ?>
          <!-- <hr class="hero"> -->
      </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>