<?php
// Original Answer
header('Content-Type: application/json');
$request = file_get_contents('php://input');
$req_dump = print_r( $request, true );

// Updated Answer
if($json = json_decode(file_get_contents("php://input"), true)){
   $data = $json;
}
print_r($data);
?>
