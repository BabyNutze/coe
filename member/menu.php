<?php
	$pagename = basename($_SERVER['PHP_SELF']);
?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-create sticky-top"><!--sticky-top,fixed-top-->
      <div class="container-fluid">
        <a class="navbar-brand" href="../"><img src="../inc/img/logo.jpg" width="50" height="50"/>&nbsp; สภาวิศวกร | Council of Engineers | </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if($pagename == 'step_member.php'){echo "active";}?>">
              <a class="nav-link" href="../member/step_member.php">ขั้นตอนการสมัครสมาชิก</a>
            </li>
			<li class="nav-item dropdown
			<?php
			if($pagename == 'step_pakey.php'){
				echo "active";
			}elseif($pagename == 'step_pakey_p.php'){
				echo "active";
			}
			?>">
			  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">การขอใบอนุญาต</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item <?php if($pagename == 'step_pakey.php'){echo "active";}?>" href="../pakey/step_pakey.php">ขอรับใบอนุญาต ระดับภาคีวิศวกร</a>
                <a class="dropdown-item <?php if($pagename == 'step_pakey_p.php'){echo "active";}?>" href="../pakey_p/step_pakey_p.php">ขอรับใบอนุญาต ระดับภาคีวิศวกรพิเศษ</a>
			  </div>
			</li>
            <li class="nav-item <?php if($pagename == 'register.php'){echo "active";}?>">
              <a class="nav-link" href="../pakey/register.php">ยื่นขอรับใบอนุญาตและสมัครสอบ</a>
            </li>
			<li class="nav-item <?php if($pagename == 'list_name.php'){echo "active";}?>">
              <a class="nav-link" href="../pakey/list_name.php">รายชื่อผู้มีสิทธิ์สอบ</a>
            </li>
            <li class="nav-item dropdown
			<?php
			if($pagename == 'login.php'){
				echo "active";
			}elseif($pagename == 'status.php'){
				echo "active";
			}elseif($pagename == 'renew.php'){
				echo "active";
			}elseif($pagename == 'repair.php'){
				echo "active";
			}elseif($pagename == 'password.php'){
				echo "active";
			}elseif($pagename == 'print.php'){
				echo "active";
			}elseif($pagename == 'form.php'){
				echo "active";
			}elseif($pagename == 'history.php'){
				echo "active";
			}elseif($pagename == 'rules.php'){
				echo "active";
			}elseif($pagename == 'db_exam.php'){
				echo "active";
			}elseif($pagename == 'all_train.php'){
				echo "active";
			}elseif($pagename == 'change_train.php'){
				echo "active";
			}elseif($pagename == 'detail.php' || $pagename == 'all_detail.php'){
				echo "active";
			}
			?>">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">บริการสมาชิก</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item <?php if($pagename == 'login.php'){echo "active";}?>" href="../member/login.php">ระบบสมาชิก</a>
                <a class="dropdown-item <?php if($pagename == 'status.php'){echo "active";}?>" href="../member/status.php">ตรวจสอบสถานะสมาชิกและใบอนุญาต</a>
                <a class="dropdown-item <?php if($pagename == 'renew.php'){echo "active";}?>" href="../member/renew.php">ต่ออายุสมาชิกและใบอนุญาต</a>
                <a class="dropdown-item <?php if($pagename == 'repair.php'){echo "active";}?>" href="../member/repair.php">ใบแทนใบอนุญาต/วุฒิบัตร (ชำรุด/สูญหาย/เปลี่ยนชื่อ)</a>
                <a class="dropdown-item <?php if($pagename == 'password.php'){echo "active";}?>" href="../member/password.php">ขอรับ Password/ลืม Password</a>
				<a class="dropdown-item <?php if($pagename == 'print.php'){echo "active";}?>" href="../member/print.php">พิมพ์ใบแจ้งชำระเงิน</a>
				<a class="dropdown-item <?php if($pagename == 'form.php'){echo "active";}?>" href="../member/form.php">แบบฟอร์มและคำแนะนำ</a>
				<a class="dropdown-item <?php if($pagename == 'history.php'){echo "active";}?>" href="../pakey/history.php">ประวัติการสมัครสอบ/พิมพ์รายวิชาและใบแจ้งชำระเงิน</a>
				<a class="dropdown-item <?php if($pagename == 'rules.php'){echo "active";}?>" href="../pakey/rules.php">กติกาและการเตรียมตัวไปสอบ</a>
				<a class="dropdown-item <?php if($pagename == 'db_exam.php'){echo "active";}?>" href="../pakey/db_exam.php">คลังข้อสอบภาคีวิศวกร ปี 2561</a>
				<a class="dropdown-item <?php if($pagename == 'all_train.php'){echo "active";}?>" href="../pakey/all_train.php">รายละเอียด / รอบอบรม รายชื่อ ผลสอบ / ตารางสอบซ่อม / การเลื่อนอบรม</a>
				<a class="dropdown-item <?php if($pagename == 'change_train.php'){echo "active";}?>" href="../pakey/change_train.php">เลื่อนอบรมด้วยตนเองผ่านเว็บไซต์</a>
				<hr>
				<a class="dropdown-item <?php if($pagename == 'detail.php' || $pagename == 'all_detail.php'){echo "active";}?>" href="../news/detail.php">ข่าวประชาสัมพันธ์</a>			  
			  </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>