<?php

// Main Navigation
function header_nav() {
    ?>
    <div class="nav-container">
      <?php
      $menu_name = 'header-menu';
      $locations = get_nav_menu_locations();
      $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
      $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) ); ?>
      <nav class="desktop-nav" role="navigation">
        <ul class="main-nav">
            <?php
            $count = 0;
            $submenu = false;
            if($menuitems){
              foreach( $menuitems as $item ):
                  // set up title and url
                  $title = $item->title;
                  $link = $item->url;
                  $ID = $item->ID;
                  $description = get_field('page_description', $item->object_id);
                  // item does not have a parent so menu_item_parent equals 0 (false)
                  if ( !$item->menu_item_parent ):
                  // save this id for later comparison with sub-menu items
                  $parent_id = $item->ID;?>
                  <li class="item parent-link">
                      <p class="title"><a href="<?php echo $link; ?>"><span class="text"><?php echo $title; ?></span></a> </p>
                      <?php endif; ?>
                          <?php if ( $parent_id == $item->menu_item_parent ): ?>
                              <?php if ( !$submenu ): $submenu = true;?>
                              <ul class="sub-menu">
                                <div class="sub-menu-container">
                                  <div class="sub-content">
                                    <div class="buttons">
                                      <p class="btn"><a style="color:<?php echo $secbtncolour; ?>" href="sponsors">All Sponsors</a></p>
                                      <p class="btn"><a style="color:<?php echo $pribtncolour; ?>" href="sponsorship-opportunities">Opportunities</a></p>
                                    </div>
                                  </div>
                                  <div class="menu-items">
                                  <?php endif; ?>
                                    <li class="item child-link">
                                        <a href="<?php echo $link; ?>" class="title">
                                          <span class="text"><?php echo $title; ?></span>
                                          <span class="description">  <?php echo $description; ?></span>
                                        </a>
                                    </li>
                                  <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ):
                                    ?>
                                  </div>
                                </div>
                              </ul>
                              <?php $submenu = false; endif; ?>
                          <?php endif; ?>
                      <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                      </li>
                  <?php $submenu = false; endif; ?>
              <?php $count++; endforeach; ?>
            <?php
            } ?>
          </ul>
        </nav>
    </div>
<?php
}
