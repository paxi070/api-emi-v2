<?php
 
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function_getParticipantes.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == "GET"){
    $participantes_lis = getParticipantesEvento();
    echo $participantes_lis;
}

?>