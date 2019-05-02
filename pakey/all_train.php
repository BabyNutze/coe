<?php
include("../member/header.php");
include("../member/menu.php");
?>
<!-- Masthead -->
<header class="pak_5">
</header>
<div class="container mt-5 mb-3"><br>

	<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link <?php if(isset($_REQUEST['ok']) || isset($_REQUEST['ok_1'])){echo "";}else{echo "active";}?>" id="1-tab" data-toggle="tab" href="#1" role="tab" aria-controls="1" aria-selected="<?php if(isset($_REQUEST['ok']) || isset($_REQUEST['ok_1'])){echo "false";}else{echo "true";}?>">รายละเอียด</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if(isset($_REQUEST['ok'])){echo "active";}?>" id="2-tab" data-toggle="tab" href="#2" role="tab" aria-controls="2" aria-selected="<?php if(isset($_REQUEST['ok'])){echo "true";}else{echo "false";}?>">รอบอบรม รายชื่อ ผลสอบ</a>
		</li>
		<li class="nav-item">
			<a class="nav-link <?php if(isset($_REQUEST['ok_1'])){echo "active";}?>" id="3-tab" data-toggle="tab" href="#3" role="tab" aria-controls="3" aria-selected="<?php if(isset($_REQUEST['ok_1'])){echo "true";}else{echo "false";}?>">ตารางสอบซ่อม ผลสอบซ่อม</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" id="4-tab" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="false">การเลื่อนอบรม</a>
		</li>
	</ul>
	<hr>
	
