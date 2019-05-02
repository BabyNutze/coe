<?php
//include("appCnn.inc.php");
/*header("Content-type:text/html; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
*/
?>

<?php
$t = $_GET['a'];
/*
$sql = "SELECT     *
		FROM      M_MENU
		WHERE     (PROJ_ID = '$t')
		order by menu_no ";
		  $querynum = oci_parse($conn,$sql);
		  oci_execute($querynum,OCI_DEFAULT);
		  while($result = oci_fetch_array($querynum)){
				$menu_no = $result['MENU_NO'];
				$menu_name = $result['MENU_NAME'];
*/
?>
<option value="<?php echo $t;?>"><?php echo $t;?></option>
<?php				
//}
?>