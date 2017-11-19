<?php
header("Access-Control-Allow-Origin: *");
$contents=file_get_contents("data.json");
$contentsDecoded = json_decode($contents);
$size=count($contentsDecoded);

echo $contents;
?>
