<?php
	$pagename = basename($_SERVER['PHP_SELF']);
?>
  <body class="">
    <div class="page">
      <div class="page-main">
        <div class="header py-4">
          <div class="container">
            <div class="d-flex">
              <a class="header-brand" href="../">
                <img src="<?php echo $img_path;?>/LOGO.gif" class="header-brand-img" alt="tabler logo"><font color="brown">สภาวิศวกร | Council of Engineers</font>
              </a>
              <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
              </a>
            </div>
          </div>
        </div>		
	
	<div class="wide">
  	<div class="col-xs-5 line"></div>
    <div class="col-xs-2 logo">การรับรองมาตรฐานคุณภาพการศึกษาฯ</div>
    <div class="col-xs-5 line"></div>
	</div>	
		
        <div class="header collapse d-lg-flex p-0 sticky-top" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <!--<div class="col-lg-3 ml-auto">
                <form class="input-icon my-3 my-lg-0">
                  <input type="search" class="form-control header-search" placeholder="Search&hellip;" tabindex="1">
                  <div class="input-icon-addon">
                    <i class="fe fe-search"></i>
                  </div>
                </form>
              </div>-->
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link <?php if($pagename == 'objective.php'){echo "active";}elseif($pagename == 'subcommit.php'){echo "active";}?>" data-toggle="dropdown"><i class="fe fe-home"></i>การรับรองมาตรฐานฯ (TABEE)</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="objective.php" class="dropdown-item <?php if($pagename == 'objective.php'){echo "active";}?>">วัตถุประสงค์และภารกิจ</a>
                      <a href="subcommit.php" class="dropdown-item <?php if($pagename == 'subcommit.php'){echo "active";}?>">คณะอนุกรรมการรับรองมาตรฐานฯคุณภาพการศึกษาฯ (TABEE)</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-file"></i> ระเบียบการรับรองฯ</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../../download/tabee/TABEE_Law_Regulation.pdf" target="_bank" class="dropdown-item ">ระเบียบคณะกรรมการสภาวิศวกร พ.ศ.๒๕๖๐</a>
                      <a href="update.php" class="dropdown-item ">การสมัครเพื่อขอรับการรับรองมาตรฐาน</a>
                      <a href="update.php" class="dropdown-item ">รายชื่อหลักสูตรที่ได้รับการรับรองมาตรฐาน</a>
                      <a href="update.php" class="dropdown-item ">รายชื่อผู้เข้ารับการอบรมผู้ตรวจประเมินฯ</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if($pagename == 'p_direct.php'){echo "active";}elseif($pagename == 'p_audit.php'){echo "active";}?>" data-toggle="dropdown"><i class="fe fe-calendar"></i> แผนกิจกรรมรายปี และกิจกรรม</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="update.php" class="dropdown-item ">แผนกิจกรรมรายปี</a>
                      <a href="p_direct.php" class="dropdown-item <?php if($pagename == 'p_direct.php'){echo "active";}?>">กิจกรรม โครงการนำร่องฯ</a>
                      <a href="p_audit.php" class="dropdown-item <?php if($pagename == 'p_audit.php'){echo "active";}?>">กิจกรรม โครงการอบรมผู้ตรวจประเมินฯ</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-clipboard"></i> รายงานผลการดำเนินงาน</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../../download/tabee/Report2016.pdf" target="_bank" class="dropdown-item ">รายงานผลการดำเนินงาน 2559</a>
                      <a href="../../download/tabee/TABEEReport2016.pdf" target="_bank" class="dropdown-item ">รายงานความก้าวหน้า ปัญหาและอุปสรรค 2560</a>
                    </div>
                  </li>
				  <li class="nav-item">
                    <a href="faq.php" class="nav-link <?php if($pagename == 'faq.php'){echo "active";}?>"><i class="fe fe-message-circle"></i> คำถามที่พบบ่อย (FAQs)</a>
                  </li>
				  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link <?php if($pagename == 'form.php'){echo "active";}elseif($pagename == 'doc.php'){echo "active";}?>" data-toggle="dropdown"><i class="fe fe-download"></i> Downloads เอกสาร</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <a href="../../download/tabee/TABEE_Guide.pdf" target="_bank" class="dropdown-item ">คู่มือแนะนำการรับรองมาตรฐานคุณภาพการศึกษาวิศวกรรมศาสตร์ (TABEE)</a>
                      <a href="../../download/tabee/TABEE_Manual.pdf" target="_bank" class="dropdown-item ">ขั้นตอนและวิธีการรับรองมาตรฐานคุณภาพการศึกษาฯ</a>
                      <a href="../../download/tabee/TABEE_Guide_Eng.pdf" target="_bank" class="dropdown-item ">ขั้นตอนและวิธีการรับรองมาตรฐานคุณภาพการศึกษาฯ (ภาษาอังกฤษ)</a>
					  <a href="../../download/tabee/SSR.pdf" target="_bank" class="dropdown-item ">คู่มือการเขียนรายงานผลการประเมินตนเองของสถาบันการศึกษา</a>
                      <a href="form.php" class="dropdown-item <?php if($pagename == 'form.php'){echo "active";}?>">แบบฟอร์ม TABEE</a>
                      <a href="../../download/tabee/EvaluatorTraining.pdf" target="_bank" class="dropdown-item ">เอกสารสำหรับผู้ตรวจประเมินฯ</a>
                      <a href="doc.php" class="dropdown-item <?php if($pagename == 'doc.php'){echo "active";}?>">เอกสารสัมมนาและองค์ความรู้ต่างๆ</a>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>