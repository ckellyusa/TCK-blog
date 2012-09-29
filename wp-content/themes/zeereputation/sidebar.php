<?php $options = get_option('themezee_options'); ?>

<div id="sidebar">	
	
	<ul>

<?php
	if(is_page() && is_active_sidebar('sidebar-pages')) : dynamic_sidebar('sidebar-pages');
    elseif(is_active_sidebar('sidebar-blog')) : dynamic_sidebar('sidebar-blog');
else : ?>

	<?php wp_list_categories('title_li=<h2 class="widgettitle">Categories</h2>'); ?>
	
	<?php wp_list_pages('title_li=<h2 class="widgettitle">Pages</h2>'); ?>

	<li><h2 class="widgettitle"><?php _e('Archives', 'themezee_lang'); ?></h2>
		<ul>
		<?php wp_get_archives(); ?>
		</ul>
	</li>
	
<?php endif; ?>
	
	</ul>