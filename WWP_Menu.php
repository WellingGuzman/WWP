<?php

class WWP_Menu {
  function static getMenuItems($menu_name) {
    $menu_items = array();
    // http://codex.wordpress.org/Function_Reference/wp_get_nav_menu_items
    if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    	$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    	$menu_items = wp_get_nav_menu_items($menu->term_id);
    }
    
    return $menu_items;
  }
}
