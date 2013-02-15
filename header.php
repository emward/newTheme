<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica|Quicksand' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
    <?php wp_head(); ?>
</head>
	<body <?php body_class( $class ); ?>>
		<header>
			<h1>Just a Simple WordPress Theme.</h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>