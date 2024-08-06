<?php

register_nav_menus(
 array( // Регистрируем меню
  'top' => 'Header Menu',
  'footer' => 'Footer Menu',
 )
);

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);
function special_nav_class($classes, $item)
{	// добавляем активному меню класс
 if (in_array('current-menu-item', $classes)) {
  $classes[] = 'active';
 }
 return $classes;
}

// добавляем класс к пунктам меню которые имеют детей
add_filter('wp_nav_menu_objects', 'menu_set_dropdown', 10, 2);
function menu_set_dropdown($sorted_menu_items, $args)
{
 $last_top = 0;
 foreach ($sorted_menu_items as $key => $obj) {
  if (0 == $obj->menu_item_parent) {
   $last_top = $key;
  } else {
   $sorted_menu_items[$last_top]->classes['dropdown'] = 'dropdown has-children';
  }
 }
 return $sorted_menu_items;
}

add_filter('wp_nav_menu_objects', 'add_menu_parent_class');
function add_menu_parent_class($items)
{
 $parents = array();
 foreach ($items as $item) {
  if ($item->menu_item_parent && $item->menu_item_parent > 0) {
   $parents[] = $item->menu_item_parent;
  }
 }

 foreach ($items as $item) {
  if (in_array($item->ID, $parents)) {
   $item->classes[] = 'my-parent-item';
  }
 }

 return $items;
}

class My_Walker_Nav_Menu extends Walker_Nav_Menu
{

 // add classes to ul sub-menus
 function start_lvl(&$output, $depth = 0, $args = NULL)
 {
  // depth dependent classes
  $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent
  $display_depth = ($depth + 1); // because it counts the first submenu as 0
  if ($display_depth > 0)
   $classes = array(
    'dropdown',
   );
  $class_names = implode(' ', $classes);

  // build html
  $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
 }


}