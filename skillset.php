<?php

require_once "lib/php/helper.php";
require_once "elements/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Skillset | Burnoutcat</title>

	<?php include 'elements/header-property.php'?>
	<script src="js/canvas.js"></script>
	<script src="js/interaction.js"></script>

</head>
<body onload="skillsetLoaded()">

	<?php include 'elements/main-header.php' ?>

	<canvas id="index-canvas" class="fixed"></canvas>

	<div class="skillset-window container flex-parent animated fadeInUp">
		<div class="flex-none" style="content: ''; width: 100px;"></div>
		<div class="skillset-title">
			<h1>Skillset</h1>
		</div>
		<div class="flex-child">
			<canvas id="canvas-5"></canvas>
			<div class="highlighted skillset-detail">
				<p>T or F -> All design and no play makes Jack a dull boy? </p>
				<p>Nah, I guess I just simply enjoy designing.....</p>
				<p>Take a look at what I am good at</p>
			</div>
		</div>
	</div>


	<div class="flex-parent container skill-tabs-window animated fadeIn delay-1s">
		<div class="flex-none skill-tabs">
			<nav>
				<div class="tab active"><h3>Websites</h3></div>
				<div class="tab"><h3>User Interface</h3></div>
				<div class="tab"><h3>Graphic Design</h3></div>
				<div class="tab"><h3>Motion Graphic</h3></div>
			</nav>
		</div>
		<div class="flex-child skill-tabs-content">
			<div class="content active"> <!-- Websites -->
				<div class="content-detail">
					<p>Proficient with web building (HTML, CSS, JavaScript). Especially creating responsive prototype websites, able to write an entire prototype project (from Sketch, XD, etc.) for a responsive website that can be accessed by multiple devices.</p>
					<p>I love design projects that are pixel-perfected across all screen sizes, and finetune CSS for maximum responsiveness. I want to prioritize usability and accessibility over visual presentation because I want my design to be understood by mass audiences.</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">jQuery</div>
					<div class="tag">PHP</div>
					<div class="tag">MySQL</div>
				</div>
				<div class="project-list row gap xs-medium">
					<?php 

					$result = makeQuery(
						makeConn(),
						"
						SELECT *
						FROM `project`
						WHERE category = 'Website'
						ORDER BY date_create DESC
						
						"
					);

						echo array_reduce($result,
						'projectFeatured');


					 ?>					
				</div>
			</div>
			<div class="content"> <!-- UI -->
				<div class="content-detail">
					<p>Capable of designing a user interface that is both understands customer needs and adapts to design trends and brainstorming enhancements to a product and creating high usability and accessibility designs that are friendly to developers.</p>
					<p>I am a huge tech-savvy guy, and I have used an extensive range of devices, from smart toothbrushes to varies automobile UI. Some of these UIs are visually fancy and packed with features in a single page, and complex and hard to navigate. In my process of designing user interfaces, I always consider hierarchy, and to build intuitive products.</p>
				</div>
				<div class="content-tags">
					<div class="tag">Sketch</div>
					<div class="tag">Illustrator</div>
					<div class="tag">XD</div>
					<div class="tag">InVision</div>
					<div class="tag">Figma</div>
				</div>
				<div class="project-list row gap xs-medium">
					<?php 

					$result = makeQuery(
						makeConn(),
						"
						SELECT *
						FROM `project`
						WHERE category = 'UI/UX Design'
						ORDER BY date_create DESC
						
						"
					);

						echo array_reduce($result,
						'projectFeatured');


					 ?>					
				</div>
			</div>
			<div class="content"> <!-- Graphic Design -->
				<div class="content-detail">
					<p> Proficient with design software such as Adobe Illustrator, Sketch, Photoshop, Procreate, etc. Design logos, product packings, brandings, web banners, and digital illustrations or instruction.</p>
					<p>I love working with typographic and color as they are strong tools for creating designs that are standing out. My favorite font is Helvetica Neue, a san-serif font with a wide range of variations.</p>
				</div>
				<div class="content-tags">
					<div class="tag">Photoshop</div>
					<div class="tag">Illustrator</div>
					<div class="tag">InDesign</div>
					<div class="tag">Keynote</div>
					<div class="tag"> Procreate</div>
				</div>
				<div class="project-list row gap xs-medium">
					<?php 

					$result = makeQuery(
						makeConn(),
						"
						SELECT *
						FROM `project`
						WHERE category = 'Graphic Design'
						ORDER BY date_create DESC
						
						"
					);

						echo array_reduce($result,
						'projectFeatured');


					 ?>		
				</div>
			</div>
			<div class="content"> <!-- Motion Graphic -->
				<div class="content-detail">
					<p>Proficient with After Effects to create 2D/3D animations for prototypes, logo animations, AR demos, special effects. Years of experience using video editing software such as Premiere Pro and Final Cut Pro. Capable of creating prototype demonstration that isn’t provided by current prototyping software (image recognition, photo filter, etc.) </p>
				</div>
				<div class="content-tags">
					<div class="tag">After Effect</div>
					<div class="tag">Premiere</div>
					<div class="tag">Final Cut Pro</div>
				</div>
				<div class="project-list row gap xs-medium">
					<?php 

					$result = makeQuery(
						makeConn(),
						"
						SELECT *
						FROM `project`
						WHERE category = 'Motion Graphic'
						ORDER BY date_create DESC
						
						"
					);

						echo array_reduce($result,
						'projectFeatured');


					 ?>					
				</div>
			</div>
			
		</div>
	</div>





	<?php include "elements/side-nav.php" ?>
	<?php include "elements/main-footer.php" ?>
</body>
</html>