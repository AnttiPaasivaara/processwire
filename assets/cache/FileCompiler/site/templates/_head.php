<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php echo $page->title; ?> | <?php echo $pages->get("/")->title; ?></title>
	<meta name="description" content="<?php echo $page->summary; ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/styles.css" />
	<link rel="icon" type="image/png" href="<?php echo $config->urls->templates?>img/favi.png" />
	<link href="https://fonts.googleapis.com/css?family=Roboto;900" rel="stylesheet"> <!-- Roboto font -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body class='has-sidebar'>
<div class="wrapper">
<header>
		<section id="logo">
			<a href="<?php echo $pages->get(1)->url;?>" title="Rva K.A.Koskisen Tili- ja toimistopalvelu Oy | Strateginen kumppanisi">
				<h1><?php echo $pages->get("/")->title; ?></h1>
			</a>
		</section> <!-- Logo -->
		<section id="menu">
			<p id="languages">
				<a href="http://localhost/processwire/briefly-in-english/" title="Briefly in English">Briefly in English</a>
				<a href="http://localhost/processwire/yhteydenotto/" title="Tarjouspyynt&ouml;">Tarjouspyynt&ouml;</a>
			</p>
			<nav>
				<ul class="topnav" role='navigation'>
				<?php

				// top navigation consists of homepage and its visible children
				$homepage = $pages->get('/');
				$children = $homepage->children();

				// render an <li> for each top navigation item
				foreach($children as $child) {
					if($child->id == $page->rootParent->id) {
				// this $child page is currently being viewed (or one of it's children/descendents)
				// so we highlight it as the current page in the navigation
				echo "<li class='current' aria-current='true'><a href='$child->url'>$child->title</a></li>";
					} else {
					echo "<li><a href='$child->url'>$child->title</a></li>";
					}
				}
				?>
				</ul>
			</nav>
		</section> <!-- Menu -->
	</header>
	<!-- HEADER -->