<div class="tab-content" id="myTabContent">
<div class="tab-pane fade <?php if(isset($_REQUEST['ok']) || isset($_REQUEST['ok_1'])){echo "";}else{echo "show active";}?>" id="1" role="tabpanel" aria-labelledby="1-tab">
	<h4>การอบรมทดสอบความพร้อมในการประกอบวิชาชีพ</h4>
	<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		สภาวิศวกรจัดอบรมและทดสอบความพร้อมแก่วิศวกรผู้ได้รับใบอนุญาตทุกเดือน ผู้เข้ารับการอบรมจะต้องเข้าอบรมและทดสอบความพร้อมในการประกอบวิชาชีพเป็นเวลา 1 วัน โดยมีผู้ทรงคุณวุฒิทั้งจากภาครัฐและเอกชนมาเป็นวิทยากรรับเชิญ ถ่ายทอดความรู้ ประสบการณ์ แนวคิดและวิสัยทัศน์ในด้านต่างๆอาทิ พระราชบัญญัติวิศวกร พศ.2542 กฎหมายที่เกี่ยวข้องกับวิชาชีพวิศวกรรม จรรยาบรรณ สิ่งแวดล้อม การพัฒนาการประกอบวิชาชีพ และความปลอดภัยในงานวิศวกรรม เป็นต้น ซึ่งวิศวกรผู้ที่ได้รับอนุมัติใบอนุญาตจากคณะกรรมการสภาวิศวกรแล้ว สามารถมาชำระเงินค่าอบรม จำนวน 1,500 บาท ได้ที่สำนักงานสภาวิศวกร โดยจะรับสมัครส่วนกลางรุ่นละ 160 คน ส่วนภูมิภาค รุ่นละ 50 คน
	</label>
	
	<div class="row mt-3 mb-3">
		<div class="col-md-6">
			<div align="center"><u>คู่มืออบรมความพร้อมฉบับปรับปรุง 2558</u><br></br>
				<img src="<?php echo $img_path;?>/training.jpg" alt="Image" width="50%" height="80%"/><br></br>
				<a href="../../download/training/TrainingManual2558.pdf" target="_blank">Open</a> | <a href="../../download/training/TrainingManual2558.zip">Download (7.4Mb)</a>
			</div>
		</div>
		<div class="col-md-6">
			<div align="center"><u>คู่มือประกอบการอบรม ปี 2549</u><br></br></div>
				<ol>
					<li><a href="../../download/training/t_law1.pdf" target="_blank">กฎหมายที่เกี่ยวข้องกับวิชาชีพวิศวกรรม</a></li>
					<li><a href="../../download/training/t_2.pdf" target="_blank">จรรยาบรรณ</a></li>
					<li><a href="../../download/training/t_4.pdf" target="_blank">สิ่งแวดล้อมในงานวิศวกรรม</a></li>
					<li>ความปลอดภัยในงานวิศวกรรม</li>
						<ul>
							<li><a href="../../download/training/group1.pdf" target="_blank">การบริหารความปลอดภัย</a></li>
							<li><a href="../../download/training/group2.pdf" target="_blank">ความปลอดภัยในงานวิศวกรรมเครื่องกล</a></li>
							<li><a href="../../download/training/group3.pdf" target="_blank">ความปลอดภัยในงานวิศวกรรมไฟฟ้า</a></li>
							<li><a href="../../download/training/group4.pdf" target="_blank">ความปลอดภัยในงานวิศวกรรมโยธา</a></li>
							<li><a href="../../download/training/group5.pdf" target="_blank">ความปลอดภัยสภาพแวดล้อมในการทำงาน</a></li>
							<li><a href="../../download/training/group6.pdf" target="_blank">กฎหมายความปลอดภัย</a></li>
							<li><a href="#">ความรู้ทางเคมีที่สำคัญสำหรับวิศวกรทั่วไป</a></li>
							<li><a href="#">วัสดุวิศวกรรม</a></li>
						</ul>
				</ol>
			
		</div>
	</div>
	
	<b>เอกสารประกอบการอบรมและทดสอบความพร้อมฯ</b>
	<ul>
		<li><a href="../../download/documents/ppt-Law.pdf" target="_blank"><i>วิชากฎหมาย</i></a></li>
		<li><a href="../../download/documents/ppt-ethics.pdf" target="_blank"><i>วิชาจรรยาบรรณ</i></a></li>
		<li><a href="../../download/documents/ppt-environment.pdf" target="_blank"><i>วิชาสิ่งแวดล้อม</i></a></li>
		<li><a href="../../download/documents/ppt-safety.pdf" target="_blank"><i>วิชาความปลอดภัย</i></a></li>
	</ul>
	
	<b>แผนที่</b>
	<ul>
		<li><a href="<?php echo $img_path;?>/map/Ambassador-Map.jpg" target="_blank">แผนที่โรงแรมแอมบาสเดอร์</a></li>
		<li><a href="<?php echo $img_path;?>/map/ChaophyaparkHotel-MAP.jpg" target="_blank">แผนที่โรงแรมเจ้าพระยาปาร์ค</a></li>
		<li><a href="<?php echo $img_path;?>/map/Asia_Hotel-Map.jpg" target="_blank">แผนที่โรงแรมเอเชีย</a></li>
	</ul>
	
	<b>
		กำหนดการอบรมทดสอบความพร้อมการประกอบวิชาชีพวิศวกรรมควบคุม<p>
		** สภาวิศวกรขอสงวนสิทธิ์ในการเปลี่ยนแปลงการกำหนดการตามที่เห็นสมควรโดยไม่ต้องแจ้งล่วงหน้า **
	</b>
	<div class="table-responsive">
	<table class="table table-striped table-hover table-bordered">
	<thead>
		<tr>
			<td colspan="2" align="center"><b>กำหนดการจัดอบรม</b></td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td align="center" width="30%">07.30 - 08.00 น.</td>
			<td>ลงทะเบียน / รับเอกสาร</td>
		</tr>
		<tr>
			<td align="center" width="30%">08.00 - 08.15 น.</td>
			<td>พิธีเปิดการอบรม โดย ดร.กมล ตรรกบุตร นายกสภาวิศวกร</td>
		</tr>
		<tr>
			<td align="center" width="30%">08.15 - 09.00 น.</td>
			<td>พ.ร.บ.วิศวกร/ข้อบังคับ/ระเบียบ และแนวทางการประกอบวิชาชีพโดย ดร.กมล ตรรกบุตร นายกสภาวิศวกร</td>
		</tr>
		<tr>
			<td align="center" width="30%">09.00 - 10.00 น.</td>
			<td>จรรยาบรรณในการประกอบวิชาชีพโดย ศ.ดร.อมร พิมานมาศ เลขาธิการสภาวิศวกร</td>
		</tr>
		<tr>
			<td align="center" width="30%">10.00 น. - 10.15 น.</td>
			<td>พักรับประทานอาหารว่าง</td>
		</tr>
		<tr>
			<td align="center" width="30%">10.15 น. - 11.15 น.</td>
			<td>กฎหมายที่เกี่ยวกับวิชาชีพวิศวกรรมโดย ผู้เชี่ยวชาญ</td>
		</tr>
		<tr>
			<td align="center" width="30%">11.15 น. - 12.00 น.</td>
			<td>ความรู้พื้นฐานเกี่ยวกับสิ่งแวดล้อมในงานวิศวกรรมโดย ผู้เชี่ยวชาญ</td>
		</tr>
		<tr>
			<td align="center" width="30%">12.00 น. - 13.00 น.</td>
			<td>พักรับประทานอาหารกลางวัน</td>
		</tr>
		<tr>
			<td align="center" width="30%">13.00 น. - 14.30 น.</td>
			<td>ความปลอดภัยในงานวิศวกรรมโดย ผู้เชี่ยวชาญ</td>
		</tr>
		<tr>
			<td align="center" width="30%">14.30 น. - 15.00 น.</td>
			<td>พักรับประทานอาหารว่าง และจัดหัองสอบ</td>
		</tr>
		<tr>
			<td align="center" width="30%">15.00 น. - 16.30 น.</td>
			<td>ทดสอบวิชากฎหมาย จรรยาบรรณ สิ่งแวดล้อม และความปลอดภัย <p>
			( อนุญาตให้เปิดหนังสือคู่มืออบรมความพร้อมฯ และเอกสารประกอบการบรรยายได้ ) </p>
			<font color="red"><b>ไม่อนุญาตให้นำแนวข้อสอบเข้ามาในห้องสอบโดยเด็ดขาด</b></font></td>
		</tr>
	</tbody>
	</table>
	</div>
	
	<b>การแต่งกายของผู้เข้ารับการอบรม <a href="../../download/training/75-2560.pdf" target="_blank">ตามประกาศสภาวิศวกรที่ 75/2560</a> ดังนี้</b>
	<ol>
		<li>สุภาพบุรุษสวมเสื้อที่มีคอปก กางเกงขายาว โดยสอดชายเสื้อไว้ในกางเกง สวมรองเท้าหุ้มส้น</li>
		<li>สุภาพสตรีสวมเสื้อ กระโปรงหรือกางเกงขายาว สวมรองเท้าหุ้มส้น</li>
		<li>ห้ามสวมใส่กางเกงขาสั้น กางเกงยีนส์ขาด เสื้อไม่มีแขน รองเท้าแตะทุกชนิด</li>
		<font color="red"><b>( ผู้ที่แต่งกายไม่สุภาพจะไม่อนุญาตให้เข้าห้องสอบ )</b></font>
	</ol>
	
	<b>การขอเลื่อนอบรม หลักฐานประกอบการเลื่อนอบรม ดังนี้</b>
	<ol>
		<li>ใบคำร้องแจ้งรอบที่ต้องการเลื่อนออก , รอบที่ต้องการเข้าอบรม (ระบุวันชัดเจน)</li>
		<li>หนังสือรับรองจากหน่วยงาน / ใบรับรองแพทย์ หรือเอกสารรับรองอื่น ๆ</li>
		<li>สำเนาใบเสร็จค่าอบรม</li>
		<font color="red"><b>( ผู้จัดการอบรมขอสงวนสิทธิ์ในการเปลี่ยนแปลงกำหนดการตามที่เห็นสมควรโดยไม่ต้องแจ้งล่วงหน้า )</b></font>
	</ol>
	
	<b>ข้อควรปฏิบัติ กรณีผ่านการทดสอบขอรับใบอนุญาตระดับภาคีวิศวกร เพื่อเข้ารับการอบรมและทดสอบความรู้เกี่ยวกับความพร้อมในการประกอบวิชาชีพวิศวกรรม</b>
	<ol>
		<li>เตรียมบัตรสมาชิก หรือบัตรประชาชน หรือบัตรข้าราชการ หรือบัตรที่หน่วยงานราชการออกให้ นำมาในวันอบรมด้วย</li>
		<li>เตรียมดินสอ 2 B และยางลบ เพื่อใช้สำหรับทดสอบ</li>
		<li>อนุญาตให้นำหนังสือประกอบการอบรมฯ และเอกสารประกอบการบรรยายในรอบนั้นเข้าห้องสอบได้</li>
		<li>แต่งกายชุดสุภาพ <font color="red"><b>ตามคำแนะนำเรื่องการแต่งกายของผู้เข้ารับการอบรม</b></font></li>
		<li><u>ห้าม</u>นำแนวข้อสอบเข้ามาภายในห้องสอบโดยเด็ดขาด</li>
		<li><u>ห้าม</u>คัดลอกข้อสอบ</li>
		<li><u>ห้าม</u>กระทำการอื่นๆ อันส่อถึงการทุจริตในการสอบ (ผู้ที่ทุจริต หรือทำผิดกติกาการสอบ จะถูกปรับตก และไม่สามารถสอบซ่อมได้จนกว่าจะครบกำหนด 6 เดือน หลังจากการสอบครั้งแรก รวมถึงทางสภาวิศวกรจะทำหนังสือแจ้งความผิดรายงานยังต้นสังกัดด้วย) </li>
	</ol>
	
	<b>หมายเหตุ</b><p>
	<font color="red"><b>สำหรับการอบรมความพร้อมฯ ในปี 2561 ในกรุงเทพฯ และต่างจังหวัด จะประกาศผลอย่างไม่เป็นทางการในวันอบรม เวลาประมาณ 20.00 น. และทำการจัดสอบซ่อมในวันถัดจากวันอบรม</b></font>
