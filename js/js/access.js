$(document).ready(function(){
	//$('#play_access').click();

$('#login').submit(function(e){
e.preventDefault();
var username = $('.username').val();
var password = $('.password').val();
//alert("ok");

	$.ajax({

		url:'../php/login.php',
		method:'POST',
		data:{username:username, password:password},
		success:function(response){
			//alert(response);
			if (response == '1') {
				$('.access_granted_div').show();			
				  setTimeout(function() {
				    $('.access_granted_div').fadeOut('slow');
				}, 3000); // <-- time in milliseconds
				//$('.playSound').click();
				setTimeout(function() {
				    window.location.href="../";
				}, 3000);
				

			}
			else if (response == '2') {
				$('.access_denied_div').show();
				  setTimeout(function() {
				    $('.access_denied_div').fadeOut('slow');
				}, 3000); // <-- time in milliseconds

            $('.playSound').click();
			}
		}


	});

});

var obj = document.createElement("audio");
  obj.src = "../audio/access_denied.mp3";
  obj.volume = 0.1;
  obj.autoPlay = false;
  obj.preLoad = true;
  obj.controls = true;

  $(".playSound").click(function() {
    obj.play();
    // obj.pause();
  });



});

