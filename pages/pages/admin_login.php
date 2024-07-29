<?php
session_start();
if (isset($_SESSION['police_station_id'])) {
	header('location:../admin');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SMART POLICE STATION</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="user_div">
	<img style="width: 220px;height: 200px;margin-left: 0%;" src="../img/logo/logo2.png">
	<form id="login" method="POST">
	<input class="username" type="text" name="" placeholder="Username"><br>
	<input type="password" class="password" name="" placeholder="Password"><br>
	<button type="submit" class="submit_btn">Signin</button>
	</form>	<br>
<!-- 	<a href="signup.php" style="text-decoration: none;color: white;">Don't have an account ? Signup</a><br><br> -->



<a href="login.php" style="text-decoration: none;color: white;">User Login</a>

<div class="initializing">
	
</div>

</div>




<div class="audio_div">
	   <audio id="myAudio">
		
		 <source src="../audio/access_denied.mp3" type="audio/mp3">
      </audio>
</div>


<div class="access_denied_div">
	<center>
		<div class="access_denied">
		<h3>ACCESS DENIED</h3>
	</div></center>
</div>
<div class="access_granted_div">
	<center><div class="access_granted">
		<h3>ACCESS GRANTED</h3>
	</div></center>
</div>



<button style="display: none;" class="playSound">Play</button>
</body>
<script type="text/javascript" src="../js/admin_access.js"></script>
</html>

