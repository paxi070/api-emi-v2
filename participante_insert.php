<?php
 
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function_insertParticipante.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == 'GET'){

    $inputData = json_decode(file_get_contents("php://input"), true);

    if(empty($inputData))
    {
        $insertParticipante = insertParticipante($_POST, $_GET); 
    }
    else
    {
        $insertParticipante = insertParticipante($inputData, $_GET); 
    }   

    echo $insertParticipante;
}
?>