<?php
 
header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: PUT');
header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Request-With');

include('function_updateConfirmado.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if($requestMethod == 'PUT'){

    echo 'AQUI1 ';

    $inputData = json_decode(file_get_contents("php://input"), true);

    echo 'AQUI2 ';

    if(empty($inputData))
    {
        $updateParticipante = updateParticipanteConfirmado($_POST, $_GET); 
    }
    else
    {
        $updateParticipante = updateParticipanteConfirmado($inputData, $_GET); 
    }    

    echo 'AQUI3 ';

    echo $updateParticipante;
}
?>