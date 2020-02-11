<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project | Burnoutcat</title>

	<?php include "elements/header-property.php" ?>
	<script src="js/canvas.js"></script>
	<script> 

		$(document).ready(function (){
			canvas06();
			canvas07();
		})

	</script>

</head>
<body>
	<header class="navbar portfolio header-container animated fadeIn">
		<div class="navbar-wrapper flex-wrap flex-align-center flex-parent">
			<a href="portfolio.php" class="site-logo flex-none">
				<img src="img/backicon.svg" alt="site-logo" style="height: 30px;">
			</a>
			<div class="flex-child" style="content: '';"></div>
			<div class="nav flex-none">
				<ul>
					<li><p>Lorem ipsum dolor sit amet, consectetur </p></li>
					<li><a href="portfolio.php"><p>Lorem ipsum dolor sit amet</p></a></li>
				</ul>
			</div>
		</div>	
	</header>

	<div id="huedisco" class="portfolio-content">
		<div class="project-banner-window" style="background: url(img/portfolio/hue_disco/huedisco-banner.png) no-repeat center center; background-size: cover;">
			<div class="project-banner-textwrapper">
				<div class="project-banner-title">
					<h1>HUE DISCO</h1>
					<h4>UI/UX Design</h4>
				</div>
				<div class="project-banner-detail">
					<p>Lorem ipsum dolor sit amet, <b>consectetur</b> adipisicing elit. A itaque, ipsa, sint dolores minima tempore, doloribus suscipit <b>officia</b>et magni </p>
				</div>
				<div class="project-banner-tag tag flex-parent">
					<span>ipsum</span>
					<span>ipsum</span>
					<span>ipsum</span>
					<span>ipsum</span>
					<span>ipsum</span>
				</div>
			</div>
			<div class="project-banner-control">
				<div class="text-wrapper flex-parent flex-align-center">
					<div class="date flex-none">
						<h4>Project Date</h4>
						<p>2019/2/2 22:22</p>
					</div>
					<div class="type flex-child">
						<h4>Project Type</h4>
						<p>Personal</p>
					</div>
					<div class="links flex-parent align-center">
						<a class="github icon flex-none" href="#"> 
							<img src="img/github_logo_100.svg" class="media-image" alt="github">
							<h4>Github</h4>
						</a>
						<a class="egress icon flex-none" href="$item->link" target="#">
							<img src="img/egress.svg" class="media-image" alt="link to project">
							<h4>View</h4>
						</a>									
					</div>
				</div>
			</div>
		</div>

		<div class="portfolio-content-detail container">

			<div class="main-description align-center">
				<h3>If you want to turn your living room into a nightclub, this app is for you. Hue Disco brings features such as change <b>colors</b> by BPM (beats per minute), strobe light mode, and auto sync mode to your existing hue system with no additional hardware required. </h3>
			</div>

			<canvas id="canvas-6" style="width:100%; height: 400px;"></canvas>

			<div class="description-2 flex-parent flex-align-center">
				<div class="text flex-child">
					<div class="title">
						<h3>What is Hue Disco</h3>
					</div>
					<div class="detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>
				</div>
				<div class="project-image flex-none">
					<img src="img/portfolio/hue_disco/sample_1.png" alt="huedisco" class="media-image">
				</div>
			</div>

			<div class="description-3 flex-parent flex-align-center">
				<div class="project-image flex-none">
					<img src="img/portfolio/hue_disco/sample_2.png" alt="huedisco" class="media-image">
				</div>
				<div class="text flex-child">
					<div class="title">
						<h3>What is Hue Disco</h3>
					</div>
					<div class="detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
					</div>
				</div>
			</div>

			<div class="description-4 flex-parent flex-align-center">
				<div class="text flex-none">
					<div class="title">
						<h3>What is Hue Disco</h3>
					</div>
					<div class="detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.  </p>
					</div>
				</div>
				<div class="project-image flex-child">
					<canvas id="canvas-7" style="width: 100%;height: 60px;"></canvas>
					<img src="img/portfolio/hue_disco/sample_3.png" alt="huedisco" class="media-image">
				</div>
			</div>

			<div class="description-5 align-center">
				<div class="text">
					<div class="title">
						<h3>What is Hue Disco</h3>
					</div>
					<div class="detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>
				</div>
				<div class="project-image">
					<img src="img/portfolio/hue_disco/sample_4.png" alt="huedisco" class="media-image">
				</div>
			</div>

			<div class="description-6 flex-parent flex-align-center">
				<div class="text flex-child">
					<div class="title">
						<h3>What is Hue Disco</h3>
					</div>
					<div class="detail">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
					</div>
				</div>
				<div class="project-image flex-none">
					<img src="img/portfolio/hue_disco/sample_5.png" alt="huedisco" class="media-image">
				</div>
			</div>

		</div>


	</div>

	<?php include 'elements/side-nav.php' ?>
	<?php include "elements/main-footer.php" ?> <!-- Site Footer -->
</body>
</html>