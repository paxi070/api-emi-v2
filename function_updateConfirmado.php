<?php
 
require 'conexion.php';

function updateParticipanteConfirmado($participanteInput, $participanteParams)
{
    global $conn;

    echo $participanteInput;

    echo $participanteParams;

    echo 'id: ';
    echo $participanteInput['id'];

    $participante_id = mysqli_real_escape_string($conn, $participanteInput['id']);

    echo $participante_id;

    $query = "UPDATE participante SET confirmado = 1 WHERE id = '$participante_id' LIMIT 1" ;
    $result = mysqli_query($conn, $query);

    if($result) {
        $data = [
            'status' => 200,
            'message' => 'Participante Confirmado'
        ];
        header("HTTP/1.0 200 OK");
        return json_encode($data);       
    }
}

?>