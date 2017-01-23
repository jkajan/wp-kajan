<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<div class="menu" style="font-family: 'Lobster', cursive; color: #333; font-size 3em;">
			<a href="<?php echo home_url(); ?>">Home</a>
		</div>
	</div>
	<div class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small-only">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a>
		</ul>
	</div>
</div>
