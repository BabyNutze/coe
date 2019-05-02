<?php
include("header.php");
//include("member.php");
?>
<!-- Masthead -->
<header class="mem_2">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">ระบบสมาชิก (Member Login)</h1>
	<h4>ใช้รหัสผ่านนี้สำหรับ Login เข้าสู่ระบบสมาชิก (Member Login) ซึ่งท่านจะสามารถ</h4>
	<ol>
		<li>เปลี่ยนแปลงที่อยู่ เบอร์ติดต่อ และ E-mail สำหรับติดต่อกับสภาวิศวกร</li>
		<li>เลื่อนรอบอบรมทดสอบความพร้อมด้วยตนเอง</li>
		<li>ติดตามสถานะการยื่นเรื่องต่าง ๆ</li>
		<li>อื่น ๆ (อยู่ระหว่างพัฒนา)</li>
	</ol>
	
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">Member Login</h5>
			</div>
			<div class="card-body">
				<div class="form-group">
					<label>เลขที่สมาชิก :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>รหัสผ่าน :</label>
					<input name="" id="" type="password" class="form-control">
				</div>
				<p class="card-text" align="right"><a href="password.php">ลืมรหัสผ่าน/ขอรับรหัสผ่านใหม่</a></p>				
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
include("footer.php");
?>