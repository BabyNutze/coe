<?php
include("header.php");
include("menu.php");
?>
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo $img_path;?>/bg/certified/4.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="page-heading">
              <h2>ตรวจสอบการรับรองปริญญา</h2>
              <!--<span class="subheading">This is what I do.</span>-->
            </div>
          </div>
        </div>
      </div>
    </header>
	
    <!-- Main Content -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
			<h3 align="center">ตรวจสอบหลักสูตรที่รับรอง</h3>
			<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				ผู้ที่จะยื่นคำขอรับใบอนุญาตประกอบวิชาชีพวิศวกรรมควบคุมต้องจบวิศวกรรมศาสตร์ในหลักสูตรที่มีการรับรองแล้ว ดังนั้น ขอให้นิสิต/นักศึกษา ที่จะขอรับใบอนุญาตฯ ตรวจสอบหลักสูตรก่อนเข้ารับการศึกษา
			</p>
		<div class="row justify-content-md-center mt-5">
			<div class="col-md-8">
			<div class="card">
			<form name="form1" method="post" class="form-horizontal">
				<div class="card-header" role="tab" id="headingOne">
					<h5 class="mb-0">ตรวจสอบหลักสูตร ที่สภาวิศวกรรับรอง</h5>
				</div>
				<div class="card-body">
					<div class="form-group">
						<label>สถาบัน :</label>
						<select name="" id="" class="form-control" autofocus>
							<option selected></option>
							<option>...</option>
						</select>
					</div>
					<div class="form-group">
						<label>สาขา :</label>
						<select name="" id="" class="form-control">
							<option selected></option>
							<option>...</option>
						</select>
					</div>
				</div>
				<div class="card-footer">
					<input name="ok" type="submit" class="btn btn-success" value="ตกลง">
					<input type="reset" class="btn btn-danger pull-right" value="Reset">
				</div>
			</form>
			</div>
			</div>
		</div>
			
        </div>
      </div>
    </div>
<br>
    <hr>
<?php
include("footer.php");
?>