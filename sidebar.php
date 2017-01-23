<div id="sidebar1" class="sidebar large-4 medium-4 columns" role="complementary">
<div class="row">
	<div class="medium-6 medium-offset-6 columns">
	<?php if ( is_active_sidebar( 'sidebar1' ) ) : ?>

		<?php dynamic_sidebar( 'sidebar1' ); ?>
	</div>
</div>
	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>
