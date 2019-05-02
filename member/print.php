<?php
include("header.php");
include("menu.php");
?>
<!-- Masthead -->
<header class="mem_7">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">ใบแจ้งชำระค่าธรรมเนียม</h1>
	
	<div class="row justify-content-md-center">
	<label align="center"><b>*** กรณีที่ไม่พบใบแจ้งชำระค่าธรรมเนียม ท่านสามารถแจ้งขอรับใบแจ้งชำระค่าธรรมเนียม ได้ที่ 1303 ติดต่อเจ้าหน้าที่ฝ่ายทะเบียนและใบอนุญาต ***</b></label>
	<br></br>
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header " role="tab" id="headingOne">
				<h5 class="mb-0">ใบแจ้งชำระค่าธรรมเนียม</h5>
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
</div>

<br></br>
<br></br>
<?php
include("footer.php");
?>