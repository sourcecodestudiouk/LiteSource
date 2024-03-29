<?php

// Main Navigation
function header_nav() {
  if( function_exists('acf_add_options_page') ) {
    $colours = get_field('site_colours', 'options');
    if(isset($colours)){
    $primary = $colours['primary'];
    $txtCol = getContrastColor($primary);
    $secondary = $colours['secondary'];
    $ddcol = getContrastColor($secondary);
    }
    ?>
    <nav class="desktop-navigation">
      <?php
      $menu_name = 'header-menu';
      $locations = get_nav_menu_locations();
      if($locations){
        $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
        $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
      }
       ?>
        <ul class="navigation-container">
            <?php
            $count = 0;
            $topCount = 1;
            $totalCount = 1;
            $submenu = false;
            if(isset($menuitems)){
              foreach( $menuitems as $item ):
                  // set up title and url
                  $totalCount++;
                  $title = $item->title;
                  $link = $item->url;
                  $ID = $item->ID;
                  // item does not have a parent so menu_item_parent equals 0 (false)
                  if ( !$item->menu_item_parent ):
                  // save this id for later comparison with sub-menu items
                  $parent_id = $item->ID;?>
                  <li class="item parent-link">
                      <p class="title"><a href="<?php echo $link; ?>" style="<?= $txtCol; ?>"><span class="text"><?php echo $title; $topCount++; ?></span></a> </p>
                      <?php endif; ?>
                          <?php if ( $parent_id == $item->menu_item_parent ): ?>
                              <?php if ( !$submenu ): $submenu = true;?>
                              <i class="fa-solid fa-chevron-down"></i>
                              <ul class="sub-menu" style="background-color:<?= $secondary; ?>">
                              
                                  <?php endif; ?>
                                    <li class="item child-link" style="border-color:<?= $ddcol; ?>">
                                        <a href="<?php echo $link; ?>" class="title">
                                          <span style="color:<?= $ddcol; ?>" class="text"><?php echo $title; ?></span>
                                          <span style="background-color:<?= $ddcol; ?>" class="background"></span>
                                        </a>
                                    </li>
                                  <?php if ( $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ):
                                    ?>
                                  
                              </ul>
                              <?php $submenu = false; endif; ?>
                       <?php endif; ?>
                      <?php 
                      if($item->menu_item_parent){ 
                        if ($menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
                          </li>
                      <?php $submenu = false; endif; 
                      }
                      if($topCount == 5){
                        break;
                      }
              $count++; endforeach; ?>
              
            <?php

            if($topCount == 5){
              $menuitems = array_slice($menuitems, $totalCount - 1); 
              if(count($menuitems) > 1){ ?>
                <li class="item parent-link">
                    <p class="title"><a href="<?php echo $link; ?>"><span class="text">More</span></a> </p>
                    <i class="fa-solid fa-chevron-down"></i>
                    <ul class="sub-menu" style="background-color:<?= $secondary; ?>">
                    <?php
                       foreach($menuitems as $item){ 
                          $title = $item->title;
                          $link = $item->url; ?>
                          <li class="item child-link" style="border-color:<?= $ddcol; ?>">
                             <a href="<?php echo $link; ?>" class="title"><span style="color:<?= $ddcol; ?>" class="text"><?php echo $title; ?></span><span  style="background-color:<?= $ddcol; ?>" class="background"></span></a>
                          </li>
                        <?php } ?>
                    </ul>
                </li>
              <?php 
              }
              else{ ?>
               <li class="item parent-link">
                <p class="title"><a href="<?php echo $menuitems[0]->url; ?>" class="title"><span class="text"><?php echo $menuitems[0]->title; ?></span></a></p>
              </li>
              <?php
              }?>
               
            <?php
            }
            } ?>
          </ul>
      
      </nav>
<?php
  }
}
