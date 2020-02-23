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

	<div class="skillset-window container flex-parent">
		<div class="flex-none" style="content: ''; width: 100px;"></div>
		<div class="skillset-title">
			<h1>Skillset</h1>
		</div>
		<div class="flex-child">
			<canvas id="canvas-5"></canvas>
			<div class="highlighted skillset-detail">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, reprehenderit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
				<p>Lorem ipsum dolor sit amet, consectetur.</p>
			</div>
		</div>
	</div>


	<div class="flex-parent container skill-tabs-window">
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
					<p>It was really hard for me to describe how much I am enjoying design, especially for web design. I love design projects that are   pixel-perfected across all screen sizes, and finetune CSS for maximum responsiveness. I’d like to prioritize usability and accessibility over visual presentation because I want my design to be understood by mass audiences. 
					</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">jQuery</div>
					<div class="tag">PHP</div>
					<div class="tag">MySQL</div>
				</div>
				<div class="project-list row gap xs-large">
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
					<p>I am a huge tech savvy guy and I have used an extremely wide range of devices, from smart toothbrush to varies automobile UI. Some of these UIs are visually fancy and packed with features in single page, and complex and hard to navigate. In my process of designing user interfaces, I always consider hierarchy, and to build products that are intuitive. 
					</p>
				</div>
				<div class="content-tags">
					<div class="tag">Sketch</div>
					<div class="tag">Illustrator</div>
					<div class="tag">XD</div>
					<div class="tag">InVision</div>
					<div class="tag">Figma</div>
				</div>
				<div class="project-list row gap xs-large">
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
					<p> I do graphic design (logo, packaging, branding, web banner) and digital illustration primary based on emphasis and balance. I love working with typographic and color as they are strong tools for appealing designs.
					</p>
				</div>
				<div class="content-tags">
					<div class="tag">Photoshop</div>
					<div class="tag">Illustrator</div>
					<div class="tag">InDesign</div>
					<div class="tag">Keynote</div>
					<div class="tag"> Procreate</div>
				</div>
				<div class="project-list row gap xs-large">
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
					<p>Proficient with After Effects to create 2D/3D animations for prototypes, AR demo, special effects. Two years of industry experience in graphic design, photography (product, portrait), and video production (film, advertisement). </p>
				</div>
				<div class="content-tags">
					<div class="tag">After Effect</div>
					<div class="tag">Premiere</div>
					<div class="tag">Final Cut Pro</div>
				</div>
				<div class="project-list row gap xs-large">
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