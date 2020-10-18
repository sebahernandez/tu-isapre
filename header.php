<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tu-isapre
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>

	<script>
		(function (w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-WW626SV');
	</script>
	<!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>

	<!-- Nav Menu -->

	<nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top">
		<div class="container">
			<a class="navbar-brand" href="index.html">
				<?php if ( function_exists('the_custom_logo') ) {
	    	            the_custom_logo();
                      } 
                ?>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content"
				aria-controls="navbar-content" aria-expanded="false"
				aria-label="<?php esc_html_e( 'Toggle Navigation', 'theme-textdomain' ); ?>">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbar-content">
				<?php
						wp_nav_menu( array(
							'theme_location' => 'Menu Principal',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'depth'          => 2,
							'menu_class'     => 'navbar-nav ml-auto active',
							'walker'         => new Bootstrap_NavWalker(),
							'fallback_cb'    => 'Bootstrap_NavWalker::fallback',
						) );
					?>
			</div>
		</div>
	</nav>