<?php

/**
 * @file views-view-unformatted--Porto-view.tpl.php
 * Porto's custom view unformatted template for all views tagged with "Porto Views".
 *
 * @ingroup views_templates
 */
?>
<?php
  global $language;
  $lang = $language->language;
?>
<?php foreach ($rows as $id => $row): ?>
<?php
  $row = trim($row);
  //la ruta
  $chunk1 = '<div class="portfolio-item img-thumbnail"><a href="';
  $chunk2 = $lang . '/';
  $ruta = drupal_get_path_alias('catálogo', $lang);

  $cat = taxonomy_term_load($variables['view']->result[$id]->tid)->name;
  if ($cat == "Custom") {
    
    $ruta = "content/serie-custom-webform";
//dsm($ruta);

  }	

  // Los filtros
  $tid = $variables['view']->result[$id]->tid;
  $terms = taxonomy_get_children($tid);
  //kpr(taxonomy_term_title($tid));
  //kpr(taxonomy_term_load($variables['view']->result[$id]->tid)->name);
  $h= ''; 
  foreach ($terms as $t) {
    $h .= str_replace(' ', '-', str_replace("'", '', $t->name)) . ', ';
  }
  $h = substr($h, 0, -2);

  $terminos = '#' . $h;

  $chunk4 = '" class="thumb-info" data-filter="'. $h .'">';

  //$row = str_replace('#', '#' . $h, $row);
  $row = $chunk1 .  $chunk2 . $ruta . $terminos . $chunk4 . $row;
?>
  <li class="span3 isotope-item"><?php print $row; ?></li>
<?php endforeach; ?>
