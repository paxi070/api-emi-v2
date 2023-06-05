<?php
 
require 'conexion.php';

function updateNota($participanteInput, $participanteParams)
{
    global $conn;

    $id_participante_evento = mysqli_real_escape_string($conn, $participanteParams['id_participante_evento']);
    $juez = mysqli_real_escape_string($conn, $participanteParams['juez']);
    $nota = (int)mysqli_real_escape_string($conn, $participanteParams['nota']);
    $evento = mysqli_real_escape_string($conn, $participanteParams['evento']);

    if(!isset($participanteParams['id_participante_evento']) ||
    !isset($participanteParams['juez']) ||
    !isset($participanteParams['nota']) ||
    !isset($participanteParams['evento']))
    {
        return 'FALTA DATOS NOTA';
    }
    else
    {
        $query = "UPDATE notaWDSF SET notanumerica = '$nota' WHERE participante_id_evento = '$id_participante_evento' and juez = '$juez' and  evento = '$evento'" ;
        $result = mysqli_query($conn, $query);

        if($result) {
            $data = [
                'status' => 200,
                'message' => 'Nota Updateada'
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);       
        }
    }     
}

?>