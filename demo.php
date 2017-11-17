<?php
$json = file_get_contents('php://input');
$obj = json_decode($json);
// $num =$obj[0]->val1;
// $array = Array (
//     "0" => Array (
//         "id" => "MMZ301",
//         "name" => "Michael Bruce",
//         "designation" => "System Architect"
//     ),
//     "1" => Array (
//         "id" => "MMZ385",
//         "name" => "Jennifer Winters",
//         "designation" => "Senior Programmer"
//     ),
//     "2" => Array (
//         "id" => "MMZ593",
//         "name" => "Donna Fox",
//         "designation" => "Office Manager"
//     )
// );
$json = json_encode($obj);

if (file_put_contents("data.json", $json))
    echo "JSON file created successfully...";
else 
    echo "Oops! Error creating json file...";



echo "<script>console.log( 'Debug Objects: " . $num. "' );</script>";
?>

