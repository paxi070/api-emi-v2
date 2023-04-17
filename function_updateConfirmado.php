<?php
 
require 'conexion.php';

function updateParticipanteConfirmado($participanteInput, $participanteParams)
{
    global $conn;

    $id = mysqli_real_escape_string($conn, $participanteParams['id']);

    $query = "UPDATE participante SET confirmado = 1 WHERE id = '$id'" ;
    $result = mysqli_query($conn, $query);

    if($result) {
        if (mysqli_num_rows($query_run) > 0) {
            $data = [
                'status' => 200,
                'message' => 'Participante Confirmado'
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
        }
    }
}

?>