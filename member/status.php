<?php
include("header.php");
include("menu.php");
?>
<!-- Masthead -->
<header class="mem_3">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">ตรวจสอบสถานะสมาชิกและใบอนุญาต</h1>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header " role="tab" id="headingOne">
				<h5 class="mb-0">ตรวจสอบสมาชิก โดย เลขที่สมาชิก/ใบอนุญาต</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>เลขที่สมาชิก :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
			<label>หรือ ใบอนุญาต :</label>
				<div class="form-row">
					<div class="form-group col-md-4">
						
						<select name="" id="" class="form-control">
							<option selected>ประเภท</option>
							<option>...</option>
						</select>
					</div>
					<div class="form-group col-md-8">
						<input name="" id="" type="text" class="form-control">
					</div>
				</div>
			</div>
			<div class="card-footer">
				<input name="search" type="submit" class="btn btn-success" value="ค้นหา">
				<input type="reset" class="btn btn-danger pull-right" value="Reset">
			</div>
		</form>
		</div>
		</div>
	</div>
<br>
<hr>
</br>
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">ตรวจสอบสมาชิก โดย ชื่อ/นามสกุล</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>ชื่อ :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>นามสกุล :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
			</div>
			<div class="card-footer">
				<input name="search" type="submit" class="btn btn-success" value="ค้นหา">
				<input type="reset" class="btn btn-danger pull-right" value="Reset">
			</div>
		</form>
		</div>
		</div>
	</div>
<br>
<hr>
</br>
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">ค้นหาสมาชิกนิติบุคคล โดย</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>ชื่อบริษัท :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>หรือ เลขที่ใบอนุญาต : นต. </label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>หรือ ความชำนาญการพิเศษ :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
			</div>
			<div class="card-footer">
				<input name="search" type="submit" class="btn btn-success" value="ค้นหา">
				<input type="reset" class="btn btn-danger pull-right" value="Reset">
			</div>
		</form>
		</div>
		</div>
	</div>
</div>

<br></br>
<br></br>
<?php
include("footer.php");
?>