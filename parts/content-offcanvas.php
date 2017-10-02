<div class="off-canvas position-right" id="off-canvas" data-off-canvas>
		<div style="padding:2em">
			<?php joints_off_canvas_nav(); ?>
			<?php if ( is_active_sidebar( 'offcanvas' ) ) : ?>

				<?php dynamic_sidebar( 'offcanvas' ); ?>

			<?php else : ?>

			<!-- This content shows up if there are no widgets defined in the backend. -->
								
			<div class="alert help">
				<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
			</div>

			<?php endif; ?>
		</div>
</div>
