<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget">
	<?php if ( is_single() ){
		dynamic_sidebar('widget-area-posts');
	} elseif ( is_archive() or is_search() ) {
		dynamic_sidebar('widget-area-archive');
	}?>
	</div>
</aside>
<!-- /sidebar -->
