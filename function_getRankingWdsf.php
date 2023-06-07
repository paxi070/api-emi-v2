<?php
 
require 'conexion.php';

function rankingWdsf($participanteInput, $participanteParams)
{
    global $conn;

    $participante_categoria = mysqli_real_escape_string($conn, $participanteParams['categoria']);
    $participante_evento = mysqli_real_escape_string($conn, $participanteParams['evento']);

    if(!isset($participanteParams['categoria']) || !isset($participanteParams['evento']))
    {
        return 'FALTA DATOS';
    }
    else
    {
        $query = "SELECT participante, sum(notanumerica) FROM notaWDSF WHERE categoria = '$participante_categoria' and evento = '$participante_evento' group by participante_id_evento order by 2 desc";
        //$query = "INSERT INTO participante (nombre, categoria, email, country_long, evento, confirmado, numero) VALUES ('$participante_aka', '$participante_categoria', '$participante_email', '$participante_country', $participante_evento, $participante_confirmado, $participante_numero);" ;
        $query_run = mysqli_query($conn, $query);

        if($query_run) {
            if (mysqli_num_rows($query_run) > 0) {
                $res = mysqli_fetch_all($query_run, MYSQLI_ASSOC);

                $data = [
                    'status' => 200,
                    'message' => 'Ranking Fetched',
                    'data' => $res
                ];
                header("HTTP/1.0 200 OK");
                return json_encode($data);
            }
        } 
    }

?>