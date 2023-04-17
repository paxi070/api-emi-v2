<?php
 
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function_updateConfirmado.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == 'PUT'){

    $inputData = json_decode(file_get_contents("php://input"), true);

    if (array_key_exists("id", $_GET)) {
        $participanteId = $_GET['id'];
        echo $updateParticipante;
        //$updateParticipante = updateParticipanteConfirmado($_POST, $_GET); 
    }

    //if(empty($inputData))
    //{
    //    $updateParticipante = updateParticipanteConfirmado($_POST, $_GET); 
    //}
    //else
    //{
    //    $updateParticipante = updateParticipanteConfirmado($inputData, $_GET); 
    //}   

    echo $updateParticipante;
}
?>