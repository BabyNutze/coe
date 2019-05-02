<?php
if(isset($_GET["menu"])){
	$menu = $_GET[ "menu" ] . ".php";
}
else{
	$menu = "1.php";
}
?>
<!DOCTYPE html>
<html lang="en">

<?php include("head.php"); ?>

<body>
	<?php 
	include("appHeader.php");
	include("appMenu.php");
		include($menu);
		include("../appFooter.php");
	?>

</body>

</html>