	
	<!--////////// ใช้ในการส่งค่าจาก select box1 ไป select box2 //////////--> 
	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>-->
	<script type="text/javascript">  
	$(function(){  /////////////////////////  ใช่ในการเลือก select box1 ให้ ส่งค่าไปยัง select box2
		
		// เมื่อเปลี่ยนค่าของ select id เท่ากับ list1  
		$("select#a").change(function(){    
			// ส่งค่า ตัวแปร list1 มีค่าเท่ากับค่าที่เลือก ส่งแบบ get ไปที่ไฟล์ data_for_list2.php  
			$.get("main_menu/data_for_list1.php",{  
				a:$(this).val()  
			},function(data){ // คืนค่ากลับมา  
					$("select#b").html(data);  // นำค่าที่ได้ไปใส่ใน select id เท่ากับ list2  
			});  
		});
	});  
	</script>
	
	<section class="bg-color" id="certified">
		<div class="container-fluid" id="c_f">
			<div class="row">				
			
				<div class="col-lg-6">
					<h2 class="text-center sr-button text-shadow text-dark"><i>การรับรองปริญญา</i></h2>
					<hr class="primary">
					<ul>
						<h3 align="left"><li><a href="certified/regulations.php" target="_blank">ข้อบังคับ และระเบียบการรับรองปริญญา</a></li></h3>
						<h3 align="left"><li><a href="certified/steps_consider.php" target="_blank">ขั้นตอนการพิจารณาหลักสูตร เพื่อรับรองปริญญาฯ</a></li></h3>
						<h3 align="left"><li><a href="certified/guide.php" target="_blank">การจัดเตรียมเอกสารสำหรับการยื่นขอรับรองปริญญาฯ</a></li></h3>
						<h3 align="left"><li><a href="#exampleModal" data-toggle="modal" data-target="#exampleModal">ตรวจสอบการรับรองปริญญา</a></li></h3>
					</ul>
					
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ตรวจสอบหลักสูตร ที่สภาวิศวกรรับรอง</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="form1" method="post" class="form-horizontal" action="certified/examination.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>สถาบัน :</b></label>
            <select name="a" id="a" class="form-control" autofocus>
				<option selected><-- Please Select --></option>
			<?php
				for($i=1;$i<=10;$i++){
			?>
				<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php
				}
			?>
			</select>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>สาขา :</b></label>
            <select name="b" id="b" class="form-control">
				<option selected><-- Please Select --></option>
			<?php
				/*for($i=1;$i<=10;$i++){
			?>
				<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php
				}*/
			?>
			</select>
          </div>        
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn-success">OK</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
		</form>
    </div>
  </div>
</div>

					<br>
					<h2 class="text-center sr-button text-shadow text-dark"><i>การรับรองมาตรฐานคุณภาพการศึกษา (TABEE)</i></h2>
					<hr class="primary">
					<ul>
						<h3 align="left"><li><a href="tabee/objective.php" target="_blank">การรับรองมาตรฐานคุณภาพการศึกษาฯ(TABEE)</a></li></h3>
					</ul>
				</div>
				
				<div class="col-lg-3 text-center">
                    <img src="<?php echo $img_path;?>/book_1.png" class="img-fluid rounded mx-auto d-block mt-5"/>
                </div>
				
				<div class="col-lg-2 text-center" id="shadow2">
					<p style="font-size: 14px;">
					<b style="font-size: 16px;">ตามพระราชบัญญัติวิศวกร พ.ศ. 2542 มาตรา 8(3)</b><br>
					สภาวิศวกรมีอำนาจและหน้าที่รับรองปริญญาประกาศนียบัตร หรือวุฒิบัตรในการประกอบวิชาชีพวิศวกรรมควบคุม ซึ่งคณะกรรมการสภาวิศวกรได้ออกข้อบังคับสภาวิศวกร ว่าด้วยการรับรองปริญญา ประกาศนียบัตร หรือวุฒิบัตรในการประกอบวิชาชีพวิศวกรรมควบคุม พ.ศ. 2554 และระเบียบคณะกรรมการสภาวิศวกร ว่าด้วยวิชาพื้นฐานทางวิทยาศาสตร์ วิชาพื้นฐานทางวิศวกรรม และวิชาเฉพาะทางวิศวกรรม ที่สภาวิศวกรจะให้การรับรองปริญญา ประกาศนียบัตร และวุฒิบัตร ในการประกอบวิชาชีพวิศวกรรมควบคุม พ.ศ. 2558
					</p>
				</div>				
				
			</div>
		</div>
	</section>

	