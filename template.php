<?php

/**
 * Assign theme hook suggestions for custom templates and pass color theme setting
 * to skin.less file.
 */  
function porto_sub_preprocess_page(&$vars, $hook) {
  if (isset($vars['node'])) {
    $suggest = "page__node__{$vars['node']->type}";
    $vars['theme_hook_suggestions'][] = $suggest;
  }

  if (isset($vars['node']) && ($vars['node']->type == 'producto')) {
    $node = $vars['node'];
    $vars['familia'] = '';
    $parents = taxonomy_get_parents($node->field_catalogo['und'][0]['tid']);
    foreach ($parents as $id => $parent) {
      $vars['familia'][] = $parent->name;
    }
    $vars['familia'][] = $node->field_catalogo['und'][0]['taxonomy_term']->name;
  }
  
  $status = drupal_get_http_header("status");  
  if($status == "404 Not Found") {      
    $vars['theme_hook_suggestions'][] = 'page__404';
  }
  
  if (arg(0) == 'taxonomy' && arg(1) == 'term' ){
    $term = taxonomy_term_load(arg(2));
    $vars['theme_hook_suggestions'][] = 'page--taxonomy--vocabulary--' . $term->vid;
  }
  
  if (request_path() == 'one-page') {
    $vars['theme_hook_suggestions'][] = 'page__onepage';
  }  
  
  //Pass the color value from theme settings to @skinColor variable in skin.less
  drupal_add_css(drupal_get_path('theme', 'porto') .'/css/less/skin.less', array(
  
    'group' => CSS_THEME,
    'preprocess' => false,
    'less' => array(
      'variables' => array(
        '@skinColor' => '#'.theme_get_setting('skin_color').'',
      ),
    ),

  )); 
}

/**
 * Define some variables for use in theme templates.
 */
