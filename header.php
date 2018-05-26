<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
	    	<meta name="theme-color" content="#121212">
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
		<link rel="icon" sizes="16x16 32x32 64x64" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
		<link rel="icon" type="image/png" sizes="196x196" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-192.png">
		<link rel="icon" type="image/png" sizes="160x160" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-160.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-96.png">
		<link rel="icon" type="image/png" sizes="64x64" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-64.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-16.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-57.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-114.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-72.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-144.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-60.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-120.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-76.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-180.png">
		<meta name="msapplication-TileColor" content="#FFFFFF">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-144.png">
		<meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/browserconfig.xml">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
	
	<!-- Uncomment this line if using the Off-Canvas Menu --> 
		
	<body <?php body_class(); ?>>
						<header class="header">
						<div data-sticky-container>
								<div data-sticky data-margin-top='0' data-anchor="maincontent">
										<div class="x-grid">

											<div style="border-bottom: solid thin #aaa;">
												<div class="top-bar">
													<div class="top-bar-title small-10 medium-offset-1 medium-8 large-offset-2 large-6 cell" style="padding:0;">
														<h2><a href="https://blog.xn--kajn-7na.io">blog.kaján.io</a></h2>
													</div>
													<div class="top-bar-right auto cell">
														<?php get_template_part( 'parts/nav', 'offcanvas' ); ?>
													</div>
												</div>
											</div>
										</div>
								</div>
						</div>			
							 <!-- This navs will be applied to the topbar, above all content 
								  To see additional nav styles, visit the /parts directory -->
						</header> <!-- end .header -->

		<div class="off-canvas-wrapper">
							
			<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
			
			<div id="maincontent" class="off-canvas-content" data-off-canvas-content>
					

