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

	<div class="portfolio-window container flex-parent flex-align-center">
		<div class="flex-child portfolio-title highlighted">
			<h1>PORTFOLIO</h1>
			<p>[UPDATING] Some projects that I designed</p>
		</div>
		<div class="flex-none portfolio-title-text">
			<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque</p>
		</div>
	</div>

	<div class="portfolio-list-window container">
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
			<?php 

				$result = makeQuery(
					makeConn(),
					"
					SELECT * 
					FROM `project`
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