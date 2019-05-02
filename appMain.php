<!doctype html>
<html lang="en">

<head>
	<link rel="icon" href="../ico/favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Kanit|Mitr" rel="stylesheet">
	<link href='inc/fullcalendar-4.1.0/packages/core/main.css' rel='stylesheet' />
	<link href='inc/fullcalendar-4.1.0/packages/daygrid/main.css' rel='stylesheet' media='print' />
	<script src='inc/fullcalendar-4.1.0/packages/core/main.js'></script>
  	<script src='inc/fullcalendar-4.1.0/packages/interaction/main.js'></script>
	<script src='inc/fullcalendar-4.1.0/packages/daygrid/main.js'></script>



    <script>

      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
          plugins: [ 'dayGrid' ]
        });

        calendar.render();
      });

    </script>

	<title>COE</title>
	<style>
		* {	font-family: 'Mitr', sans-serif;	font-family: 'Kanit', sans-serif;	}
		.clearfix:before,.clearfix:after {	content: " "; display: table;	}
		.clearfix:after { clear: both;}
		.clearfix {	*zoom: 1; }
	</style>
</head>

<body>

	<?php
    include_once('appHeader.php');
    include_once('appMenu.php');
?>
	<!--  **************************************************************************************  -->


	<?php


		include("main_menu/slide.php");
		include("main_menu/train.php");
		include("main_menu/news.php");
		include("main_menu/photo_news.php");
		include("main_menu/status.php");
		include("main_menu/certified.php");
		include("main_menu/member.php");
		include("main_menu/pakey.php");

		include("main_menu2/samun.php");
		include("main_menu2/wutthi.php");
		include("main_menu/pakey_p.php");
		include("main_menu2/juristic.php");
		include("main_menu2/foriegn.php");
		include("main_menu2/legal.php");
		include("main_menu/footer.php");

   ?>



	<!--  **************************************************************************************  -->
	<?php include_once('appFooter.php'); ?>






</body>

</html>
