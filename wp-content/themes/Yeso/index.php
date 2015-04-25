<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Wordpress blog</title>
</head>
<body>
	<section>
		<article>
			<?php 

			if (have_post()):
				while (have(post)) : the_post(); ?>
					
				<h1>	<?php the_title(); ?>	</h1>
				<?php the_content(); ?>
				<?php endwhile;
				else : 
						echo '<p>No content found </p>';
					endif; 
				?> 
		</article>
	</section>
</body>
</html>