<?php
include("../member/header.php");
include("../member/menu.php");
?>
<!-- Masthead -->
<header class="pak_6">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">เลื่อนอบรมด้วยตนเองผ่านทางเว็บไซต์</h1>
	<div class="row justify-content-md-center">
	<label><b>กรณีที่ท่านไม่สามารถเข้าอบรมฯ ในรอบที่กำหนดไว้ "ท่านสามารถเลื่อนรอบอบรมได้ไม่เกิน 2 ครั้ง ก่อนวันอบรม 7 วัน"</b></label>
	<br></br>
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">กรุณา Login เพื่อทำการเลื่อนรอบอบรมด้วยตนเอง</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>เลขที่สมาชิก :</label>
					<input name="" id="" type="text" class="form-control" ><!--autofocus-->
				</div>
				<div class="form-group">
					<label>รหัสผ่าน :</label>
					<input name="" id="" type="password" class="form-control">
				</div>
				<p class="card-text" align="right"><a href="../member/password.php">ลืมรหัสผ่าน</a></p>
			</div>
			<div class="card-footer">
				<input name="ok" type="submit" class="btn btn-success" value="ตกลง">
				<input type="reset" class="btn btn-danger pull-right" value="Reset">
			</div>
		</form>
		</div>
		</div>
	</div>
	<br>
	
	<ul>
		<li><h4>รอบอบรมที่สามารถเลื่อนได้</h4></li>
	</ul>
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td align="center"><b>รอบอบรม</b></td>
			<td align="center"><b>วันที่อบรม</b></td>
			<td align="center"><b>วันที่ประกาศผล</b></td>
			<td align="center"><b>สถานที่อบรม</b></td>
			<td align="center"><b>จำนวนที่รับ</b></td>
			<td align="center"><b>จำนวน คงเหลือ</b></td>
		</tr>
	</thead>
	<tbody>
	<?php
		for($i=1;$i<=6;$i++){
	?>
		<tr>
			<td align="center">15/2561</td>
			<td align="center">03/06/61 - 03/06/61</td>
			<td align="center">03/06/61</td>
			<td align="center">มหาวิทยาลัยเทคโนโลยีราชมงคลอีสาน วิทยาเขตขอนแก่น</td>
			<td align="center">80</td>
			<td align="center">51</td>
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