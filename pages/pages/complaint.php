<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="img/icon/favicon.ico" type="image/icon">
	<title>Smart Police Station</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

	<link href="new/dist/css/plugins/jvectormap.css" rel="stylesheet" type="text/css">
	
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
			background: url('../img/12.jpg');
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
<form action="javascript:void(0);" id="complaint_form" method="POST">
		<div  class="container card"><br>
			<div class="row">
				<div class="col-md-12">
					<h2>Complaint Form</h2>
				</div>
			</div>
			<hr>
			<div class="row">











				<div class="col-md-3">
					<input type="text" name="f_name" placeholder="Your First Name">
				</div>
				<div class="col-md-3">
					<input type="text" name="m_name" placeholder="Your Middle Name">
				</div>
				<div class="col-md-3">
					<input type="text" name="l_name" placeholder="Your Last Name">
				</div>
				<!--------<div class="col-md-3">
					<img style="width: 60px;height: 60px;" src="img/logo/user.jpg" id="preview_img"><br><br>
					<button style="height: 30px;color: white!important;" class="btn btn-warning" onclick="open_select_img()">Select</button>
					<input style="display: none;" class="open_image" type="file" name="" onchange="document.getElementById('preview_img').src = window.URL.createObjectURL(this.files[0])">
				</div>
				<script type="text/javascript">
					function open_select_img(){
						$('.open_image').click();
					}
				</script>----->
			</div>
			<div class="row">
				<div class="col-md-12">
					<input style="margin-top: 12px;" type="text"  name="your_address" placeholder="Your Address">
				</div>				
				
			</div>

				<div style="margin-top: 12px;" class="row">
				<div class="col-md-3">
					<input type="text" name="c_f_name" placeholder="Complaint Person First Name">
				</div>
				<div class="col-md-3">
					<input type="text" name="c_m_name" placeholder="Complaint Person Middle Name">
				</div>
				<div class="col-md-3">
					<input type="text" name="c_l_name" placeholder="Complaint Person Last Name">
				</div>
				<!-- <div class="col-md-3">
					<button style="margin-top: px;" class="btn">Add</button>
				</div> -->
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<input style="margin-top: 12px;" type="text"  name="c_address" placeholder="Complaint Person Address">
				</div>				
				
			</div>

			<div class="row">
				<div class="col-md-12">
					<input style="margin-top: 12px;" type="text"  name="complaint" placeholder="Complaint">
				</div>				
				
			</div>

			<div class="row">
				<div class="col-md-3">
					<input style="margin-top: 12px;" type="text"  name="your_mobile" placeholder="Your Mobile No">
				</div>
				<!-- <div class="col-md-2">
					<button style="margin-top: 12px;" class="btn">Send OTP</button>
				</div>	 -->

						
				
			</div>
		
			<div class="row">
				<div class="col-md-3">
					<button class="btn btn-warning" type="submit" style="float: left;margin-top: 12px;color: white;">Save</button>
				</div>
			</div>

			<br>
		</div>
	</form>   
	</div>	
		







    </section> <!-- /.content-wrapper --></center>	
</div><!-- /.main-wrapper -->
<!-- 

<script src="new/dist/js/bootstrap.min.js"></script>
<script src="new/dist/js/bower.min.js"></script> -->
<!-- Sortable script -->
<script src="new/dist/js/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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

  <script type="text/javascript">
 	$(document).ready(function(){
 		

 				 $('#complaint_form').submit(function(event){
  event.preventDefault();


    $.ajax({
     url:"../php/create_complaint.php",
     method:"POST",
     data:new FormData(this),
     contentType:false,
     processData:false,
     success:function(data)
     {
     	// alert(data);
     	// alert("Data Saved !");
     	//fetch_missing();

     	alert("Complaint Create successfully \n Your Complaint id: "+data);

     }	
 	});
});



 	})
 </script>