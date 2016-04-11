<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
	    <meta charset="<?php bloginfo('charset'); ?>">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <title><?php if ( is_front_page() ) : bloginfo( 'name' ); else : wp_title(''); endif; ?></title>
	    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php if ( ot_get_option('favicon') ) : ?><link rel="shortcut icon" href="<?php echo ot_get_option('favicon'); ?>" /><?php endif; ?>
		<?php wp_head() ?>
	</head>
	<body>
		<div class="site-wrapper">
			<header class="site-header">
				<a href="/control/wp-admin/">Dashboard</a>
				<nav class="site-navigation">
				</nav><!-- .site-navigation -->
			</header>
			<section class="site-content">