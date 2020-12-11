<?php
/*
 * Displays navigation bar containing main menu and social media menu.
 */
?>

<nav class='navbar fixed-top navbar-expand-md navbar-expand-lg navbar-dark bg-dark'>
  <div class='container'>

    <?php if ( has_custom_logo() ): the_custom_logo(); ?>
    <?php else: ?>
    <a class='navbar-brand' href='<?php bloginfo( 'url' ); ?>'><?php bloginfo( 'name' ); ?></a>
    <?php endif; ?>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
      <span class='navbar-toggler-icon'></span>
    </button>

    <div class='collapse navbar-collapse' id='navbarSupportedContent'>
    <?php 
      if ( has_nav_menu( 'primary-menu' ) ): 
        $locations = get_nav_menu_locations();
        $menu = get_term( $locations['primary-menu'], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
    ?>
      <ul class='navbar-nav mr-auto'>
      <?php 
        foreach( $menu_items as $menu_item ) {
          if ( $menu_item->menu_item_parent == 0 ) {
            $parent = $menu_item->ID;
            $menu_array = array();
            foreach ( $menu_items as $submenu ) {
              if ( $submenu->menu_item_parent == $parent ) {
                $bool = true;
                $menu_array[] = '<a class="dropdown-item" href="' . $submenu->url . '">' . $submenu->title . '</a>';
              }
            }
            if ( $bool == true && count( $menu_array ) > 0 ) {
              echo '<li class="nav-item dropdown">';
              echo '<a class="nav-link dropdown-toggle" href="' . $menu_item->url . '" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . '</a>';
              
              echo '<div class="dropdown-menu" aria-labelledby="navbarDropdown">';
              echo implode( '', $menu_array );
              echo '</div>';
            } else {
              echo '<li class="nav-item">';
              echo '<a class="nav-link" href="' . $menu_item->url . '">' . $menu_item->title . '</a>';
            }
          }
          echo '</li>';
        }
      ?>
      </ul>
    <?php endif; ?>

    <?php
      if ( has_nav_menu( 'nav-icon-menu' ) ) :
        $locations = get_nav_menu_locations();
        $menu = get_term( $locations['nav-icon-menu'], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items( $menu->term_id );
    ?>
      <ul class='navbar-nav' id='nav-icon-menu'>
        <li class='nav-item'>
        <?php foreach( $menu_items as $menu_item ) : ?>
        <?php $icon = brycestrap_parse_menu_item_title( $menu_item->title ); ?>
          <a class='nav-link' target='_blank' href='<?php echo $menu_item->url; ?>' title='<?php echo $icon['title']; ?>'>
            <i class='<?php echo $icon['class'];  ?> fa-lg'></i>
          </a>
        <?php endforeach; ?>
        </li>
      </ul>
    <?php endif; ?>

    </div>
  </div>
</nav>