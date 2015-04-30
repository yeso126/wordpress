<?php get_header(); ?>
<body>
	<header class="header">
		<h1> <?php bloginfo('name'); ?></h1>
		<h2>  <?php bloginfo('description'); ?></h2>
	</header>
		<section class="loop">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article class="article">
					<header class="article_title">
						<h3>
							<a href="<?php the_permalink();?>"> <?php the_title(); ?> </a>
						</h3>
					</header>
					<div class="article_content">
						<strong><?php the_author(); ?></strong>
						<?php the_content(); ?>
						<small><?php the_date(); ?> </small>
						<figure>
							<?php the_post_thumbnail('thumbnail'); ?>
						</figure>
					</div>
				</article> 
			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
				<h3>No se encontraro la entrada</h3>
			<!-- no posts found -->
			<?php endif; ?>
			<?php rewind_posts(); ?>
		</section>
<?php get_footer('single'); ?>
