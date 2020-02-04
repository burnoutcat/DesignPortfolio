<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Portfolio | Burnoutcat</title>

	<?php include "elements/header-property.php" ?>
	<script src="js/canvas.js"></script>
	<script src="js/interaction.js"></script>


</head>
<body>
	<?php include "elements/main-header.php"?>

	<div class="portfolio-window container flex-parent flex-align-center">
		<div class="flex-child portfolio-title highlighted">
			<h1>PORTFOLIO</h1>
			<p>Lorem ipsum dolor sit amet, consectetur</p>
		</div>
		<div class="flex-none portfolio-title-text">
			<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque</p>
		</div>
	</div>

	<div class="portfolio-list-window container">
		<div class="portfolio-sort-window flex-parent">
			<div class="flex-child" style="content: '';"></div>
			<div class="flex-none sort-icons flex-parent">
				<div class="icon active" id="listview">
					<img src="img/listview.svg" alt="listview">
				</div>
				<div class="icon" id="gridview">
					<img src="img/gridview.svg" alt="gridview">
				</div>
			</div>
		</div>
		<div class="portfolio-list-detail listview">
			<div class="portfolio-item flex-align-center flex-parent col-md-3 col-sm-6">
				<div class="image">
					<img src="img/gagito.png" class="media-image"alt="gagito">
				</div>
				<div class="text-wrapper flex-child">
					<div class="title flex-parent">
						<div class="name">
							<b>Gagito.com</b>
						</div>
						<div class="category">
							<p>UI/UX Design</p>
						</div>
					</div>
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, voluptate aut porro, error perferendis fugiat laboriosam maiores in aperiam unde.</p>
					</div>
					<div class="tag">
						<span>CSS</span>
						<span>JavaScript</span>
					</div>
				</div>
				<div class="links flex-parent flex-align-center">
					<a class="github icon flex-none" href="#"> 
						<img src="img/github_logo_100.svg" class="media-image" alt="github">
					</a>
					<a class="egress icon flex-none" href="#">
						<img src="img/egress.svg" class="media-image" alt="link to project">
					</a>					
				</div>
			</div>
			<div class="portfolio-item flex-align-center flex-parent col-md-3 col-sm-6">
				<div class="image">
					<img src="img/huedisco.png" class="media-image"alt="gagito">
				</div>
				<div class="text-wrapper flex-child">
					<div class="title flex-parent">
						<div class="name">
							<b>Hue Disco</b>
						</div>
						<div class="category">
							<p>UI/UX Design</p>
						</div>
					</div>
					<div class="description">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt, voluptate aut porro, error perferendis fugiat laboriosam maiores in aperiam unde.</p>
					</div>
					<div class="tag">
						<span>CSS</span>
						<span>JavaScript</span>
					</div>
				</div>
				<div class="links flex-parent flex-align-center">
					<a class="github icon flex-none" href="#"> 
						<img src="img/github_logo_100.svg" class="media-image hidden" alt="github">
					</a>
					<a class="egress icon flex-none" href="#">
						<img src="img/egress.svg" class="media-image" alt="link to project">
					</a>					
				</div>
			</div>
		</div>
	</div>



	<?php include 'elements/side-nav.php' ?>
	<?php include 'elements/main-footer.php' ?>

</body>
</html>