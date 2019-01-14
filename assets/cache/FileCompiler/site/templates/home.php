<?php

 include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_head.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include header markup ?>

<!-- CONTENT AREA BEGINS -->
	<section id="cover">
		<section id="info_text"><?php
	
		// output 'headline' if available, otherwise 'title'
		// echo "<h1>" . $page->get('headline|title') . "</h1>";
	
		// output bodycopy
		echo $page->body;
	
		// render navigation to child pages
		// renderNav($page->children);
	
	?>
	<p><a href="<?php echo $pages->get(1001)->url;?>" class="forward">Palvelumme</a></p>
	</section> <!-- Info text -->
	<section id="picture1"></section> <!-- Picture 1 -->
	</section> <!-- Cover -->
	<!-- end content -->

	

	<section id="cover2">
		<section id="pattern1">
			
		</section> <!-- Pattern 1 -->
		<section id="info_text2"><?php
	
		if(count($page->images)) {
	
			// if the page has images on it, grab one of them randomly... 
			$image = $page->images->getRandom();
			
			// resize it to 400 pixels wide
			$image = $image->width(400);
			
			// output the image at the top of the sidebar...
			// echo "<img src='$image->url' alt='$image->description' />";
			
		}
	
		// output sidebar text if the page has it
		echo $page->sidebar;
	
	?>
		<p><a href="<?php echo $pages->get(1016)->url;?>" class="forward">Ota yhteytt&auml;</a></p>
		</section> <!-- Info text 2 -->
	</section> <!-- Cover 2 -->
	<!-- end sidebar -->

<!-- CONTENT AREA ENDS -->

<?php include(\ProcessWire\wire('files')->compile(\ProcessWire\wire("config")->paths->root . 'site/templates/_foot.php',array('includes'=>true,'namespace'=>true,'modules'=>true,'skipIfNamespace'=>true))); // include footer markup ?>


