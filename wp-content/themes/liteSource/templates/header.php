<header class="site-header">
  <div class="container">
    <?php $img = get_field('site_logo', 'options'); ?>
    <a href="<?php echo get_home_url(); ?>">
      <img class="logo" src="<?php echo $img["url"]; ?>" alt="site-logo"/>
    </a>
    <nav class="desktop-nav" role="navigation">
      <?php header_nav(); ?>
    </nav>
    <div class="off-canvas-menu-trigger">

    </div>
  </div>
</header>

<?php get_template_part('templates/partials/off-canvas-menu'); ?>
