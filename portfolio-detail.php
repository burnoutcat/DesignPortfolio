<?php

require_once "lib/php/helper.php";
require_once "elements/templates.php";

?><!DOCTYPE html>
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

$result = makeQuery(
	makeConn(),
	"
	SELECT *
	FROM `project`
	WHERE id = {$_GET['id']}
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