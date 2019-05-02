<?php
	$pagename = basename($_SERVER['PHP_SELF']);
?>
  <body id="page-top">

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
      <a class="navbar-brand js-scroll-trigger" href="../">
        <span class="d-block d-lg-none">สภาวิศวกร | Council of Engineers</span>
        <span class="d-none d-lg-block">
          <img class="img-fluid mx-auto mb-2" src="<?php echo $img_path;?>/Coe-logo.png" alt="">
        </span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item <?php if($pagename == 'index.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="index.php">Home</a>
          </li>
          <li class="nav-item <?php if($pagename == 'step_acpe.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="step_acpe.php">การขึ้นทะเบียนวิศวกรวิชาชีพอาเซียน</a>
          </li>
          <li class="nav-item <?php if($pagename == 'ease.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="ease.php">การอำนวยความสะดวกและส่งเสริม</a>
          </li>
          <li class="nav-item <?php if($pagename == 'property.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="property.php">คุณสมบัติของผู้ขอขึ้นทะเบียนฯ</a>
          </li>
          <li class="nav-item <?php if($pagename == 'mem_acpe.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="mem_acpe.php">ขั้นตอนการขึ้นทะเบียนฯ</a>
          </li>
          <li class="nav-item <?php if($pagename == 'ex_cer.php'){echo "active";}?>">
            <a class="nav-link js-scroll-trigger" href="ex_cer.php">ตัวอย่างใบรับรองฯ</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../../download/acpe/38-2561.pdf" target="_bank">ประกาศสภาวิศวกร</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../../download/acpe/2016_ACPEApplicationForm_Typable.pdf" target="_bank">Application Form ACPE</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../../download/acpe/ThaiACPE_RegisterPresentation.pptx" target="_bank">ACPE Presentation Template</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="../../download/acpe/2016_RenewalACPEApplicationForm_Typable.pdf" target="_bank">Renewal Application Form ACPE</a>
          </li>
        </ul>
      </div>
    </nav>
	
<img src="<?php echo $img_path?>/bg/acpe/asean.jpg" class="img-fluid rounded mx-auto d-block"/>

    <div class="container-fluid p-0">