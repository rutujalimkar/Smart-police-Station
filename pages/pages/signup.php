<?php
session_start();
if (isset($_SESSION['police_user_id'])) {
	header('location:../');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Smart POLICE STATION</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="user_div">
	<img style="width: 220px;height: 200px;margin-left: 0%;" src="../img/logo/logo2.png">
	<form id="login" method="POST">
	<input class="username" type="text" name="" placeholder="Enter Username"><br>
	<input type="password" class="password" name="" placeholder="Enter Password"><br>
	<input type="password" class="con_password" name="" placeholder="Confirm Password"><br>
	<button type="submit" class="submit_btn">Signup</button>
	</form>	<br>
	<a href="login.php" style="text-decoration: none;color: white;">Already have an acount ? Signin</a>
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

</html>

<script type="text/javascript">
	$(document).ready(function(){


		$('.submit_btn').click(function(e){
			e.preventDefault();


			var username = $('.username').val();
			var password = $('.password').val();
			var con_password = $('.con_password').val();

			if (username == '') {
				alert("Enter username");
			}
			else if (password == '') {
				alert("Enter password");
			}
			else if (con_password == '') {
				alert("Enter Confirm password");
			}
			else if (password !== con_password) {
				alert("Confirm password do not matched");
			}
			else{


				$.ajax({
					url:'../php/signup.php',
					method:'POST',
					data:{username:username, password:password},
					success:function(data){
						alert("Account register success !");
						location.href = 'login.php';
					}
				})



			}


		})

	})
</script>