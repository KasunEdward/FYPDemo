<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
$json = json_encode($obj);


$inp=file_get_contents("data.json");
$tempArray=json_decode($inp);
$new_array=array_merge($obj,$tempArray);
$jsonData=json_encode($new_array);

if (file_put_contents("data.json", $jsonData))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";



echo "<script>console.log( 'Debug Objects: " . count($new_array). "' );</script>";
?>

