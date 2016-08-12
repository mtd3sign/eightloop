<?php use Roots\Sage\Titles; ?>

<div class="header-container">
<div class="page-header-container">
  <div class="post-header">
  <h1><?= Titles\title(); ?></h1>
  <?php the_excerpt(); ?>
    <hr class="header">
</div>
</div>
</div>