function porto_sub_process_page(&$variables) {	
  // Assign site name and slogan toggle theme settings to variables.
  $variables['disable_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['disable_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
   // Assign site name/slogan defaults if there is no value.
  if ($variables['disable_site_name']) {
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['disable_site_slogan']) {
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }

}	

function porto_sub_preprocess_html(&$variables) {
  if (!drupal_is_front_page()) {
    $variables['head_title'] = $variables['head_title_array']['title'];
  }
}

/**
 * Add list classes for links in "Header Menu" region.
 */
function porto_sub_menu_link__header_menu(array $variables) {
  unset($variables['element']['#attributes']['class']);
  $element = $variables['element'];
  static $item_id = 0;
  $menu_name = $element['#original_link']['menu_name'];
  
  // set the global depth variable
  global $depth;
  $depth = $element['#original_link']['depth'];

  if ( ($element['#below']) && ($depth == "1") ) {
    $element['#attributes']['class'][] = 'dropdown';
  }
  
  if ( ($element['#below']) && ($depth == "2") ) {
    $element['#attributes']['class'][] = 'dropdown-submenu';
  }
  
  $sub_menu = $element['#below'] ? drupal_render($element['#below']) : '';
  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  // if link class is active, make li class as active too
  if(strpos($output,"active")>0){
    $element['#attributes']['class'][] = "active";
  }

  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . '</li>';
}

/**
 * Define menu UL class for "Header Menu" region.
 */
function porto_sub_menu_tree__header_menu($variables){
  
  // use global depth variable to define ul class
  global $depth;
  $class = ($depth == 1) ? 'nav nav-pills nav-main' : 'dropdown-menu';
  return '<ul class="'.$class.' porto-nav">' . $variables['tree'] . '</ul>';
  
}

/**
 * Implements hook_block_view_alter() for "Header Menu" region.
 */
function porto_sub_block_view_alter(&$data, $block) {

  if ($block->region == 'header_menu') {
   
    $data['content']['#theme_wrappers'] = array('menu_tree__header_menu');

    foreach($data['content'] as &$key):
     
      if (isset($key['#theme'])) {
        $key['#theme'] = 'menu_link__header_menu';
      }
      if (isset($key['#below']['#theme_wrappers'])) {
        $key['#below']['#theme_wrappers'] = array('menu_tree__header_menu');
      }
      if (isset($key['#below'])) {
        foreach($key['#below'] as &$key2):
        
           if (isset($key2['#theme'])) {
             $key2['#theme'] = 'menu_link__header_menu';
           }
           if (isset($key2['#below']['#theme_wrappers'])) {
             $key2['#below']['#theme_wrappers'] = array('menu_tree__header_menu');
           }
           if (isset($key2['#below'])) {
              foreach($key2['#below'] as &$key3):
              
                if (isset($key3['#theme'])) {
                  $key3['#theme'] = 'menu_link__header_menu';
                }
              endforeach;
              
           }
        endforeach;
       
      }
    endforeach;

  }
}

/**
 * Implements hook_preprocess_node().
 */
function porto_sub_preprocess_node(&$variables, $hook) {
	$node = $variables['node'];
	if ($node->type == 'producto') {
    $catalogo = $node->field_catalogo['und'][0]['tid'];
    $variables['next'] = _producto_sibling('next',$node,'<i class="icon icon-chevron-right"></i>',"Next","portfolio-nav-next",$catalogo);
    $variables['previous'] = _producto_sibling('previous',$node,'<i class="icon icon-chevron-left"></i>',"Previous","portfolio-nav-prev",$catalogo);
	}
}

/**
 * Helper functions
 */

/*
 * Navegación entre productos
 *
 * Visto en: https://drupal.org/comment/4238936#comment-4238936
 */
function _producto_sibling($dir = 'next', $node, $next_node_text=NULL, $prepend_text=NULL, $append_text=NULL, $tid = FALSE){
  global $language;
  if($tid){
    $query = 'SELECT n.nid, n.title FROM {node} n INNER JOIN {taxonomy_index} tn ON n.nid=tn.nid WHERE '
           . 'n.title ' . ($dir == 'previous' ? '<' : '>') . ' :title AND n.type = :type AND n.status=1 '
           . 'AND tn.tid = :tid AND n.language = :language ORDER BY n.title ' . ($dir == 'previous' ? 'DESC' : 'ASC');
    //use fetchObject to fetch a single row
    $row = db_query($query, array(':title' => $node->title, ':type' => $node->type, ':tid' => $tid, ':language' => $language->language))->fetchObject();
  }else{
    $query = 'SELECT n.nid, n.title FROM {node} n WHERE '
           . 'n.title ' . ($dir == 'previous' ? '<' : '>') . ' :title AND n.type = :type AND n.status=1 AND n.language = :language '
           . 'ORDER BY n.title ' . ($dir == 'previous' ? 'DESC' : 'ASC');
    //use fetchObject to fetch a single row
    $row = db_query($query, array(':title' => $node->title, ':title' => 'Serie GA', ':type' => $node->type, ':language' => $language->language))->fetchObject();
  }
  if($row) {
    $text = $next_node_text ? $next_node_text : $row->title;
    //return $prepend_text . l($text, 'node/'.$row->nid, array('rel' => $dir)) . $append_text;
    return l($next_node_text, 'node/'.$row->nid, array('attributes' => array('rel' => 'tooltip', 'class' => $append_text, 'data-original-title' => $prepend_text), 'html' => TRUE));
  } else {
      return FALSE;
  }
}

/**
 * Bloque de lenguages
 */
function porto_sub_links__locale_block(&$variables) {
  // the global $language variable tells you what the current language is
  global $language;
  // an array of list items
  $items = array();
  foreach($variables['links'] as $lang => $info) {
      //$name     = $info['language']->native;
      $name     = $info['language']->language;
      $href     = isset($info['href']) ? $info['href'] : '';
      $li_classes   = array('list-item-class');
      // if the global language is that of this item's language, add the active class
      if($lang === $language->language){
            $li_classes[] = 'active';
      }
      $link_classes = array();
      $options = array('attributes' => array('class'    => $link_classes),
                                             'language' => $info['language'],
                                             'html'     => true
                                             );
      $link = l($name, $href, $options);
      $link = l($info['title'], $href, $options);
      // display only translated links
      if ($href) $items[] = array('data' => $link, 'class' => $li_classes);
      //if ($href) $items[] = $link;
   }
  // output
  $attributes = array('class' => array('dropdown-menu'), 'role' => 'menu', 'id' => 'lang-switcher');
  //$attributes = array('class' => array('nav', 'nav-pills', 'nav-top'), 'role' => 'menu', 'id' => 'lang-switcher');
  $output = theme('item_list', array('items' => $items,
                                  'title' => '',
                                  'type'  => 'ul',
                                  'attributes' => $attributes
  ));
  //kpr($output);
  return $output;
  //$idiomas = implode("|", $items);
  //return $idiomas;
}

function porto_sub_item_list($variables) {
  if (isset($vars['attributes']['class']) && in_array('pager', $vars['attributes']['class'])) {
    unset($vars['attributes']['class']);
    foreach ($vars['items'] as $i => &$item) {
      if (in_array('pager-current', $item['class'])) {
        $item['class'] = array('active');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
      elseif (in_array('pager-ellipsis', $item['class'])) {
        $item['class'] = array('disabled');
        $item['data'] = '<a href="#">' . $item['data'] . '</a>';
      }
    }
    return '<div class="pagination pagination-large pull-right">' . theme('item_list', $vars) . '</div>';
  }
  else {

    $items = $variables['items'];
    $title = $variables['title'];
    $type = $variables['type'];
    $attributes = $variables['attributes'];

    // Only output the list container and title, if there are any list items.
    // Check to see whether the block title exists before adding a header.
    // Empty headers are not semantic and present accessibility challenges.
    $output = '';
    if(isset($variables['attributes']['id']) && $variables['attributes']['id'] == 'lang-switcher') {
      $output = '<div class="btn-group"><button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">';
      $output .= t('Languages');
      $output .= '<span class="caret"></span></button>';
    }
    if (isset($title) && $title !== '') {
      $output .= '<h3>' . $title . '</h3>';
    }

    if (!empty($items)) {
      $output .= "<$type" . drupal_attributes($attributes) . '>';
      $num_items = count($items);
      $i = 0;
      foreach ($items as $item) {
        $attributes = array();
        $children = array();
        $data = '';
        $i++;
        if (is_array($item)) {
          foreach ($item as $key => $value) {
            if ($key == 'data') {
              $data = $value;
            }
            elseif ($key == 'children') {
              $children = $value;
            }
            else {
              $attributes[$key] = $value;
            }
          }
        }
        else {
          $data = $item;
        }
        if (count($children) > 0) {
          // Render nested list.
          $data .= theme('item_list', array('items' => $children, 'title' => NULL, 'type' => $type, 'attributes' => $attributes));
        }
        if ($i == 1) {
          $attributes['class'][] = 'first';
        }
        if ($i == $num_items) {
          $attributes['class'][] = 'last';
        }
        $output .= '<li' . drupal_attributes($attributes) . '>' . $data . "</li>\n";
      }
      $output .= "</$type>";
    }
    if(isset($variables['attributes']['id']) && $variables['attributes']['id'] == 'lang-switcher') {
      $output .= '</div>';
    }
    return $output;
  }
}

?>
