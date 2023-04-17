<?php
 
require 'conexion.php';

function updateParticipanteConfirmado($participanteInput, $participanteParams)
{
    echo 'AQUI2.1 ';

    global $conn;

    if(!isset($participanteParams['id']))
    {
        return error422('participante id not found in url');    
    } else {
        return error422('enter participante id');    
    }

    echo 'AQUI2.2 ';

    $participante_id = mysqli_real_escape_string($conn, $participanteInput['id']);

    $query = "UPDATE participante SET confirmado = 1 WHERE id = '$participante_id' LIMIT 1" ;
    $result = mysqli_query($conn, $query);

    echo 'AQUI2.3 ';

    if($result) {
        $data = [
            'status' => 200,
            'message' => 'Participante Confirmado'
        ];
        header("HTTP/1.0 200 OK");
        return json_encode($data);       
    }

    echo 'AQUI2.4 ';
}

?>