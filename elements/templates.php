<?php 


function projectList($carry,$item){
$tags = array_reduce(
	explode(",", $item->tags),
	function($c,$i){return $c."<span>$i</span>";}
);

return $carry.<<<HTML

<div class="portfolio-item flex-align-center flex-parent col-md-3 col-sm-6">
	<div class="image">
		<img src="img/$item->image_thumbnail" class="media-image"alt="$item->name">
	</div>
	<div class="text-wrapper flex-child">
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
		<a class="github icon flex-none" href="#"> 
			<img src="img/github_logo_100.svg" class="media-image" alt="github">
		</a>
		<a class="egress icon flex-none" href="$item->link">
			<img src="img/egress.svg" class="media-image" alt="link to project">
		</a>					
	</div>
</div>



HTML;

}


?>
