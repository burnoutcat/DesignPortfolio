<!DOCTYPE html>
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
			<div class="skillset-detail">
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
					<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">PHP</div>
					<div class="tag">mySQL</div>
				</div>
				<div class="project-list row gap xs-small">
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/huedisco.png" class="media-image" alt="Hue Disco">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/deyoung.png" class="media-image" alt="deYoung">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/gagito.png" class="media-image" alt="Gagito">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/telepaz.png" class="media-image" alt="Telepaz">
							</div>
						</a>
					</div>						
				</div>
			</div>
			<div class="content"> <!-- UI -->
				<div class="content-detail">
					<p><b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">PHP</div>
					<div class="tag">mySQL</div>
				</div>
				<div class="project-list row gap xs-small">
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/huedisco.png" class="media-image" alt="Hue Disco">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/deyoung.png" class="media-image" alt="deYoung">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/gagito.png" class="media-image" alt="Gagito">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/telepaz.png" class="media-image" alt="Telepaz">
							</div>
						</a>
					</div>						
				</div>
			</div>
			<div class="content"> <!-- Graphic Design -->
				<div class="content-detail">
					<p> <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">PHP</div>
					<div class="tag">mySQL</div>
				</div>
				<div class="project-list row gap xs-small">
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/huedisco.png" class="media-image" alt="Hue Disco">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/deyoung.png" class="media-image" alt="deYoung">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/gagito.png" class="media-image" alt="Gagito">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/telepaz.png" class="media-image" alt="Telepaz">
							</div>
						</a>
					</div>						
				</div>
			</div>
			<div class="content"> <!-- Motion Graphic -->
				<div class="content-detail">
					<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia </b>et magni maxime nulla at! Veniam amet iusto hic voluptatibus mollitia id perspiciatis quam deserunt tempore, impedit fugit dicta similique inventore et.</p>
				</div>
				<div class="content-tags">
					<div class="tag">HTML</div>
					<div class="tag">CSS</div>
					<div class="tag">JavaScript</div>
					<div class="tag">PHP</div>
					<div class="tag">mySQL</div>
				</div>
				<div class="project-list row gap xs-small">
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/huedisco.png" class="media-image" alt="Hue Disco">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/deyoung.png" class="media-image" alt="deYoung">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/gagito.png" class="media-image" alt="Gagito">
							</div>
						</a>
					</div>
					<div class="project-item col-lg-3 col-md-6">
						<a href="#">
							<div class="project-thumbnail">
								<img src="img/telepaz.png" class="media-image" alt="Telepaz">
							</div>
						</a>
					</div>						
				</div>
			</div>
			
		</div>
	</div>





	<?php include "elements/side-nav.php" ?>
	<?php include "elements/main-footer.php" ?>
</body>
</html>