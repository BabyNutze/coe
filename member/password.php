<?php
include("header.php");
include("menu.php");
?>
<!-- Masthead -->
<header class="mem_6">
</header>
<div class="container"><br>
	<h1 class="mt-5 mb-3" align="center">ขอรับ Password/ลืม Password</h1>
	<h4>ขั้นตอนการขอรับรหัสผ่าน (Password)</h4>
	<ol>
		<li>ระบุเลขที่ใบอนุญาต หรือ เลขที่สมาชิก อย่างใดอย่างหนึ่ง(กรณีระบุทั้ง 2 อย่าง ระบบจะค้นหาตามเลขที่สมาชิก)</li>
		<li>พิมพ์ ชื่อและนามสกุล (ไม่ต้องใส่คำนำหน้า)</li>
		<li>พิมพ์ E-Mail ที่ต้องการให้จัดส่งรหัสผ่านไปให้</li>
		<li>กดปุ่ม "ขอรับรหัสผ่าน"</li>
	</ol>
	<label><b>*** กรณีระบุข้อมูลทั้งหมดตรงกับฐานข้อมูลของสภาวิศวกร ระบบจะทำรายการส่ง รหัสผ่านไปให้โดยอัตโนมัติทาง E-mail ***</b></label>
	<label><b>*** กรณีที่เปลี่ยน E-mail (E-mail ไม่ตรงกับข้อมูลที่มีในระบบ) ท่านจะได้รับ "เลขที่อ้างอิง" ให้สำเนาบัตรประชาชนพร้อมระบุเลขที่อ้างอิงส่งมาที่ E-mail : it@coe.or.th หรือโทรสาร 0-2935-6695 0-2935-6697 (โปรดระบุหัวเรื่องขอรับรหัสผ่าน) ***</b></label>
	<br></br>
	<div class="row justify-content-md-center">
		<div class="col-md-8">
		<div class="card">
		<form name="form1" method="post" class="form-horizontal">
			<div class="card-header" role="tab" id="headingOne">
				<h5 class="mb-0">ขอรับรหัสผ่าน (Password)</h5>
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
				<div class="form-group">
					<label>ชื่อ : <font color="red">( ไม่ต้องระบุคำนำหน้าชื่อ )</font></label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>นามสกุล :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
				<div class="form-group">
					<label>E-Mail :</label>
					<input name="" id="" type="text" class="form-control" autofocus>
				</div>
			</div>
			<div class="card-footer">
				<input name="ok" type="submit" class="btn btn-success" value="ขอรับรหัสผ่าน">
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