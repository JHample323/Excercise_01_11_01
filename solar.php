<?php
$WeatherSource = "https://api.forecast.io/forecast/7057209bc69737e56b9afd3eb9270519/" . $_GET["lat"] . "," . $_GET["lng"];
header("Content-Type: application/json");
header("Cache-Control: no-cache");
readfile($WeatherSource);
?>