</div>
<div class="tab-pane fade <?php if(isset($_REQUEST['ok'])){echo "show active";}?>" id="2" role="tabpanel" aria-labelledby="2-tab">
	<h4>ประกาศ - รอบการจัดอบรม และทดสอบความพร้อม</h4>
	<div class="row justify-content-md-left">
		<div class="col-md-auto">
			<form name="form1" method="post" class="form-inline">
				<label>ประจำปี : </label>&nbsp;&nbsp;
				<select name="year" id="year" class="form-control">
					<?php
						$currentYear = date("Y")+543;//+543-23;//23 = อายุ ไม่ต่ำกว่า 23
						$changY = 2545; //1920+543;//+543;
						for($i=$currentYear;$i>=$changY;$i--){
					?>
						<option value="<?=$i;?>"><?=$i;?></option>
					<?php
						}
					?>
				</select>&nbsp;&nbsp;
				<input name="ok" type="submit" value="ตกลง" class="btn btn-primary btn-sm">
			</form>
		</div>
	</div><br>
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td align="center"><b>ที่นั่งสอบ</b></td>
			<td align="center"><b>ผลสอบ</b></td>
			<td align="center"><b>ครั้งที่</b></td>
			<td align="center"><b>วันที่อบรม</b></td>
			<td align="center"><b>สถานที่</b></td>
		</tr>
	</thead>
	<tbody>
	<?php
	if(isset($_REQUEST['ok'])){
	?>
		<tr>
			<td align="center">Query</td>
			<td align="center">Query</td>
			<td align="center">Query</td>
			<td align="center">Query</td>
			<td align="center">Query</td>
		</tr>
	<?php
	}else{
		for($i=1;$i<=10;$i++){
	?>
		<tr>
			<td align="center"><a href="#" target="_blank"><img src="<?php echo $icon_path;?>/armchair.png"></a></td>
			<td align="center"><a href="#" target="_blank"><img src="<?php echo $icon_path;?>/megaphone.png"></a></td>
			<td align="center">22-2561</td>
			<td align="center">05/08/2561</td>
			<td align="center">มหาวิทยาลัยเชียงใหม่ (อาคาร 30 ปี คณะวิศวกรรมศาสตร์)</td>
		</tr>
	<?php
		}
	}
	?>
	</tbody>
	</table>
	</div>
