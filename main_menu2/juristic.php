<style>
	.bg-juristic {
	background: url("main_menu2/bg-juristic.jpg")no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	min-height: 500px;
	}
	
	.nav-juristic {
		height: 400px;
		width: 400px;
		background: #eee;
		margin: auto;
		opacity: .2;
	}
	
	.container-juristic {
		position: relative;
		margin: 0 auto;
		/* Center it */
	}
	
	.container-juristic .content {
		position: absolute;
		/* Position the background text */
		bottom: 0;
		/* At the bottom. Use top:0 to append it to the top */
		background: rgba(0, 0, 0, 0.5);
		/* Black background with 0.5 opacity */
		color: #f1f1f1;
		/* Grey text */
		width: 100%;
		/* Full width */
		padding: 20px;
		/* Some padding */
	}
	/* Clearing floats */
	
	.cf:before,
	.cf:after {
		content: " ";
		display: table;
	}
	
	.cf:after {
		clear: both;
	}
	
	.cf {
		*zoom: 1;
	}
	/* Mini reset, no margins, paddings or bullets */
	
	.menu,
	.submenu {
		margin: 0;
		padding: 0;
		list-style: none;
	}
	/* Main level */
	
	.menu {
		margin: 50px auto;
		width: 800px;
		/* http://www.red-team-design.com/horizontal-centering-using-css-fit-content-value */
		width: -moz-fit-content;
		width: -webkit-fit-content;
		width: fit-content;
	}
	
	.menu> li {
		background: #34495e;
		float: left;
		position: relative;
		transform: skewx(25deg);

	}
	
	.menu a {
		display: block;
		color: #fff;
		font-size: 18px;
	
	}
	
	.menu li:hover {
		background: #e74c3c;
	}
	
	.menu> li> a {
		transform: skewX(-25deg);
		padding: 1em 1em;
	}

	
	.menu> li:hover .submenu,
	.menu> li:hover .submenu li {
		opacity: 1;
		visibility: visible;
	}
	
	.menu> li:hover .submenu li:nth-child(even) {
		transform: skewX(25deg) translateX(15px);
	}
	
	.menu> li:hover .submenu li:nth-child(odd) {
		transform: skewX(-25deg) translateX(-15px);
	}
</style>
<div class="container-fluid bg-juristic p-5" id="juristic">
	<h1 class="text-center text-warning " style="text-shadow: 0 13.36px 8.896px #c4b59d,0 -2px 1px #fff;">นิติบุคคล</h1><hr>
		<div class="text-center text-light"><h4>นิติบุคคลที่ประกอบการด้านวิศวกรรม จะต้องขอใบอนุญาตประกอบวิชาชีพวิศวกรรมควบคุมประเภทนิติบุคคล ตามพระราชบัญญัตวิศวกร พ.ศ.2542</h4></div>
		<ul class="menu cf">
			<li class=""><a href="juristic/index.php" style="text-decoration: none" target="_blank"><h6>การขอใบอนุญาตนิติบุคคล</h6></a>
			</li>
			<li><a href="juristic/index.php?menu=2" style="text-decoration: none" target="_blank"><h6>ต่ออายุใบอนุญาตนิติบุคคล</h6></a>
			</li>
			<li><a href="http://www.coe.or.th/coe-2/main/coeHome.php?aMenu=223" style="text-decoration: none" target="_blank"><h6>รายชื่อนิติบุคคลที่ได้รับใบอนุญาต</h6></a>
			</li>
			<li><a href="http://www.coe.or.th/coe-2/main/coeHome.php?aMenu=225" style="text-decoration: none" target="_blank"><h6>ค้นหานิติบุคคลตามชื่อนิติบุคคล</h6></a></li>
		</ul>
		<ul class="menu cf">
		<li><a href="http://www.coe.or.th/coe-2/main/coeHome.php?aMenu=225" style="text-decoration: none" target="_blank"><h6>ค้นหานิติบุคคลตามชื่อนิติบุคคล</h4></a></li>
			<li><a href="http://www.coe.or.th/coe-2/main/coeHome.php?aMenu=226&aFlag=1" style="text-decoration: none" target="_blank"><h6>รายชื่อนิติบุคคลที่หมดอายุไม่เกิน 60 วัน</h6></a>
			</li>
			<li><a href="http://www.coe.or.th/coe-2/main/coeHome.php?aMenu=226&aFlag=2" style="text-decoration: none" target="_blank"><h6>รายชื่อนิติบุคคลที่หมดอายุเกิน 60 วัน</h6></a>
			</li>
			<li><a href="http://192.168.1.24/http_public/main/juristic/index.php?menu=3" style="text-decoration: none" target="_blank"><h6>เอกสารที่เกี่ยวข้องกับนิติบุคคล</h6></a>
			</li>		
		</ul>
</div>
