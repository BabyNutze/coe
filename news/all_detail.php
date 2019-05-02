<?php
include("../member/header.php");
include("../member/menu.php");
?>
<div class="container"><br>
	<h1 class="mt-5 mb-5" align="center">
	<?php
		$year = date('Y');
		@$aType = $_REQUEST['aType'];
		if($aType == 2){ echo "ข่าวสัมมนา และอบรม";}else{ echo "ข่าวประชาสัมพันธ์";}
	?>
	</h1>
	<hr>
	<div class="row">
	<div class="col-lg-12">
		<form>
		<div class="form-row">
			<div class="col-2">
				<select name="year" id="year" class="form-control">
					<option value="<?php echo $year;?>" selected><?php echo $year;?></option>
				</select>
			</div>
			<div class="col-5">
				<select name="aType" id="aType" class="form-control">
					<option value="<?php echo $aType;?>" selected><?php echo $aType;?></option>
				</select>
			</div>
		</div>
		</form>
	</div>
	</div>		
</div>
<div class="container-fluid mt-5">
<hr>
	<div class="row">
		<div class="col-lg-12">
			<ol>
			<?php
				for($i=1;$i<=10;$i++){
			?>
				<li>
					ขอเชิญสมาชิกสภาวิศวกรเข้าร่วมกิจกรรมเดินรณรงค์ แนะนำความปลอดภัยภายใต้โครงการ "ไฟฟ้าและอัคคีภัยในบ้าน...ป้องกันอย่างไร" ปลายทางสำนักป้องกันและบรรเทาสาธารณภัย กรุงเทพฯ ในวันเสาร์ที่ 22 กันยายน 2561  เวลา 08.00 น. (คลิกดูรายละเอียดเพิ่มเติม)
				</li>
			<?php
				}
			?>
			</ol>
		</div>
	</div>
</div>

<br></br>
<br></br>
<?php
include("../member/footer.php");
?>