</div>
<div class="tab-pane fade <?php if(isset($_REQUEST['ok_1'])){echo "show active";}?>" id="3" role="tabpanel" aria-labelledby="3-tab">
	<h4>ประกาศ - ตารางสอบซ่อม อบรม และทดสอบความพร้อม</h4>
	<div class="row justify-content-md-left">
		<div class="col-md-auto">
			<form name="form1" method="post" class="form-inline">
				<label>ประจำปี : </label>&nbsp;&nbsp;
				<select name="year" id="year" class="form-control">
					<?php
						$currentYear = date("Y")+543;//+543-23;//23 = อายุ ไม่ต่ำกว่า 23
						$changY = 2545; //1920+543;//+543;
						for($i=$currentYear;$i>=$changY;$i--){
					?>
						<option value="<?=$i;?>"><?=$i;?></option>
					<?php
						}
					?>
				</select>&nbsp;&nbsp;
				<input name="ok_1" type="submit" value="ตกลง" class="btn btn-primary btn-sm">
			</form>
		</div>
	</div><br>
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	<thead>
		<tr>
			<td align="center"><b>ที่นั่งสอบ</b></td>
			<td align="center"><b>ผลสอบ</b></td>
			<td align="center"><b>ครั้งที่</b></td>
			<td align="center"><b>วันที่สอบซ่อม</b></td>
			<td align="center"><b>สถานที่</b></td>
		</tr>
	</thead>
	<tbody>
	<?php
	if(isset($_REQUEST['ok_1'])){
	?>
		<tr>
			<td align="center">Test</td>
			<td align="center">Test</td>
			<td align="center">Test</td>
			<td align="center">Test</td>
			<td align="center">Test</td>
		</tr>
	<?php
	}else{	
		for($i=1;$i<=10;$i++){
	?>
		<tr>
			<td align="center"><a href="#" target="_blank"><img src="<?php echo $icon_path;?>/armchair.png"></a></td>
			<td align="center"><a href="#" target="_blank"><img src="<?php echo $icon_path;?>/megaphone.png"></a></td>
			<td align="center">22-2561</td>
			<td align="center">06/08/2561</td>
			<td align="center"></td>
		</tr>
	<?php
		}
	}
	?>
	</tbody>
	</table>
	</div>
