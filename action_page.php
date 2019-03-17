<!DOCTYPE html>
<html>
<body>
  
<?php

$start = $_GET['start'];
$end = $_GET['end'];
$location = $_GET['location'];

$uri = "https://images-api.nasa.gov/search?year_start=$start&year_end=$end&location=$location";
$response = \Httpful\Request::get($uri)->send();

var_dump($response);
?>

  </body>
</html>
