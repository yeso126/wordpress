<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title> <?php bloginfo('name') ?></title>
	<link rel="stylesheet" href="<?php bloginfo(stylesheet_url) ?>">
</head>
<body>
	<h1> <?php bloginfo('name'); ?> </h1>
	<h2><?php bloginfo('description') ?></h2>
	<section>
		<ul>
			<li><?php bloginfo('name') ?></li>
			<li><?php bloginfo('description') ?></li>
			<li><?php bloginfo('wpurl') ?></li>
			<li><?php bloginfo('admin_email') ?></li>
			<li><?php bloginfo('charset') ?></li>
			<li><?php bloginfo('version') ?></li>
			<li><?php bloginfo('html_type') ?></li>
			<li><?php bloginfo('language') ?></li>
			<li><?php bloginfo('stylesheet_directory') ?></li>
			<li><?php bloginfo('stylesheet_url') ?></li>
		</ul>
	</section>
</body>
</html>