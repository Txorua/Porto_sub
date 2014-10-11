<div vocab="http://schema.org/" typeof="Product">
<div class="portfolio-title">
  <div class="row">
    <div class="portfolio-nav-all span1">
    <a href="?q=<?php global $language; print $language->language . '/' . drupal_get_path_alias('catálogo',$language->language); ?>" rel="tooltip" data-original-title="<?php print t('Back to list'); ?>"><i class="icon icon-th"></i></a>
    </div>
		<div class="span10 center">
      <h2 class="shorter" property="name"><?php print $title; ?></h2>
      <?php
        if ($content['field_catalogo']):
          $parents = taxonomy_get_parents($variables['field_catalogo'][0]['tid']);
          $catalogo = '';
          foreach ($parents as $id => $parent):
            $catalogo .= strtolower($parent->name) . ' - ';
          endforeach;
          $catalogo .= strtolower($content['field_catalogo'][0]['#markup']);
          $content['field_catalogo'][0]['#markup'] = $catalogo;
      ?>
      <b class="text-left" style="text-transform: capitalize;"><?php print render($content['field_catalogo']); ?></b>
      <?php endif; ?>
		</div>
		<div class="portfolio-nav span1">
    <?php print $variables['previous']; ?>
    <?php print $variables['next']; ?>
		</div>
	</div>
</div>

<hr class="tall">

<div class="row">
  <div class="span4">

    <div class="flexslider">
      <ul class="slides">
        <?php //foreach ($images as $delta => $item): ?>
        <?php foreach ($variables['field_miniatura_producto'] as $delta => $item): ?>
          <li>
	          <div class="thumbnail">
              <?php //$img_url = file_create_url($content['field_miniatura_producto']['#items'][0]['uri']); ?>
              <?php $img_url = file_create_url($item['uri']); ?>
              <img alt="" class="img-responsive" src="<?php print $img_url; ?>" property="image">
	          </div>  
          </li>
        <?php endforeach; ?>
      </ul>
    </div>

    <ul class="portfolio-details">
    <span><strong><?php print t('PDF Downloads'); ?></strong></span>
			<li>
        <ul class="list list-skills icons list-unstyled list-inline inline">
          <?php if ($content['field_fichero_catalogo_producto']): ?>
          <?php $file_url = file_create_url($content['field_fichero_catalogo_producto']['#items'][0]['uri']); ?>
          <li><i class="icon icon-check-sign"></i> <?php print l(t('Catalog'), $file_url, array('attributes' => array('target' => '_blank'))); ?> </li>
          <?php endif; ?>
          <?php if ($content['field_fichero_doc_tecnica']): ?>
          <?php $file_url = file_create_url($content['field_fichero_doc_tecnica']['#items'][0]['uri']); ?>
          <li><i class="icon icon-check-sign"></i> <?php print l(t('Product Sheet'), $file_url, array('attributes' => array('target' => '_blank'))); ?> </li>
          <?php endif; ?>
          <?php if ($content['field_fichero_man_instalacion']): ?>
          <?php $file_url = file_create_url($content['field_fichero_man_instalacion']['#items'][0]['uri']); ?>
          <li><i class="icon icon-check-sign"></i> <?php print l(t('Maintenance'), $file_url, array('attributes' => array('target' => '_blank'))); ?> </li>
          <?php endif; ?>
			  </ul>
			</li>
		  <li></li>
    </ul>

	</div>

	<div class="span8">

	  <div class="portfolio-info">
		  <div class="row">
			  <div class="span8 center">
				</div>
			</div>
		</div>

    <h4><strong><?php print t('Product Description'); ?></strong></h4>

    <?php print render($content['body']); ?>

    <?php hide($content['field_miniatura_producto']); ?>
    <?php hide($content['field_fichero_doc_tecnica']); ?>
    <?php hide($content['field_fichero_man_instalacion']); ?>
    <?php hide($content['field_fichero_catalogo_producto']); ?>
    <?php hide($content['field_foto_producto']); ?>
    <?php hide($content['field_detalles_producto']); ?>
    <?php hide($content['field_catalogo']); ?>
    <?php print render($content); ?>

	</div>
</div>
</div>
<hr class="tall" />

