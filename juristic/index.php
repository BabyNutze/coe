<?php
if(isset($_GET["menu"])){
	$menu = "menu" . $_GET[ "menu" ] . ".php";
}
else{
	$menu = "menu1.php";
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include("head.php"); ?>

<body>
	<?php 
	include("appHeader.php");
	include("appMenu.php");
	include("nav.php");
		include($menu);
		include("../appFooter.php");
	?>

</body>

</html>