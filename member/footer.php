	<!-- Return to Top -->
	<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

	<!-- Footer -->
    <footer class="py-5 bg-create">
      <div class="container">
        <p class="m-0 text-center text-white"><b>
		สภาวิศวกร 487/1 ซอย รามคำแหง 39 (เทพลีลา 1) แขวงพลับพลา เขตวังทองหลาง กรุงเทพฯ 10310 สายด่วน 1303 โทรสาร 02-935-6695
		</b><br>
		&copy; สงวนลิขสิทธิ์ 2555 สภาวิศวกร : <a href="#">Login สำหรับเจ้าหน้าที่</a> : <a href="#">ติดต่อสภาวิศวกร (ศูนย์บริการสมาชิก) | Contact</a> : <a href="http://www.facebook.com/coethai" class="fa fa-facebook" target="_bank"></a> <a href="https://twitter.com/@coenews" class="fa fa-twitter" target="_bank"></a> <a href="https://www.youtube.com/channel/UCp0hyBCBkIssbDKJaKQZa0Q" class="fa fa-youtube" target="bank"></a>
		</p>
      </div>
      <!-- /.container -->
	  
    </footer>
    <!-- Bootstrap core JavaScript
    <script src="<?php echo $js_path;?>/jquery.js"></script> -->
	<script src="<?php echo $libs_path;?>/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="<?php echo $js_path;?>/bootstrap.bundle.js"></script>-->
	<script src="<?php echo $libs_path;?>/bootstrap/4.1.1/js/bootstrap.bundle.js"></script>

  </body>

</html>

<script>
// ===== Scroll to Top ==== 
$(window).scroll(function() {
    if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        $('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        $('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
$('#return-to-top').click(function() {      // When arrow is clicked
    $('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
</script>