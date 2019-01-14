<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

	<!-- CONTENT AREA BEGINS -->
	<section id="cover_title">
		<section id="title">
			<nav><?php
			echo "<ul class=\"breadcrumbs \">";

			$parents = $page->parents;
			
			foreach($parents as $parent) {
				$url = $parent->url;
				echo "<li><a href='$url'>{$parent->title}</a></li>\n";
			}
			
			// show current / "we are here" page as well, but not as link: (last element)
			echo "<li>{$page->title}</li>\n";
			
			echo "</ul>";
			?></nav>
		</section> <!-- Title -->
	<section id="cover_picture">

	</section> <!-- Cover picture -->
</section> <!-- Cover --><!-- end content -->
	<section id="content_dividedbar">
		<section class="left">
			<?php 
			// output 'headline' if available, otherwise 'title'
			// echo "<h1>" . $page->get('headline|title') . "</h1>";

			// output bodycopy
			echo $page->body; 
			?>
		</section>
	<section class="menu">
	<div id="pattern_small"></div>
		<nav>
			<?php
			// rootParent is the parent page closest to the homepage
			// you can think of this as the "section" that the user is in
			// so we'll assign it to a $section variable for clarity
				$section = $page->rootParent; 
	
			// if there's more than 1 page in this section...
				if($section->hasChildren > 1) {
			// output sidebar navigation
			// see _init.php for the renderNavTree function
				renderNavTree($section);
			}
			// output sidebar text if the page has it
				echo $page->sidebar; 
			?>
		</nav>
	</section> <!-- Menu -->
</section> <!-- Divided content bar -->
<!-- CONTENT AREA ENDS -->
<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>
