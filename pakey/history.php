<?php
include("../member/header.php");
include("../member/menu.php");
?>
<!-- Masthead -->
<header class="pak_2">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">ประวัติการสมัครสอบ/พิมพ์รายวิชาและใบแจ้งชำระเงิน</h1>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header " role="tab" id="headingOne">
				<h5 class="mb-0">ประวัติการสมัครสอบ/พิมพ์รายวิชาและใบแจ้งชำระเงิน</h5>
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

<br></br>
<br></br>
<?php
include("../member/footer.php");
?>