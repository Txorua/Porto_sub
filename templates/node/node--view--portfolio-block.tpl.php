<li class="<?php echo theme_get_setting('portfolio_columns');?> isotope-item 
<?php print str_replace('&amp;', 'and', str_replace(',-', ' ', str_replace(' ', '-',strip_tags(render($content['field_catalogo']))))); ?> 
<?php print str_replace('&amp;', 'and', str_replace(',-', ' ', str_replace(' ', '-',strip_tags(render($content['field_aplicaciones']))))); ?>">
	<div class="portfolio-item thumbnail">
		<a href="<?php print $node_url; ?>" class="thumb-info">
			<?php print render ($content['field_miniatura_producto'][0]); ?>
			<span class="thumb-info-title">
				<span class="thumb-info-inner"><?php print $title; ?></span>
				<span class="thumb-info-type"><?php print str_replace('-', ' ', strip_tags(render($content['field_catalogo']))); ?></span>
			</span>
			<span class="thumb-info-action">
				<span title="Universal" href="#" class="thumb-info-action-icon"><i class="icon-zoom-in"></i></span>
			</span>
		</a>
	</div>
</li>


