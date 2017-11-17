<?php
$contents=file_get_contents("data.json");
$contentsDecoded = json_decode($contents);
echo $contents;

?>