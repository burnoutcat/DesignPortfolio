<?php 

	require_once "lib/php/helper.php";

	$conn = makeConn();

	$empty_project = (object) [
		"name"=>"",
		"category"=>"",
		"sub_title"=>"",
		"description_main"=>"",
		"title_2"=>"",
		"description_2"=>"",
		"title_3"=>"",
		"description_3"=>"",
		"title_4"=>"",
		"description_4"=>"",
		"title_5"=>"",
		"description_5"=>"",
		"title_6"=>"",
		"description_6"=>"",
		"title_7"=>"",
		"description_7"=>"",
		"title_8"=>"",
		"description_8"=>"",
		"image_thumbnail"=>"",
		"image_banner"=>"",
		"image_2"=>"",
		"image_3"=>"",
		"image_4"=>"",
		"image_5"=>"",
		"image_6"=>"",
		"image_7"=>"",
		"image_8"=>""
	];

	if (isset($_GET['action'])){
		if($_GET['action']=='update'){

			$statement = $conn->prepare("UPDATE `project` SET 
			`name`=?,
			`category`=?,
			`sub_title`=?,
			`description_main`=?,
			`title_2`=?,
			`description_2`=?,
			`title_3`=?,
			`description_3`=?,
			`title_4`=?,
			`description_4`=?,
			`title_5`=?,
			`description_5`=?,
			`title_6`=?,
			`description_6`=?,
			`title_7`=?,
			`description_7`=?,
			`title_8`=?,
			`description_8`=?,
			`image_thumbnail`=?,
			`image_banner`=?,
			`image_2`=?,
			`image_3`=?,
			`image_4`=?,
			`image_5`=?,
			`image_6`=?,
			`image_7`=?,
			`image_8`=?,
			`date_modify`=NOW()
			WHERE `id` =?
		");

			$statement->bind_param("sssssssssssssssssssssssssssi",
				$_POST["name"],
				$_POST["category"],
				$_POST["sub_title"],
				$_POST["description_main"],
				$_POST["title_2"],
				$_POST["description_2"],
				$_POST["title_3"],
				$_POST["description_3"],
				$_POST["title_4"],
				$_POST["description_4"],
				$_POST["title_5"],
				$_POST["description_5"],
				$_POST["title_6"],
				$_POST["description_6"],
				$_POST["title_7"],
				$_POST["description_7"],
				$_POST["title_8"],
				$_POST["description_8"],
				$_POST["image_thumbnail"],
				$_POST["image_banner"],
				$_POST["image_2"],
				$_POST["image_3"],
				$_POST["image_4"],
				$_POST["image_5"],
				$_POST["image_6"],
				$_POST["image_7"],
				$_POST["image_8"],
				$_GET['id']
			);

			$statement->execute();
			if($conn->errno) die($conn->error);

			header("loaction:admin.php?id={$_GET['id']}");

		}

		if($_GET['action'] == 'create') {
			$statement = $conn->prepare("INSERT INTO `project`
				(
					`name`,
					`category`,
					`sub_title`,
					`description_main`,
					`title_2`,
					`description_2`,
					`title_3`,
					`description_3`,
					`title_4`,
					`description_4`,
					`title_5`,
					`description_5`,
					`title_6`,
					`description_6`,
					`title_7`,
					`description_7`,
					`title_8`,
					`description_8`,
					`image_thumbnail`,
					`image_banner`,
					`image_2`,
					`image_3`,
					`image_4`,
					`image_5`,
					`image_6`,
					`image_7`,
					`image_8`,
					`date_modify`,
					`date_create`
				)
				VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW(),NOW())			
				");
				$statement->bind_param("sssssssssssssssssssssssssss",
					$_POST["name"],
					$_POST["category"],
					$_POST["sub_title"],
					$_POST["description_main"],
					$_POST["title_2"],
					$_POST["description_2"],
					$_POST["title_3"],
					$_POST["description_3"],
					$_POST["title_4"],
					$_POST["description_4"],
					$_POST["title_5"],
					$_POST["description_5"],
					$_POST["title_6"],
					$_POST["description_6"],
					$_POST["title_7"],
					$_POST["description_7"],
					$_POST["title_8"],
					$_POST["description_8"],
					$_POST["image_thumbnail"],
					$_POST["image_banner"],
					$_POST["image_2"],
					$_POST["image_3"],
					$_POST["image_4"],
					$_POST["image_5"],
					$_POST["image_6"],
					$_POST["image_7"],
					$_POST["image_8"]				
				);
				$statement->execute();
				if($conn->errno) die($conn->error);
				$id = $conn->insert_id;

				header("location:admin.php?id=$id");
		}

		if($_GET['action'] == 'delete'){

			$statement = $conn->prepare("DELETE FROM `project`
				WHERE `id` =?");
			$statement->bind_param("i",$_GET['id']);
			$statement->execute();
			if($conn->errno) die($conn->error);

			header("location:admin.php");
		}
	}

function projectListTemplate($carry,$item){
return $carry. <<<HTML
<div class="project-item-list flex-parent">
	<div class="project-list-thumbs">
		<img src="img/$item->image_thumbnail" class="media-image" alt="$item->name">
	</div>
	<div class="project-list-title">
		<h2>$item->name</h2>
		<h3>$item->category</h3>
	</div>
	<div class="project-list-createdate">
		<p>$item->date_create</p>
	</div>
	<div class="project-list-modifydate">
		<p>$item->date_modify</p>
	</div>
	<div class="project-list-control">
		<button class="admin-transparent-button" onclick="location.href='portfolio-detail.php?id=$item->id'">Visit</button>
	</div>
	<div class="project-list-control">
		<button class="admin-transparent-button" onclick="location.href='?id=$item->id'">Edit</button>
	</div>

	<hr>
</div>

HTML;
}

function editProjectForm($o){
$id = $_GET['id'];
$addoredit = $id=='new' ? 'Add' : 'Edit';
$createorupdate = $id =='new' ? 'create' : 'update';

echo <<<HTML
<div class="card">
	
	<div class="flex-parent edit-project-form-title">
		<h2 class="flex-child">$addoredit Project</h2>
		<div class="flex-none">
			<button class="admin-grey-button" onclick="location.href='admin.php?id=$id&action=delete'">DELETE</button>
		</div>
	</div>

	<form class="input-form" action="?id=$id&action=$createorupdate" method="post">
		<div class="input-detail flex-parent input-name">
			<p class="flex-child">Name</p>
			<input id="name" type="text" name="name" value="$o->name">
		</div>
		<div class="input-detail flex-parent input-category">
			<p class="flex-child">Category</p>
			<input id="category" type="text" name="category" value="$o->category">
		</div>
		<div class="input-detail flex-parent input-subtitle">
			<p class="flex-child">Subtitle</p>
			<input id="sub_title" type="text" name="sub_title" value="$o->sub_title">
		</div>
		<div class="input-detail flex-parent input-image-thumb">
			<p class="flex-child">Thumbnail Image</p>
			<input id="image_thumbnail" type="text" name="image_thumbnail" value="$o->image_thumbnail">
		</div>
		<div class="input-detail flex-parent input-image-banner">
			<p class="flex-child">Banner Image</p>
			<input id="image_banner" type="text" name="image_banner" value="$o->image_banner">
		</div>
		<div class="input-detail flex-parent input-des-main">
			<p class="flex-child">Main Description</p>
			<textarea id="description_main" type="text" name="description_main">$o->description_main</textarea>
		</div>
		<div class="input-detail flex-parent input-title-2">
			<p class="flex-child">Title</p>
			<input id="title_2" type="text" name="title_2" value="$o->title_2">
		</div>
		<div class="input-detail flex-parent input-image-2">
			<p class="flex-child">Image</p>
			<input id="image_2" type="text" name="image_2" value="$o->image_2">
		</div>
		<div class="input-detail flex-parent input-des-2">
			<p class="flex-child">Description</p>
			<textarea id="description_2" type="text" name="description_2">$o->description_2</textarea>
		</div>
		<div class="input-detail flex-parent input-title-2">
			<p class="flex-child">Title</p>
			<input id="title_3" type="text" name="title_3" value="$o->title_3">
		</div>
		<div class="input-detail flex-parent input-image-3">
			<p class="flex-child">Image</p>
			<input id="image_3" type="text" name="image_3" value="$o->image_3">
		</div>
		<div class="input-detail flex-parent input-des-3">
			<p class="flex-child">Description</p>
			<textarea id="description_3" type="text" name="description_3">$o->description_3</textarea>
		</div>
		<div class="input-detail flex-parent input-title-4">
			<p class="flex-child">Title</p>
			<input id="title_4" type="text" name="title_4" value="$o->title_4">
		</div>
		<div class="input-detail flex-parent input-image-4">
			<p class="flex-child">Image</p>
			<input id="image_4" type="text" name="image_4" value="$o->image_4">
		</div>
		<div class="input-detail flex-parent input-des-4">
			<p class="flex-child">Description</p>
			<textarea id="description_4" type="text" name="description_4">$o->description_4</textarea>
		</div>
		<div class="input-detail flex-parent input-title-5">
			<p class="flex-child">Title</p>
			<input id="title_5" type="text" name="title_5" value="$o->title_5">
		</div>
		<div class="input-detail flex-parent input-image-5">
			<p class="flex-child">Image</p>
			<input id="image_5" type="text" name="image_5" value="$o->image_5">
		</div>
		<div class="input-detail flex-parent input-des-5">
			<p class="flex-child">Description</p>
			<textarea id="description_5" type="text" name="description_5">$o->description_5</textarea>
		</div>
		<div class="input-detail flex-parent input-title-6">
			<p class="flex-child">Title</p>
			<input id="title_6" type="text" name="title_6" value="$o->title_6">
		</div>
		<div class="input-detail flex-parent input-image-6">
			<p class="flex-child">Image</p>
			<input id="image_6" type="text" name="image_6" value="$o->image_6">
		</div>
		<div class="input-detail flex-parent input-des-6">
			<p class="flex-child">Description</p>
			<textarea id="description_6" type="text" name="description_6">$o->description_6</textarea>
		</div>
		<div class="input-detail flex-parent input-title-7">
			<p class="flex-child">Title</p>
			<input id="title_7" type="text" name="title_7" value="$o->title_7">
		</div>
		<div class="input-detail flex-parent input-image-7">
			<p class="flex-child">Image</p>
			<input id="image_7" type="text" name="image_7" value="$o->image_7">
		</div>
		<div class="input-detail flex-parent input-des-7">
			<p class="flex-child">Description</p>
			<textarea id="description_7" type="text" name="description_7">$o->description_7</textarea>
		</div>
		<div class="input-detail flex-parent input-title-8">
			<p class="flex-child">Title</p>
			<input id="title_8" type="text" name="title_8" value="$o->title_8">
		</div>
		<div class="input-detail flex-parent input-image-8">
			<p class="flex-child">Image</p>
			<input id="image_8" type="text" name="image_8" value="$o->image_8">
		</div>
		<div class="input-detail flex-parent input-des-8">
			<p class="flex-child">Description</p>
			<textarea id="description_8" type="text" name="description_8">$o->description_8</textarea>
		</div>
		<button type="submit" value="Submit"  class="admin-blue-button" style="width: 100%;">Submit</button>
		<button class="admin-grey-button" onclick="location.href='admin.php'" type="button" class="button" style="width: 100%">Cancel</button>
	</form>
</div>

HTML;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">

	<title>Admin | Burnoutcat</title>

	<link href="https://fonts.googleapis.com/css?family=Heebo:300,400,800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="common/common.css">
	<link rel="stylesheet" href="css/admin.css">

</head>
<body>

	<header class="admin-header flex-parent flex-align-center">
		<div class="admin-site-name flex-none align-right">
			<h1>Burnoutcat</h1>
			<h2>.com</h2>
		</div>
		<div class="admin-site-title flex-child">
			<h3>Project</h3>
			<h3>Editor</h3>
		</div>
	</header>

	<div class="content-window flex-parent">
		<div class="menu-window flex-none">
			<form id="list-search-form" class="admin-search">
				<input type="search" class="search-input list-search" placeholder="Search Projects">
			</form>
			<nav class="filter-categories">
				<a href="#" class="list-filter list-selection active" data-value="All Projects">All Projects</a>
				<a href="#" class="list-filter list-selection" data-value="UI/UX Designs">UI/UX Design</a>
				<a href="#" class="list-filter list-selection" data-value="Motion Graphics">Motion Graphic</a>
				<a href="#" class="list-filter list-selection" data-value="Graphic Designs">Graphic Designs</a>
				<a href="#" class="list-filter list-selection" data-value="Others">Others</a>
			</nav>
			<div class="admin-logout align-center">
				<a href="#">Log out</a>
			</div>
		</div>
		<div class="project-window flex-child">
			<h1>Project Configuration</h1>

		<?php 

		if(isset($_GET['id'])){

			if($_GET['id'] == 'new'){
				editProjectForm( $empty_project);}
			else {
			$data = makeQuery($conn,
					"SELECT * FROM `project` WHERE `id`='{$_GET['id']}'");
				editProjectForm( $data[0] );
			}
		} else {

		 ?>
		<div class="sortandadd-window flex-parent">
			<div class="project-view flex-child">
				<h2>View: <span>All Projects</span></h2>
			</div>
			<div class="flex-none">
				<button class="admin-blue-button" onclick="location.href='admin.php?id=new'">Add</button>
			</div>

			<div class="project-list">
				<?php 
				$data = makeQuery($conn,"SELECT * FROM `project`");

				echo array_reduce($data, 'projectListTemplate');
				 ?>
			</div>
		</div>

		<?php 
		}
		 ?>
	
		</div>
	</div>
	
</body>
</html>
