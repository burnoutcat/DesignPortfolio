<?php

require_once "lib/php/helper.php";
require_once "elements/templates.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Project | Burnoutcat</title>

	<?php include "elements/header-property.php" ?>
	<link rel="stylesheet" href="css/portfolio.css">
	<script src="js/canvas.js"></script>
	<script src="js/portfolio.js"></script>
	<script> 

		$(document).ready(function (){
			canvas06();
			canvas07();
		})

	</script>

</head>
<body>
	
<?php

// Check if an id isset, if not redirect to portfolio page

if(isset($_GET['id'])){
	$my_id = $_GET['id'];
} else {
	header("Location:portfolio.php");
}



$result = makeQuery(
	makeConn(),
	"
	SELECT *
	FROM `project`
	WHERE id = {$my_id}
	"
);

// print_p($result);

echo array_reduce($result,
	'projectDetail');

?>

<?php include 'elements/side-nav.php' ?>
<?php include "elements/main-footer.php" ?> <!-- Site Footer -->
</body>
</html>