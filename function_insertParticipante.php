<?php
 
require 'conexion.php';

function insertParticipante($participanteInput, $participanteParams)
{
    global $conn;

    $participante_aka = mysqli_real_escape_string($conn, $participanteParams['aka']);
    $participante_categoria = mysqli_real_escape_string($conn, $participanteParams['categoria']);
    $participante_email = mysqli_real_escape_string($conn, $participanteParams['email']);
    $participante_country = mysqli_real_escape_string($conn, $participanteParams['country']);
    $participante_evento = mysqli_real_escape_string($conn, $participanteParams['evento']);
    $participante_confirmado = 1;
    $participante_numero = 1;

    if(!isset($participanteParams['aka']) ||
    !isset($participanteParams['categoria']) ||
    !isset($participanteParams['email']) ||
    !isset($participanteParams['country']) ||
    !isset($participanteParams['evento']))
    {
        return 'FALTA DATOS PARTICIPANTE';
    }
    else
    {
        $query = "INSERT INTO participante (nombre, categoria, email, country_long, evento, confirmado, numero) VALUES ('$participante_aka', '$participante_categoria', '$participante_email', '$participante_country', $participante_evento, $participante_confirmado, $participante_numero);" ;
        $result = mysqli_query($conn, $query);
    
        if($result) {
            $data = [
                'status' => 200,
                'message' => 'Participante Insertado'
            ];
            header("HTTP/1.0 200 OK");
            return json_encode($data);       
        }
    }     
}

?>