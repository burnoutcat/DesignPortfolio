<?php

require_once "lib/php/helper.php";
require_once "elements/templates.php";

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Designed by Burnoutcat</title>

	<?php include "elements/header-property.php" ?>
	<script src="js/canvas.js"></script>
	<script src="js/interaction.js"></script>

</head>
<body onload="indexLoaded()"> <!-- Load Canvas -->
	<section id="action"> <!-- Canvas Animation Listener -->

		<div class="animated fadeIn delay-1s">
			<?php include "elements/main-header.php" ?>
		</div>

		<canvas id="index-canvas" class="animated fadeIn delay-1s"></canvas>

		<div class="index-window container">
			<div class="index-title flex-child">
				<div class="pt1">
					<h4>My name is</h4>
					<div class="pt2">
						<h1>Jacky Zheng</h1>
					</div>
				</div>
				<div class="pt3-wrapper">
					<div class="pt3">
						<h4>I'm a</h4>
						<h1>PRODUCT DESIGNER</h1>
					</div>
				</div>
			</div>
			<div class="index-detail animated fadeIn delay-1s">
				<p>I design <b>user interfaces</b>, <b>digital graphics</b>, and <b>websites</b> that understand user needs. I have been well known as a great <b>team-player</b> and well-adapted to the rapidly growing industry. </p>
			</div>
		</div>

		<canvas id="canvas-1" class="container animated fadeIn delay-1s"></canvas>

		<div class="feature-window flex-parent container flex-align-center delay-1s animated fadeIn">
			<div class="flex-none">
				<p>1</p>
			</div>
			<div class="flex-child" style="content:'' ;"></div>
			<div class="flex-none feature-title">
				<h1>featured projects</h1>
			</div>
		</div>


	<div class="feature-project-window row container animated fadeIn delay-1s">
		<?php 

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `project`
			WHERE `featured` = 1
			ORDER BY date_create DESC
			LIMIT 4
			
			"
		);

			echo array_reduce($result,
			'projectFeatured');


		 ?>
	</div>

	<div class="all-project-button container flex-parent">
		<div class="flex-child" style="content: '';"></div>
		<div class="nav">
			<a href="portfolio.php"><p>>> all projects</p></a>
		</div>

	</div>

	</section>

	<div class="flex-parent index-about-window container">
		<div class="flex-none index-about-text">
			<h2>Think about my design process. I love to research <span>design trends</span> and <span>user behaviors</span>, and quickly design prototypes that are <span>intuitive</span> and <span>scalable</span>.  I am more than happy to demonstrate my ideas via low or high-fidelity prototype using Sketch, Adobe XD, and Figma. I love to build websites and interactive prototypes using HTML5/CSS3 and JavaScript/jQuery. Also, I am a super talkative person, and love to share my ideas and passions about design. </h2>

			<h2>While I am not designing, I’d like to go out doing videography and photography. <br>
			<span>Feel free to shoot me a message or even grab a coffee with me.</span> </h2>

			<a href="https://jackyjian.com/" target="_Blank">Click here to view my video production work -> </a>

		</div>
		
		<div class="canvas-3 flex-child align-right">
			<canvas id="canvas-3"></canvas>
			<p>2</p>
		</div>
		<div class="flex-none index-about">
			<div class="index-about-title">
				<h1>about</h1>
				<h1>me.</h1>
			</div>

			<div class="index-about-nav">
				<canvas id="canvas-2"></canvas>
				<nav class="index-nav-list">
					<div class="project-button">
						<button class="button-large" onclick="location.href='portfolio.php'">projects</button>
					</div>
					<div class="resume-button">
						<button class= "button-large" onclick="window.open('pdf/zheng-resume-2020.pdf','_blank')">resume</button>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<?php include "elements/side-nav.php" ?>

	<?php include "elements/main-footer.php" ?>


	
</body>
</html>
