<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Gruppo&family=Open+Sans:wght@700&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<header id="site-header" class="header">
		<div class="container">
			<div class="header__content">
				<div class="header__branding">
					<?php the_custom_logo(); ?>
				</div>

				<nav id="site-navigation" class="header__nav navigation">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container'      => '',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav>
				
				<div class="header__phone">
					<a class="header__phone--link" href="tel:+14033908939">+1 (403) 390-8939</a>
				</div>

				<button id="burger" class="toggle" ar site-navigationia-controls="primary-menu" aria-expanded="false">
					<span class="toggle__line"></span>
				</button>
			</div>
		</div>
	</header>