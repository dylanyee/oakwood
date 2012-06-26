<html>
	<head>
		<title>the Oakwood</title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<hgroup>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><span id="site-title"></span></a>
				<nav>
					<?php wp_nav_menu( array( 'header-menu' => __( 'Header Menu' ) ) ); ?>
				</nav>
			</hgroup>
		</header>

		<div id="main" class="">