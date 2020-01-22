<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index</title>

	<?php include "elements/header-property.php" ?>
	<script src="js/canvas.js"></script>

</head>
<body>
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

		<div class="feature-window flex-parent container">
			<div class="flex-child" style="content:'' ;"></div>
			<div class="flex-none feature-title">
				<h1>featured projects</h1>
			</div>
		</div>

	</section>
	
</body>
</html>
