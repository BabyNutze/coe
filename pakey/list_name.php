<?php
include("../member/header.php");
include("../member/menu.php");
?>
<!-- Masthead -->
<header class="pak_1">
</header>
<div class="container-fluid">
<h1 class="mt-5 mb-3" align="center">ประกาศรายชื่อผู้มีสิทธิ์สอบ</h1>
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td align="center"><b>รอบสอบ</b></td>
			<td align="center"><b>วันที่ปิดรับ</b></td>
			<td align="center"><b>วันที่สอบ</b></td>
			<td align="center"><b>สถานที่สอบ</b></td>
			<td align="center"><b>จำนวนที่รับ</b></td>
			<td align="center"><b>รายชื่อ</b></td>
		</tr>
	</thead>
	<tbody>
	<?php
		for($i=1;$i<=20;$i++){
	?>
		<tr>
			<td align="center"><?php echo $i;?>114/2561</td>
			<td align="center"><?php echo $i;?>15/07/2561</td>
			<td align="center"><?php echo $i;?>23/07/2561</td>
			<td align="left"><?php echo $i;?>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตขอนแก่น (อาคาร 50 ปี เทคนิคไทย-เยอรมัน)</td>
			<td align="center"><?php echo $i;?>100</td>
			<td align="center"><a href="">###</a></td>
		</tr>
	<?php
		}
	?>
	</tbody>
</table>
</div>
</div>

<br></br>
<br></br>
<?php
include("../member/footer.php");
?>