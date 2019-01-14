<div class="push"></div> <!-- Footer Push -->
	</div> <!-- Wrapper -->
	<!-- FOOTER -->
	<footer role="">
		<section id="content">
			<section id="info">
				<p>
					<b><?php echo $pages->get("/")->title; ?></b><br />
					T&ouml;&ouml;l&ouml;nkatu 27 A 10<br />
					00260 Helsinki <span><a href="https://goo.gl/maps/BAFv5CJSZmw" title="Google Maps">Google Maps</a></span>
				</p>
				<p>
					<b>Puh:</b> (09) 726 22 00<br />
					<b>E-Mail:</b> asiakaspalvelu@tilikoskinen.fi
				</p>
			</section> <!-- Footer: Content Info -->
			<section id="menu2">
				<nav>
					<ul>
					<?php

					// top navigation consists of homepage and its visible children
					$homepage = $pages->get('/');
					$children = $homepage->children();

					// make 'home' the first item in the navigation
					// $children->prepend($homepage); 

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
			</section> <!-- Footer: Menu -->
		</section> <!-- Footer: Content -->
		<section id="logo">
			<a href="<?php echo $pages->get(1)->url;?>" title="Rva K.A.Koskisen Tili- ja toimistopalvelu Oy | Strateginen kumppanisi">
				<h1><?php echo $pages->get("/")->title; ?></h1>
			</a>
		</section> <!-- Logo -->
	</footer>
	<!-- FOOTER -->
</body>
</html>