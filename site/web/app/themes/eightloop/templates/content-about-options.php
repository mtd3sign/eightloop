<!-- <div class="container-about-home">
  <div class="about-home">
      <div class="about-option">
        <h2><?php echo( 'TITLE 1' ); ?></h2>
        <p><?php echo( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut dictum arcu. Integer a justo ante. Morbi gravida neque id tortor vestibulum ultrices. Nullam viverra quam lacus, sit amet efficitur lacus iaculis elementum. Donec consectetur magna in lacus vestibulum condimentum. In eget eros est. Integer velit tellus, euismod mattis mi quis, dictum congue leo. Nam vel neque maximus, rhoncus odio eget, condimentum augue.' ); ?></p>
      </div>
      <div class="about-option">
        <h2><?php echo( 'TITLE 2' ); ?></h2>
        <p><?php echo( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut dictum arcu. Integer a justo ante. Morbi gravida neque id tortor vestibulum ultrices. Nullam viverra quam lacus, sit amet efficitur lacus iaculis elementum. Donec consectetur magna in lacus vestibulum condimentum. In eget eros est. Integer velit tellus, euismod mattis mi quis, dictum congue leo. Nam vel neque maximus, rhoncus odio eget, condimentum augue.' ); ?></p>
      </div>
      <div class="about-option">
        <h2><?php echo( 'TITLE 3' ); ?></h2>
        <p><?php echo( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut dictum arcu. Integer a justo ante. Morbi gravida neque id tortor vestibulum ultrices. Nullam viverra quam lacus, sit amet efficitur lacus iaculis elementum. Donec consectetur magna in lacus vestibulum condimentum. In eget eros est. Integer velit tellus, euismod mattis mi quis, dictum congue leo. Nam vel neque maximus, rhoncus odio eget, condimentum augue.' ); ?></p>
      </div>
    </div>
  </div>
</div> -->

<div class="container-about-home">
  <div class="about-home">
      <div class="about-option">
        <h2><?php the_field( 'about_option_1_title' ); ?></h2>
        <?php the_field( 'about_option_1_text' ); ?>
      </div>
      <div class="about-option">
        <h2><?php the_field( 'about_option_2_title' ); ?></h2>
        <?php the_field( 'about_option_2_text' ); ?>
      </div>
      <div class="about-option">
        <h2><?php the_field( 'about_option_3_title' ); ?></h2>
        <?php the_field( 'about_option_3_text' ); ?>
      </div>
    </div>
  </div>
</div>
