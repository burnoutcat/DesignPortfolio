<!DOCTYPE html>
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

		<?php include "elements/main-header.php" ?>

		<canvas id="index-canvas"></canvas>

		<div class="index-window container flex-parent animated fadeInUp">
			<div class="index-title flex-child">
				<h4>Designed by</h4>
				<h1>burnoutcat</h1>
			</div>
			<div class="index-detail">
				<p>Lorem ipsum dolor sit amet, consectetur <b>adipiscing</b> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. <b> Ut enim ad minim veniam</b>, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
			</div>
		</div>

		<canvas id="canvas-1" class="container"></canvas>

		<div class="feature-window flex-parent container flex-align-center">
			<div class="flex-none">
				<p>1</p>
			</div>
			<div class="flex-child" style="content:'' ;"></div>
			<div class="flex-none feature-title">
				<h1>featured projects</h1>
			</div>
		</div>


	<div class="feature-project-window row container">
		<div class="project-item col-md-3 col-sm-6">
			<a href="#">
				<div class="project-thumbnail">
					<img src="img/huedisco.png" class="media-image" alt="Hue Disco">
				</div>
			</a>
		</div>
		<div class="project-item col-md-3 col-sm-6">
			<a href="#">
				<div class="project-thumbnail">
					<img src="img/deyoung.png" class="media-image" alt="deYoung">
				</div>
			</a>
		</div>
		<div class="project-item col-md-3 col-sm-6">
			<a href="#">
				<div class="project-thumbnail">
					<img src="img/gagito.png" class="media-image" alt="Gagito">
				</div>
			</a>
		</div>
		<div class="project-item col-md-3 col-sm-6">
			<a href="#">
				<div class="project-thumbnail">
					<img src="img/telepaz.png" class="media-image" alt="Telepaz">
				</div>
			</a>
		</div>
	</div>

	<div class="all-project-button container flex-parent">
		<div class="flex-child" style="content: '';"></div>
		<div class="nav">
			<a href="#"><p>>> all projects</p></a>
		</div>

	</div>

	</section>

	<div class="flex-parent index-about-window container">
		<div class="flex-none index-about-text">
			<h2>Lorem ipsum dolor sit amet, <span>consectetur </span>adipisicing elit. Facilis, libero, ex odit fugit possimus ullam vitae in ad deserunt fugiat <span>voluptas</span> atque non consequuntur. Minima accusamus deleniti odio aliquid veritatis vero ad quaerat odit <span>molestiae</span>, sed dolor architecto dolorum molestias sit eius ipsa et 
			pariatur iure, officia officiis eligendi. Facere!</h2>

			<a href="#">Lorem ipsum dolor sit amet</a>

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
						<button class="button-large" onclick="location.href='#'">projects</button>
					</div>
					<div class="resume-button">
						<button class= "button-large" onclick="location.href='#'">resume</button>
					</div>
				</nav>
			</div>
		</div>
	</div>

	<?php include "elements/side-nav.php" ?>

	<?php include "elements/main-footer.php" ?>


	
</body>
</html>
