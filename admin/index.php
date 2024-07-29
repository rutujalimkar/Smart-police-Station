<?php
session_start();
if (!isset($_SESSION['police_station_id'])) {
	header('location:../pages/admin_login.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/icon/favicon.ico" type="image/icon">
	<title>SMART Police Station</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<link href="new/dist/css/plugins/jvectormap.css" rel="stylesheet" type="text/css">
	
	<link href="new/dist/css/plugins/c3.css" rel="stylesheet" type="text/css">	
	<link class="rtl_switch_css" href="new/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="new/dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
	<link class="rtl_switch_css" href="new/dist/css/app.min.css" rel="stylesheet" type="text/css">
	<link href="new/dist/css/theme.min.css" rel="stylesheet" type="text/css">
	<link href="new/dist/css/skins/light-skin.css" rel="stylesheet" type="text/css">
	<link href="new/dist/css/skins/dark-skin.css" rel="stylesheet" type="text/css">
	<link href="new/demo/demo.css" rel="stylesheet" type="text/css">	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">


	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB_Gjdm_0nJk17UVBPoV5Im40uQeguoRAo"></script>



	<link rel="stylesheet" href="dist/css/plugins/scrolling-tabs.css">
</head>

<!--<body class="theme-mda light-skin ev-page">--->
	<style type="text/css">
		body{
			background-image: url('img/background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		.icon_main{
			margin-top: 20px;
			font-size: 50px;
		}
	</style>
	<body class="theme-mda light-skin">
		
		


	<div class="main-wrapper side-menu">

		<!-- HEADER-MENU -->	
		<header style="background: white;" class="header-bar toggler-hide theme">	
			<div class="toolbar">

				<div class="pull-right search-wrapper">				
					<!---<a href="ajax/notifications.html" class="aside-panel-trigger icon"><i style="color: black;" class="mdi mdi-bell"></i><span class="badge red">2</span></a>
				

				<span class="icon open_menu"><i style="color: black;" class="mdi mdi-menu"></i></span>-->
			<!-- 	<span class="icon open_menu"><a href="pages/help.php"><i style="color: black;font-size: 20px;" class="mdi mdi-help"></i></a></span> -->

				<span class="icon open_menu"><a href="pages/logout.php"><i style="color: black;" class="mdi mdi-power logout"></i></a></span>

				<div class="dropdown hb-user-dropdown pull-right">
					<img class="circle hb-profile" data-toggle="dropdown" src="demo/images/faces/face-23.jpg" alt="">
					<ul class="dropdown-menu top-right">
						<li><a href="inbox.html">Inbox</a></li>
						<li><a href="#:;">Profile</a></li>
						<li><a href="#:;">Settings</a></li>
						<li><a href="#:;">Help</a></li>
						<li class="divider"></li>
						<li><a href="#:;">Logout</a></li>
					</ul>
				</div><!-- /.dropdown -->
			</div><!-- /.pull-right -->

			<div class="title brand-name">
				<!--<img style="width: 80px;height: 50px;" src="img/logo/police.jpg">-->
				<span style="font-size: 15px;color: black;font-weight: bold;">SMART POLICE STATION</span>

			</div>
		</div><!-- /.toolbar -->
	</header>



<center>
	<section style="margin-top: 120px;" class="">

		<div  class="container">
		<div style="text-align: center;margin-left: 5%;color: black!important;" class="row">
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/complaint.php"><div style="margin-bottom: 10px;color: black;" class="col-xs-10 card"><br>
						<i class="ri-article-line icon_main"></i>
						<br>
						<label>Complaint</label><br><br>
					</div></a>
				</div>
			</div>
			<!-- <div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/fir.php"><div style="margin-bottom: 10px;color: black;" class="col-xs-10 card mb-12"><br>
						<i class="ri-newspaper-line icon_main"></i>
						<br>
						<label>FIR</label><br><br>
					</div></a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/missing_person.php"><div style="color: black;" class="col-xs-10 card"><br>
						<i class="ri-user-search-line icon_main"></i>
						<br>
						<label>Missing Person</label><br><br>
					</div></a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/festival_permision.php"><div style="color: black;" class="col-xs-10 card mb-12"><br>
						<i class="ri-calendar-event-fill icon_main"></i>
						<br>
						<label>Festival Permission</label><br><br>
					</div></a>
				</div>
			</div>
		</div>


			<div style="text-align: center;margin-left: 5%;" class="row">
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/complaint_status.php"><div style="margin-bottom: 10px;color: black;" class="col-xs-10 card"><br>
						<i class="ri-article-line icon_main"></i>
						<br>
						<label>Complaint Status</label><br><br>
					</div></a>
				</div>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/accident_cases.php"><div style="margin-bottom: 10px;color: black;" class="col-xs-10 card mb-12">
						
						<br>
						<img style="width: 60px;height: 80px;" src="../img/logo/accident.jpg">
						<br>
						<label>Accident Cases</label><br><br>
					</div>
				</div></a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/unidentified_body.php"><div style="color: black;" class="col-xs-10 card">
					<br>
						<img style="width: 80px;height: 80px;" src="../img/logo/deadbody.png">
						<br>
						<label>unidentified dead bodies</label><br><br>
					</div>
				</div></a>
			</div>
			<div class="col-xs-6 col-sm-3">
				<div class="row">
					<a href="pages/most_wanted.php"><div style="color: black;"  class="col-xs-10 card mb-12">
						<br>
						<img style="width: 60px;height: 80px;" src="../img/logo/wanted.jpg">
						<br>
						<label>Most wanted</label><br><br>
					</div>
				</div></a>
			</div>
		</div>
 -->
	</div>	
		







    </section> <!-- /.content-wrapper --></center>	
</div><!-- /.main-wrapper -->

<!-- <script src="new/dist/js/jquery.min.js"></script>
<script src="new/dist/js/bootstrap.min.js"></script>
<script src="new/dist/js/bower.min.js"></script>
 -->



<!-- Sortable script -->
<script src="new/dist/js/plugins/sortable/sortable.min.js"></script>
<!-- peity charts -->
<script src="new/dist/js/plugins/peity-charts/jquery.peity.min.js"></script>
<!-- worldmap script -->
<script src="new/dist/js/plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="new/dist/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Cart script d3 script must be loaded before c3 -->
<script src="new/dist/js/plugins/d3/d3.min.js"></script>
<script src="new/dist/js/plugins/c3/c3.min.js"></script>
<script src="new/dist/js/plugins/scrolling-tabs/scrolling-tabs.min.js"></script>

<!-- app -->
<script src="new/dist/js/app.js"></script>

<script src="new/demo/demo-dashboard-sales.js"></script>

</body>

</html>

 