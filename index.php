<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica|Quicksand' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" >
</head>
	<body>
		<header>
			<h1>Just a Simple WordPress Theme.</h1>
			<nav>
				<ul>
					<li>Home</li>
					<li>WordPress</li>
				</ul>
			</nav>
		</header>
		<section>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/hero.jpg" />
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<section>
            <?php the_content(); ?>
				<article>
                <h2> <a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a></h2> 
                <p>My theme is a test theme that has been hours in the making. First step, upload a successful and working simple theme. Next step, take over the world. We think big here.</p>
				<p>We also have no idea what we're doing. So everyone, please take a step back.</p>
                </article>
        	</section>
            <?php endwhile; else: ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php endif; ?>
		</section>
		<footer>
			<h1>Contact Us</h1>
			<p>Theme Enthusiasts</p>
			<p>555 Nowhere Avenue South</p>
			<p>Phone: (800) 555-7882</p>
		</footer>
	</body>
</html>