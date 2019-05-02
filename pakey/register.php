<?php
include("../member/header.php");
include("../member/menu.php");
?>
<div class="container"><br>
	<h1 class="mt-5 mb-5" align="center">สมัครสมาชิกและสมัครทดสอบความรู้ระดับภาคี</h1>
	<hr>
	<img src="<?php echo $img_path;?>/Process.jpg" class="img-fluid rounded mx-auto d-block"/>
	<hr>
	<div class="row justify-content-md-center mt-5">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">สมัครสมาชิกและสมัครทดสอบความรู้</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>เลขที่สมาชิก หรือเลขที่บัตรประชาชน :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
			</div>
			<div class="card-footer">
				<input name="ok" type="submit" class="btn btn-success" value="ตกลง">
				<input type="reset" class="btn btn-danger pull-right" value="Reset">
			</div>
		</form>
		</div>
		</div>
	</div>
</div>
<div class="container-fluid mt-5">
<div class="table-responsive">
<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td align="center"><b>รอบสอบ</b></td>
			<td align="center"><b>วันที่สอบ</b></td>
			<td align="center"><b>สถานที่สอบ</b></td>
			<td align="center"><b>จำนวนที่รับ</b></td>
			<td align="center"><b>จำนวนคงเหลือ</b></td>
		</tr>
	</thead>
	<tbody>
	<?php
		for($i=1;$i<=20;$i++){
	?>
		<tr>
			<td align="center"><?php echo $i;?>114/2561</td>
			<td align="center"><?php echo $i;?>23/07/2561</td>
			<td align="left"><?php echo $i;?>มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตขอนแก่น (อาคาร 50 ปี เทคนิคไทย-เยอรมัน)</td>
			<td align="center"><?php echo $i;?>100</td>
			<td align="center"><?php echo $i;?>86</td>
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