<style>
	.button2 {
		background-color: white;
		color: black;
		border: 2px solid #004182;
		border-radius: 12px;
	}
	
	.button2:hover {
		background-color: #004182;
		color: white;
	}
	
	.bg-wutthi {
		background: url(main_menu2/bg-wutthi.jpg) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		height: 450px;
		max-height: 450px;
	}
	
	.top-banner {
		display: flex;
		width: calc(100% - 150px);
		height: 100vh;
		transform: translateX(150px);
	}
	
	.top-banner-overlay {
		display: flex;
		flex-direction: column;
		justify-content: center;
		transition: transform .7s;
		color: white;
		background: rgba(0, 0, 0, .6);
	}
	
	.top-banner-overlay.is-moved {
		transform: translateX(350px);
	}
	
	.top-banner-overlay.is-moved::before {
		content: '';
		position: absolute;
		top: 0;
		bottom: 0;
		right: 100%;
		width: 20px;

	}
	
	.top-banner-overlay p {
		font-size: 1rem;
		margin-top: 10px;
	}
	
	.top-nav li+ li {
		margin-top: 7px;
	}
	
	.text-cyan {
		color: #00FFFF;
	}
	
	.btn-cyan {
		color: #fff;
		background-color: #00AFAF;
		border-color: #00FFFF;
	}
	
	.btn-cyan:hover {
		background-color: #f44336;
		color: white;
	}
	
	.bg-op {
	color: white;
	background: rgba(0, 0, 0, .6);
	}
		@media (max-width: 768px) { 
				h4#btnwutthi {
			font-size: 18px !important;
		}
	}
</style>


<!-- Section 3 -->

<div class="container-fluid bg-wutthi" id="wutthi">

		<div class="row bg-op">
			<div class="col">
				<h1 class="text-center text-cyan mt-5" style="text-shadow: 0 13.36px 8.896px #c4b59d,0 -2px 1px #fff;">วุฒิวิศวกร</h1><hr>
				<h4 class="text-center mt-5">การเลื่อนระดับเป็นวุฒิวิศวกร ต้องเป็นผู้มีประสบการณ์ 5 ปีขึ้นไป ยื่นผลงาน และผ่านการทดสอบและสัมภาษณ์ สามารถเป็นที่ปรึกษาโครงการได้</h4>
				<div class="text-center mt-5 mb-5">
					<a href="wutthi/index.php" class="btn btn-cyan p-2" role="button"><h4 id="btnwutthi">คำแนะนำในการขอใบอนุญาติวุฒิวศวกร</h4></a>

				</div>
			</div>
		</div>
</div>

<!-- End Section 3-->