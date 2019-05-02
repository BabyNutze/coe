<style>
  #c_f {
	padding-right: 70px;
	padding-left: 70px;
	margin-right: auto;
	margin-left: auto;
  }
	#circle{
		width:80px;
		height:80px;
		border-radius:50px;
		font-size:20px;
		color:#ffffff;
		line-height:80px;
		text-align:center;
		background:#ff2f00
	}
</style>

<?php
	@$d_format = $_REQUEST['d_format'];
?>
<aside>
    <div class="container-fluid" id="c_f">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="text-center sr-button text-shadow text-dark"><i>ตารางสัมมนา</i></h2>
                <hr class="primary">
            </div>
        </div>
		<div class="row mt-4">
			<div class="col-lg-7">
				<div id='calendar'></div>
			</div>
			
			<div class="col-lg-5">
			<h4 class="text-center m-4" style="color:#800000;"><b>งานอบรมสัมมนา</b></h4>
				<?php
				if($d_format != ''){
					$cut = explode("-", $d_format);
					$year = $cut[0];
					$month = $cut[1];
					$day = $cut[2];
				?>
					<h6 class="mb-0">
						<a href="news/detail.php" target="_bank">
						<ul>
							<li>
								<?php echo $d_format;?>
							</li>
						</ul>
						</a>
					</h6>
					<button class="btn btn-primary pull-right mb-3" onclick="window.location.href='#'" autofocus>Learn More</button>
				<?php
				}else{
					for($i=1;$i<=6;$i++){
				?>
					<h6 class="mb-0">
						<a href="news/detail.php" target="_bank">
						<ul>
							<li>
								(ประกาศรายชื่อผู้ลงทะเบียน)การสัมมนาเรื่อง “แนะนำการเตรียมความพร้อม เพื่อขอรับใบอนุญาตประกอบวิชาชีพวิศวกรรมควบคุม ระดับสามัญวิศวกรและระดับวุฒิวิศวกร และการเพิ่มพูนความรู้ สาขาวิศวกรรมไฟฟ้า” วันเสาร์ที่ 21 เมษายน 2561 เวลา 08.30 - 16.00 น. ณ โรงแรมอวานี ขอนแก่น โฮเทล แอนด์ คอนเวนชั่น เซ็นเตอร์ จังหวัดขอนแก่น 
							</li>
						</ul>
						</a>
					</h6>
				<?php
					}
				?>
					<a href="news/all_detail.php?aType=2" target="_bank" class="btn btn-primary pull-right mb-3">Learn More</a>
				<?php
				}
				?>
				
			</div>
		</div>
    </div>
</aside>