</div>
<div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="4-tab">
	<h4>การอบรมทดสอบความพร้อมในการประกอบวิชาชีพ</h4>
	<label>
		การขอเลื่อนการอบรมสามารถเลื่อนได้ 2 วิธี ดังนี้
	</label>
	<ol>
		<li><a href="change_train.php">เลื่อนอบรมด้วยตนเองผ่านทางเว็บไซต์</a></li>
		<li>กรอก <a href="../../download/form/Coe-200803.pdf" target="_blank">แบบฟอร์มคำร้องขอเลื่อนการอบรมและทดสอบความพร้อมฯ</a> ระบุรอบที่ต้องการเลื่อนออกและรอบที่ต้องการเลื่อนเข้าพร้อมเหตุผลโดยแนบเอกสารประกอบการเลื่อน เช่น หนังสือรับรองจากหน่วยงาน ใบรับรองแพทย์ เป็นต้น</li>
		<li>การเลื่อนอบรมทดสอบความพร้อมสำหรับผู้ที่ต้องไปศึกษาต่อยังต่างประเทศ สามารถเลื่อนการอบรมให้เร็วขึ้นเพื่อความสะดวกในการไปศึกษาต่อยังต่างประเทศ โดยท่านต้องยื่นคำร้องในการขอเลื่อนอบรมพร้อมทั้งเอกสารประกอบ ดังต่อไปนี้</li>
		<ul>
			<li>หนังสือเดินทาง</li>
			<li>หนังสือตอบรับจากมหาวิทยาลัยที่ท่านสมัคร</li>
			<li>เอกสารอื่นๆที่เกี่ยวข้อง</li>
		</ul>		
	</ol>
	<label>โดย ส่งโทรสารมายังสภาวิศวกรหมายเลข 02-9356695 หรือ 02-9356697</label>
	<br></br>
	<ul>
		<li>คำร้องขอเลื่อนการอบรมและทดสอบความพร้อมฯ
			<a href="../../download/form/Coe-200803.pdf" target="_blank"><img src="<?php echo $icon_path;?>/pdf-icon.png" alt="PDF" height="45" width="45"></a>
		</li>
	</ul>
</div>
</div>

</div>

<br></br>
<br></br>
<?php
include("../member/footer.php");
?>