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

    $query = "INSERT INTO participante (nombre, categoria, email, country_long, evento, confirmado) VALUES ('$participante_aka', '$participante_categoria', '$participante_email', '$participante_country', '$participante_evento', '$participante_confirmado');" ;
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

?>