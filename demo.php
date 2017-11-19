<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
$json = json_encode($obj);


if (file_put_contents("data.json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";



echo "<script>console.log( 'Debug Objects: " . $num. "' );</script>";
?>

