<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="../img/icon/favicon.ico" type="image/icon">
	<title>SMART Police Station</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<link href="../new/dist/css/plugins/jvectormap.css" rel="stylesheet" type="text/css">
	
	<link href="../new/dist/css/plugins/c3.css" rel="stylesheet" type="text/css">	
	<link class="rtl_switch_css" href="../new/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="../new/dist/css/mdicons.min.css" rel="stylesheet" type="text/css">
	<link class="rtl_switch_css" href="../new/dist/css/app.min.css" rel="stylesheet" type="text/css">
	<link href="../new/dist/css/theme.min.css" rel="stylesheet" type="text/css">
	<link href="../new/dist/css/skins/light-skin.css" rel="stylesheet" type="text/css">
	<link href="../new/dist/css/skins/dark-skin.css" rel="stylesheet" type="text/css">
	<link href="../new/demo/demo.css" rel="stylesheet" type="text/css">	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">


	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyB_Gjdm_0nJk17UVBPoV5Im40uQeguoRAo"></script>



	<link rel="stylesheet" href="dist/css/plugins/scrolling-tabs.css">
</head>

<!--<body class="theme-mda light-skin ev-page">--->
	<style type="text/css">
		body{
			background-image: url('../img/background.jpg');
			background-repeat: no-repeat;
			background-size: cover;
		}
		.icon_main{
			margin-top: 20px;
			font-size: 50px;
		}
		.hide_containt{
			display: none;
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
	<section style="margin-top: 100px;" class="">

		<div  class="container card"><br>
			<div class="row">
				<div class="col-md-12">
					<h2>First Information Report:</h2>
				</div>
			</div>
			<hr>
			<div class="row">
					
				<div class="col-md-6">
					<div class="">
						<select style="width: 80%;height: 35px;padding-left: 20px;border-radius: 5px;" class="police_station_name">
							<option>Police Station:</option>
							<?php
include('../db/db.php');
$sql = "SELECT * FROM police_station";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
	foreach ($result as $row) {
		?>
			<option value="<?=$row['police_station_id']?>"><?=$row['police_station_name'];?></option>

		<?php
	}
}


?>



						</select>
					</div>
					<br>
					<div class="">
					<input style="width: 80%;height: 35px;padding-left: 20px;border:1px solid gray;border-radius: 5px;" type="text" class="vicitim_name" name="" placeholder="Victim Name">
				</div>	

			

				<br>

				<div class="">
						<select style="width: 80%;height: 35px;padding-left: 20px;border-radius: 5px;" class="complaint_type">
							<option>Complaint Type:</option>

							<option>Altercate</option>
							<option>Vehicle Theft</option>
							<option>Beating</option>
							<option>Other</option>
						</select>
					</div>
					<br>


				<div class="">
					<input style="width: 80%;height: 35px;padding-left: 20px;border:1px solid gray;border-radius: 5px;" type="text" class="description" name="" placeholder="Complaint description">
				</div>	

				<br>

				<div class="">
					<input style="width: 80%;height: 35px;padding-left: 20px;border:1px solid gray;border-radius: 5px;" type="text" class="complaint_against_person" name="" placeholder="Complaint Against Name">
				</div>

				<br>

				<div class="">
					<input style="width: 80%;height: 35px;padding-left: 20px;border:1px solid gray;border-radius: 5px;" type="text" class="address" name="" placeholder="Address Of Against">
				</div>

				<br>

				<div class="">
					<center><button class="btn btn-warning save_data" style="margin-top: 12px;color: white;">Submit</button></center>
				</div>



				</div>
				<div class="col-md-6">
					

					

						<div class="card">

							
							<h3>What is an FIR?</h3>
							<p style="padding-left: 10px;padding-right: 10px;">First Information Report (FIR) is a
written document prepared by the
police when they receive information
about the commission of a
cognizable offence. It is a report of
information that reaches the police
first in point of time and that is why
it is called the First Information
Report.
It is generally a complaint lodged
with the police by the victim of a
cognizable offence or by someone
on his/her behalf.
Anyone can report the commission
of a cognizable offence either orally</p>
<br>

<h3>Why is FIR important?</h3>
<p style="padding-left: 10px;padding-right: 10px;">An FIR is a very important
document as it sets the process of
criminal justice in motion. It is only
after the FIR is registered in the
police station that the police takes
up investigation of the case.</p>
<br>

<h3>Who can lodge an FIR?</h3>
<p style="padding-left: 10px;padding-right: 10px;">Anyone who knows about the
commission of a cognizable offence
can file an FIR. It is not necessary
that only the victim of the crime
should file an FIR. A police officer
who comes to know about a
cognizable offence can file an FIR
himself/herself.</p><br><br>
						</div><br><br><br><br>

</div>


				</div>






			</div>	
			<div class="row">
				<div class="col-md-3">
					
				</div>
			</div>

			<br>
		</div>
	</div>	
		







    </section> <!-- /.content-wrapper --></center>	
</div><!-- /.main-wrapper -->
<script src="../new/dist/js/jquery.min.js"></script>
<!-- <script src="../new/dist/js/jquery.min.js"></script>
<script src="../new/dist/js/bootstrap.min.js"></script>
<script src="../new/dist/js/bower.min.js"></script> -->
<!-- Sortable script -->
<script src="../new/dist/js/plugins/sortable/sortable.min.js"></script>
<!-- peity charts -->
<script src="../new/dist/js/plugins/peity-charts/jquery.peity.min.js"></script>
<!-- worldmap script -->
<script src="../new/dist/js/plugins/jvectormap/jquery-jvectormap.min.js"></script>
<script src="../new/dist/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- Cart script d3 script must be loaded before c3 -->
<script src="../new/dist/js/plugins/d3/d3.min.js"></script>
<script src="../new/dist/js/plugins/c3/c3.min.js"></script>
<script src="../new/dist/js/plugins/scrolling-tabs/scrolling-tabs.min.js"></script>

<!-- app -->
<script src="../new/dist/js/app.js"></script>

<script src="../new/demo/demo-dashboard-sales.js"></script>

</body>

</html>

 <script type="text/javascript">
 	$(document).ready(function(){
 		$('.save_data').click(function(){
 			
 			var police_station_name = $('.police_station_name').val();

 			var vicitim_name = $('.vicitim_name').val();
 			var complaint_type = $('.complaint_type').val();
 			var description = $('.description').val();
 			var complaint_against_person = $('.complaint_against_person').val();
 			var address = $('.address').val();


 			$.ajax({
 				url:'../php/create_fir.php',
 				method:'POST',
 				data:{police_station_name:police_station_name, vicitim_name:vicitim_name, complaint_type:complaint_type, description:description, complaint_against_person:complaint_against_person, address:address},
 				success:function(data){
 					alert("FIR Create successfully !");
 				}
 			})
 		})
 	})
 </script>