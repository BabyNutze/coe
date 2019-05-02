<?php
$base_path = "../";
$certified_path = "../certified/";
$tabee_path = "../tabee/";
$member_path ="../member/";
$pakey_path = "../pakey/";
$pakey_p_path = "../pakey_p/";
$acpe_path = "../acpe/";
$samun_path = "../samun/";
$wutthi_path = "../wutthi/";
$foriegn_path = "../foriegn/";
$juristic_path = "../juristic/";
$legal_path = "../legal/";

?>

<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $base_path;?>">COE.OR.TH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
            
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สภาวิศวกร</a>
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="#"> เกี่ยวกับสภาวิศวกร</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 6</a> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 5</a> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 4</a> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 3</a> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 2</a> 
                         <a class="dropdown-item" href="#"> คณะกรรมการสภาวิศวกร สมัยที่ 1</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#"> คณะกรรมการจรรยาบรรณ</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#"> ผู้ตรวจสภาวิศวกร</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#"> เจ้าหน้าที่สภาวิศวกร</a> 
                         <a class="dropdown-item" href="#"> ผังโครงสร้างสภาวิศวกร</a> 
                         <a class="dropdown-item" href="#"> แผนที่สภาวิศวกร</a> 
                         <a class="dropdown-item" href="#"> ประกาศวันหยุดสภาวิศวกร</a> 
                     </div> 
                 </li>                 
               
                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การรับรองปริญญา  TABEE</a> 
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="<?php echo $certified_path;?>regulations.php">ข้อบังคับ และระเบียบการรับรองปริญญา</a> 
                         <a class="dropdown-item" href="<?php echo $certified_path;?>steps_consider.php">ขั้นตอนการพิจารณาหลักสูตร เพื่อรับรองปริญญาฯ</a> 
                         <a class="dropdown-item" href="<?php echo $certified_path;?>guide.php">การจัดเตรียมเอกสารสำหรับการยื่นขอรับรองปริญญาฯ</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="<?php echo $certified_path;?>examination.php">ตรวจสอบการรับรองปริญญา</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="<?php echo $tabee_path;?>objective.php">การรับรองมาตรฐานคุณภาพการศึกษาฯ(TABEE)</a> 
                     </div> 
                 </li>                 
                
                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">สมาชิก ใบอนุญาต</a> 
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="<?php echo $member_path;?>index_member.php">การสมัครเป็นสมาชิกสภาวิศวกร</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="<?php echo $pakey_p_path;?>step_pakey_p.php">ภาคีวิศวกรพิเศษ</a> 
                         <a class="dropdown-item" href="<?php echo $pakey_path;?>index.php">ภาคีวิศวกร</a>                         
							 <a class="dropdown-item" href="../samun/index.php">สามัญวิศวกร</a> 							
							 <a class="dropdown-item" href="../wutthi/index.php">วุฒิวิศวกร</a> 
							 <a class="dropdown-item" href="../juristic/index.php">นิติบุคคล</a> 
							 <a class="dropdown-item" href="<?php echo $acpe_path;?>index.php">วิศวกรวิชาชีพอาเซียน (ACPE)</a> 
							 <a class="dropdown-item" href="../foriegn/index.php?menu=apec">วิศวกรวิชาชีพเอเปค (APEC)</a> 
                     </div> 
                 </li> 
                
                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">กฎหมายและจรรยาบรรณ</a> 
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>index.php?menu=1">พระราชบัญญัติวิศวกร พ.ศ. 2542</a> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>attach/Engineer_Act_2542.pdf" target="_blank">ENGINEER ACT, B.E. 2542</a> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>attach/20080215172108-1.PDF" target="_blank">กฏกระทรวงกำหนดสาขาวิชาชีพวิศวกรรม</a> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>index.php?menu=4">ข้อบังคับการประกอบวิชาชีพ</a> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>index.php?menu=5">จรรยาบรรณแห่งวิชาชีพ</a> 
                         <a class="dropdown-item" href="<?php echo $legal_path;?>attach/Engineer_Act_2542_edit_2559.pdf" target="_blank">Download กฏหมายของสภาวิศวกร</a>             
                     </div> 
                 </li> 
                
                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">พัฒนาวิชาชีพ</a> 
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="#">โครงการ CPD</a> 
                         <a class="dropdown-item" href="#">คู่มือองค์กรแม่ข่าย</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#">บทความ</a> 
                         <a class="dropdown-item" href="#">EforE คำศัพท์จากภาพยนต์โครงการส่งเสริมความรู้ภาษาอังกฤษ</a> 
                         <a class="dropdown-item" href="#">การพัฒนาวิชาชีพวิศวกรรมตามเกณฑ์สภาวิศวกร</a>                 
                     </div> 
                 </li> 
                                
                 <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ประชาสัมพันธ์</a> 
                     <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                         <a class="dropdown-item" href="#">ปฏิทินกิจกรรม</a> 
                         <a class="dropdown-item" href="#">รายงานประจำปี</a> 
                         <a class="dropdown-item" href="#">สารสภาวิศวกร</a> 
                         <a class="dropdown-item" href="#">COE Channel</a> 
                         <a class="dropdown-item" href="#">งานหาคนคนหางาน</a> 
                         <a class="dropdown-item" href="#">ศัพท์ต่างๆเกี่ยวกับสภาวิศวกร</a> 
                         <a class="dropdown-item" href="#">จำนวนสมาชิกและใบอนุญาต</a> 
                         <a class="dropdown-item" href="#">คะแนนสอบภาคีสูงสุดประจำเดือน</a> 
                         <div class="dropdown-divider"></div> 
                         <a class="dropdown-item" href="#">ผู้ตรวจสอบอาคาร</a> 
                     </div> 
                 </li>
             </ul> 
         </div> 
     </div> 
 </nav> 

