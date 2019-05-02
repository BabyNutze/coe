<?php
$certified_path = "certified/";
$tabee_path = "tabee/";
$member_path ="member/";
$pakey_p_path = "pakey_p/";
$pakey_path = "pakey/";
$acpe_path = "acpe/";
$samun_path = "samun/";
$wutthi_path = "wutthi/";
$foriegn_path = "foriegn/";
$juristic_path = "juristic/";
$legal_path = "legal/";

//navbar navbar-expand-sm bg-dark navbar-dark sticky-top
print "<nav class='navbar navbar-expand-lg navbar-light bg-light sticky-top'>";
    print "<div class='container-fluid size_f'>";
        print "<a class='navbar-brand' href='appMain.php'>COE.OR.TH</a>";
        print "<button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavDropdown' aria-controls='navbarNavDropdown' aria-expanded='false' aria-label='Toggle navigation'>";
        print "<span class='navbar-toggler-icon'></span>";
        print "</button>";
        
        print "<div class='collapse navbar-collapse' id='navbarNavDropdown'>";
            print "<ul class='navbar-nav m-auto'>";
            
            
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>สภาวิศวกร</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                        print "<a class='dropdown-item' href='#'> เกี่ยวกับสภาวิศวกร</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 6</a>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 5</a>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 4</a>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 3</a>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 2</a>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการสภาวิศวกร สมัยที่ 1</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'> คณะกรรมการจรรยาบรรณ</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'> ผู้ตรวจสภาวิศวกร</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'> เจ้าหน้าที่สภาวิศวกร</a>";
                        print "<a class='dropdown-item' href='#'> ผังโครงสร้างสภาวิศวกร</a>";
                        print "<a class='dropdown-item' href='#'> แผนที่สภาวิศวกร</a>";
                        print "<a class='dropdown-item' href='#'> ประกาศวันหยุดสภาวิศวกร</a>";
                    print "</div>";
                print "</li>";                
               
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>การรับรองปริญญา  TABEE</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                        print "<a class='dropdown-item' href='#certified'>ข้อบังคับ และระเบียบการรับรองปริญญา</a>";
                        print "<a class='dropdown-item' href='#certified'>ขั้นตอนการพิจารณาหลักสูตร เพื่อรับรองปริญญาฯ</a>";
                        print "<a class='dropdown-item' href='#certified'>การจัดเตรียมเอกสารสำหรับการยื่นขอรับรองปริญญาฯ</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#certified'>ตรวจสอบการรับรองปริญญา</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#certified'>การรับรองมาตรฐานคุณภาพการศึกษาฯ(TABEE)</a>";
                    print "</div>";
                print "</li>";                
                
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>สมาชิก ใบอนุญาต</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                        print "<a class='dropdown-item' href='#member'>การสมัครเป็นสมาชิกสภาวิศวกร</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#pakey_p'>ภาคีวิศวกรพิเศษ</a>";
                        print "<a class='dropdown-item' href='#pakey'>ภาคีวิศวกร</a>";                        
							print "<a class='dropdown-item' href='#samun'>สามัญวิศวกร</a>";							
							print "<a class='dropdown-item' href='#wutthi'>วุฒิวิศวกร</a>";
							print "<a class='dropdown-item' href='#juristic'>นิติบุคคล</a>";
							print "<a class='dropdown-item' href='#foriegn'>วิศวกรวิชาชีพอาเซียน (ACPE)</a>";
							print "<a class='dropdown-item' href='#foriegn'>วิศวกรวิชาชีพเอเปค (APEC)</a>";
                    print "</div>";
                print "</li>";
                
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>กฎหมายและจรรยาบรรณ</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
							print "<a class='dropdown-item' href='#law'>พระราชบัญญัติวิศวกร พ.ศ. 2542</a>";
							print "<a class='dropdown-item' href='#law'>ENGINEER ACT, B.E. 2542</a>";
							print "<a class='dropdown-item' href='#law'>กฏกระทรวงกำหนดสาขาวิชาชีพวิศวกรรม</a>";
							print "<a class='dropdown-item' href='#law'>ข้อบังคับการประกอบวิชาชีพ</a>";
							print "<a class='dropdown-item' href='#law'>จรรยาบรรณแห่งวิชาชีพ</a>";
							print "<a class='dropdown-item' href='#law'>Download กฏหมายของสภาวิศวกร</a>";
                        print "<div class='dropdown-divider'></div>";
							print "<a class='dropdown-item' href='#law'>Q&A ปัญหาการประกอบวิชาชีพ</a>";
        
                    print "</div>";
                print "</li>";
                
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>พัฒนาวิชาชีพ</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                        print "<a class='dropdown-item' href='#'>โครงการ CPD</a>";
                        print "<a class='dropdown-item' href='#'>คู่มือองค์กรแม่ข่าย</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'>บทความ</a>";
                        print "<a class='dropdown-item' href='#'>EforE คำศัพท์จากภาพยนต์โครงการส่งเสริมความรู้ภาษาอังกฤษ</a>";
                        print "<a class='dropdown-item' href='#'>การพัฒนาวิชาชีพวิศวกรรมตามเกณฑ์สภาวิศวกร</a>";                
                    print "</div>";
                print "</li>";
                                
                print "<li class='nav-item dropdown'><a class='nav-link dropdown-toggle' href='#' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>ประชาสัมพันธ์</a>";
                    print "<div class='dropdown-menu' aria-labelledby='navbarDropdownMenuLink'>";
                        print "<a class='dropdown-item' href='#'>ปฏิทินกิจกรรม</a>";
                        print "<a class='dropdown-item' href='#'>รายงานประจำปี</a>";
                        print "<a class='dropdown-item' href='#'>สารสภาวิศวกร</a>";
                        print "<a class='dropdown-item' href='#'>COE Channel</a>";
                        print "<a class='dropdown-item' href='#'>งานหาคนคนหางาน</a>";
                        print "<a class='dropdown-item' href='#'>ศัพท์ต่างๆเกี่ยวกับสภาวิศวกร</a>";
                        print "<a class='dropdown-item' href='#'>จำนวนสมาชิกและใบอนุญาต</a>";
                        print "<a class='dropdown-item' href='#'>คะแนนสอบภาคีสูงสุดประจำเดือน</a>";
                        print "<div class='dropdown-divider'></div>";
                        print "<a class='dropdown-item' href='#'>ผู้ตรวจสอบอาคาร</a>";
                    print "</div>";
                print "</li>";
                                                
                
            print "</ul>";
			
			print "<ul class='navbar-nav navbar-right'>";
				print "<li align='center'><a href='#ex_modal' data-toggle='modal' data-target='#ex_modal'>ตรวจสอบสถานะสมาชิก<br>และใบอนุญาต</a></li>";
			print "</ul>";
			
        print "</div>";
    print "</div>";
print "</nav>";
?>
<!--Modal-->
<div class="modal fade" id="ex_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ตรวจสอบสมาชิก โดย เลขที่สมาชิก/ใบอนุญาต</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="form1" method="post" class="form-horizontal" action="<?php echo $member_path;?>status.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label"><b>เลขที่สมาชิก :</b></label>
            <input name="" id="" type="text" class="form-control" autofocus>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label"><b>หรือ ใบอนุญาต :</b></label>
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
		  <p class="card-text" align="right"><a href="<?php echo $member_path;?>status.php">ตรวจสอบโดย ชื่อ สกุล / ค้นหาสมาชิกนิติบุคคล</a></p>	
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn-success">ค้นหา</button>
		<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
      </div>
		</form>
    </div>
  </div>
</div>