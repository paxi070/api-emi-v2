<?php
 
require 'conexion.php';

function updateParticipanteConfirmado($id)
{
    global $conn;

    $query = "UPDATE participante SET confirmado = 1 WHERE evento = 26 and id = " + $id;
    $query_run = mysqli_query($conn, $query);

    if($query_run) {
        if (mysqli_num_rows($query_run) > 0) {
            $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'Participante Confirmado',
                'data' => $res
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);
        }
    }
}

?>