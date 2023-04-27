<?php
 
require 'conexion.php';

function getParticipantesEventoId($eventoInput, $eventoParams)
{
    global $conn;

    if(!isset($eventoParams['id']))
    {
        return 'FALTA EVENTO ID';
    }
    else
    {
        $evento_id = mysqli_real_escape_string($conn, $eventoParams['id']);

        $query = "SELECT * FROM participante WHERE evento = '$evento_id' ORDER BY numero";
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            if (mysqli_num_rows($query_run) > 0) {
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'Participantes Fetched',
                    'data' => $res
                ];
                header("HTTP/1.0 200 OK");
                return json_encode($data);
            }
        }
    }  
}

?>