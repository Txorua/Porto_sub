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
  <li class="span2 isotope-item"><?php print $row; ?></li>
<?php endforeach; ?>
