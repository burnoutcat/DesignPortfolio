<?php 

function projectList($carry,$item){
$tags = array_reduce(
	explode(",", $item->tags),
	function($c,$i){return $c."<span>$i</span>";}
);


return $carry.<<<HTML

<div class="portfolio-item flex-align-center flex-parent col-md-3 col-sm-6">
	<div class="image">
		<img src="img/$item->image_thumbnail" class="media-image"alt="$item->name" onclick="window.location.href = 'portfolio-detail.php?id=$item->id';">
	</div>
	<div class="text-wrapper flex-child" onclick="window.location.href = 'portfolio-detail.php?id=$item->id';">
		<div class="title flex-parent">
			<div class="name">
				<b>$item->name</b>
			</div>
			<div class="category">
				<p>$item->category</p>
			</div>
		</div>
		<div class="description">
			<p>$item->sub_title</p>
		</div>
		<div class="tag flex-parent">
			$tags
		</div>
	</div>
	<div class="links flex-parent flex-align-center">
		<a class="github icon flex-none" href="$item->git"> 
			<img src="img/github_logo_100.svg" class="media-image" alt="github">
		</a>
		<a class="egress icon flex-none" href="$item->link" target="_blank">
			<img src="img/egress.svg" class="media-image" alt="link to project">
		</a>					
	</div>
</div>

HTML;
}

function projectDetail($carry,$item){
$tags = array_reduce(
	explode(",", $item->tags),
	function($c,$i){return $c."<span>$i</span>";}
);

$cssName = str_replace(" ","-",$item->name);

return $carry.<<<HTML

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

<div id="$cssName" class="portfolio-content">
	<div class="project-banner-window" style="background: url(img/$item->image_banner) no-repeat center center; background-size: cover; background-color:#1b1a1a;">
		<div class="project-banner-textwrapper">
			<div class="project-banner-title">
				<h1>$item->name</h1>
				<h4>$item->category</h4>
			</div>
			<div class="project-banner-detail">
				<p>$item->sub_title</p>
			</div>
			<div class="project-banner-tag tag flex-parent">
				$tags
			</div>
		</div>
		<div class="project-banner-control">
			<div class="text-wrapper flex-parent flex-align-center">
				<div class="date flex-none">
					<h4>Project Date</h4>
					<p>$item->date_create</p>
				</div>
				<div class="type flex-child">
					<h4>Project Type</h4>
					<p>Personal</p>
				</div>
				<div class="links flex-parent align-center">
					<a class="github icon flex-none" href="$item->git"> 
						<img src="img/github_logo_100.svg" class="media-image" alt="github">
						<h4>Github</h4>
					</a>
					<a class="egress icon flex-none" href="$item->link" target="_blank">
						<img src="img/egress.svg" class="media-image" alt="link to project">
						<h4>View</h4>
					</a>									
				</div>
			</div>
		</div>
	</div>

	<div class="portfolio-content-detail container">

		<div class="main-description align-center">
			<h3>$item->description_main</h3>
		</div>

		<canvas id="canvas-6" style="width:100%; height: 400px;"></canvas>

		<div class="description-2 flex-parent flex-align-center">
			<div class="text flex-child">
				<div class="title">
					<h3>$item->title_2</h3>
				</div>
				<div class="detail">
					<p>$item->description_2</p>
				</div>
			</div>
			<div class="project-image flex-none">
				<img src="img/$item->image_2" alt="$item->name" class="media-image">
			</div>
		</div>

		<div class="description-3 flex-parent flex-align-center">
			<div class="project-image flex-none">
				<img src="img/$item->image_3" alt="$item->name" class="media-image">
			</div>
			<div class="text flex-child">
				<div class="title">
					<h3>$item->title_3</h3>
				</div>
				<div class="detail">
					<p>$item->description_3</p>
				</div>
			</div>
		</div>

		<div class="description-4 flex-parent flex-align-center">
			<div class="text flex-none">
				<div class="title">
					<h3>$item->title_4</h3>
				</div>
				<div class="detail">
					<p>$item->description_4</p>
				</div>
			</div>
			<div class="project-image flex-child">
				<canvas id="canvas-7" style="width: 100%;height: 60px;"></canvas>
				<img src="img/$item->image_4" alt="$item->name" class="media-image">
			</div>
		</div>

		<div class="description-5 align-center">
			<div class="text">
				<div class="title">
					<h3>$item->title_5</h3>
				</div>
				<div class="detail">
					<p>$item->description_5</p>
				</div>
			</div>
			<div class="project-image">
				<img src="img/$item->image_5" alt="$item->name" class="media-image">
			</div>
		</div>

		<div class="description-6 flex-parent flex-align-center">
			<div class="text flex-child">
				<div class="title">
					<h3>$item->title_6</h3>
				</div>
				<div class="detail">
					<p>$item->description_6</p>
				</div>
			</div>
			<div class="project-image flex-none">
				<img src="img/$item->image_6" alt="$item->name" class="media-image">
			</div>
		</div>

	</div>


</div>

HTML;
}

?>
