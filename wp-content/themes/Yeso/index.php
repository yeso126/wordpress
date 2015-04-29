<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <title><?php bloginfo('title'); ?></title>
  <link rel="stylesheet" href=" <?php bloginfo('stylesheet_url'); ?> "/>
</head>
<body>
	<header class="header">
		<h1> <?php bloginfo('name'); ?></h1>
		<h2>  <?php bloginfo('description'); ?></h2>
	</header>
	<section class="loop">
			<?php query_posts( 'posts_per_pages=5' ); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="article">
					<header class="article_title">
						<h3><?php the_title(); ?></h3>
					</header>
					<strong><?php the_author(); ?></strong>
					<?php the_excerpt(); ?>
					<small><?php the_date(); ?> </small>
				</article> 
			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<h3>No se encontraron entradas</h3>
			<!-- no posts found -->
			<?php endif; ?>
			<?php rewind_posts(); ?>
	</section>
</body>

