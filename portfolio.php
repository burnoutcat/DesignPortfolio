<?php 

require_once "lib/php/helper.php";
require_once "elements/templates.php";

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio | Burnoutcat</title>

	<?php include "elements/header-property.php" ?>
	<script src="js/canvas.js"></script>
	<script src="js/interaction.js"></script>


</head>
<body onload="portfolioLoaded()">
	
	<?php include "elements/main-header.php"?>

	<canvas id="index-canvas" class="fixed"></canvas>

	<div class="portfolio-window container flex-parent flex-align-center animated fadeInUp">
		<div class="flex-child portfolio-title highlighted">
			<h1>PORTFOLIO</h1>
			<p>[UPDATING] Some projects that I designed</p>
		</div>
		<div class="flex-none portfolio-title-text">
			<p>Welcome to my design portfolio. Here are some projects that I worked or working on while pursuing my master’s degree in <b>Web Design & New Media</b>. I am a fast learner and also super addicted to product design. So, this is also a <b>super-active-constantly-updating</b> portfolio that I have been adding content every day.</p>
			<p>Btw,  <b>this website is completely designed and built from scratch</b>. My portfolio website is currently on revision 1. Go check out the <a href="https://github.com/burnoutcat/DesignPortfolio/" target="_blank">REV01</a> link on the top to view what feature has been done and what features are coming up.  </p>
		</div>
	</div>

	<div class="portfolio-list-window container animated fadeIn">
		<!-- <div class="portfolio-sort-window flex-parent">
			<div class="flex-child" style="content: '';"></div>
			<div class="flex-none sort-icons flex-parent">
				<div class="icon active" id="listview">
					<img src="img/listview.svg" alt="listview">
				</div>
				<div class="icon" id="gridview">
					<img src="img/gridview.svg" alt="gridview">
				</div>
			</div>
		</div> -->
		<div class="portfolio-list-detail listview">
			<div class="portfolio-label">
				<h2>Work In Progress</h2>
			</div>
			<?php 

				$result = makeQuery(
					makeConn(),
					"
					SELECT * 
					FROM `project`
					WHERE category = 'Work In Progress'
					ORDER BY date_create DESC
					"
				);

					echo array_reduce($result,
					'projectList');

	
			 ?>	

			<div class="portfolio-label">
				<h2>All Projects</h2>
			</div>
			<?php 

				$result = makeQuery(
					makeConn(),
					"
					SELECT * 
					FROM `project`
					WHERE category <> 'Work In Progress'
					ORDER BY date_create DESC
					"
				);

					echo array_reduce($result,
					'projectList');

	
			 ?>	
		</div>
	</div>



	<?php include 'elements/side-nav.php' ?>
	<?php include 'elements/main-footer.php' ?>

</body>
</html>