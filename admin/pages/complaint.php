<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="../img/icon/favicon.ico" type="image/icon">
	<title>Smart Police Station</title>
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
	<style>
.grid-container {
  display: grid;
  grid-template-columns: auto auto auto auto auto auto;
 
  padding: 10px;
}
.grid-item {
 
  border: 0.5px solid rgba(0, 0, 0, 0.8);
  padding: 20px;

  text-align: center;
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
					
				<div class="card">
							
					<h4>FIR status</h4>	
					<table>
						<tr>
							<th>Name</th>
							<th>Complaint Type</th>
							<th>Description</th>
							<th>compaint person name</th>
							<th>Status</th>
							<th>Ation</th>
						</tr>

						<?php

						include('../db/db.php');
						$police_station_id = $_SESSION['police_station_id'];
						$sql = "SELECT * FROM fir WHERE police_station_id = '$police_station_id'";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							foreach ($result as $row) {
								?>
								<tr>
									<td><?=$row['victim_name']?></td>
									<td><?=$row['compaint_type']?></td>
									<td><?=$row['description']?></td>
									<td><?=$row['compaint_person_name']?></td>
									<td>
										<?php
										if ($row['status'] == '0') {
										?>
										Pending
										<?php
										}
										else{
											?>
											Confirm
											<?php
										}

										?>
									</td>
									<td><button class="change btn btn-warning" id="<?=$row['fir_id']?>">
											<?php
										if ($row['status'] == '0') {
										?>
										Confirm
										<?php
										}
										else{
											?>
											Pending
											<?php
										}

										?>
									</button></td>
								</tr>


								<?php
							}
						}




						?>





					</table>


				</div>



<br><br>


			</div>	



			<br>


							<div class="col-md-12">
					
				<div class="card">
							
					<h4>Complaint status</h4>	
					<table>
						<tr>
							<th>Name</th>
							<th>Complaint Type</th>
							<th>Complaint Person</th>
							<th>Status</th>
						</tr>

						<?php

						include('../db/db.php');
						$sql = "SELECT * FROM complaint";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							foreach ($result as $row) {
								?>
								<tr>
									<td><?=$row['f_name']?></td>
									<td><?=$row['complaint']?></td>
									<td><?=$row['c_f_name']?></td>
									<td>
										<?php
										if ($row['status'] == '0') {
										?>
										Pending
										<?php
										}
										else{
											?>
											Confirm
											<?php
										}

										?>
									</td>
								</tr>


								<?php
							}
						}




						?>





					</table>


				</div>



<br><br>


			</div>	
			
			
			<br>
		</div>
	</div>	
		







    </section> <!-- /.content-wrapper --></center>	
</div><!-- /.main-wrapper -->

<script src="../new/dist/js/jquery.min.js"></script>
<script src="../new/dist/js/bootstrap.min.js"></script>
<script src="../new/dist/js/bower.min.js"></script>
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
		$('.change').click(function(){
			var fir_id  = $(this).attr("id");
			$.ajax({
				url:'../php/change_status.php',
				method:'POST',
				data:{fir_id:fir_id},
				success:function(data){
					//alert(data);
					location.reload();
				}
			})

		})
	})
</script>