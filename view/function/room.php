<?php

function getArchiveRoom()
{

    $url = 'http://localhost/Progetto-GPOI/backend/controller/room/getArchiveRoom.php';

    $json_data = file_get_contents($url);

    if ($json_data != false) {
        $decode_data = json_decode($json_data, $assoc = true);
        $room_data = $decode_data;
        $rooms_arr = array();
        if (!empty($room_data)) {
            foreach ($room_data as $room) {
                $room_record = array(
                    'id' => $room['id'],
                    'capacity' => $room['capacity'],
                    'room_description' => $room['room_description'],
                );
                array_push($rooms_arr, $room_record);
            }
            return $rooms_arr;
        } else {
            return -1;
        }
    } else {
        return -1;
    }
}


function createRoom($data)
{
    $url = 'http://localhost/Progetto-GPOI/backend/controller/room/createRoom.php';

    $curl = curl_init($url); //inizializza una nuova sessione di cUrl
    //Curl contiene il return del curl_init 

    curl_setopt($curl, CURLOPT_URL, $url); // setta l'url 
    curl_setopt($curl, CURLOPT_POST, true); // specifica che è una post request
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // ritorna il risultato come stringa


    $headers = array(
        "Content-Type: application/json",
        "Content-Lenght: 0",
    );


    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // setta gli headers della request

    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));

    $responseJson = curl_exec($curl); //eseguo

    curl_close($curl); //chiudo sessione
    $response = json_decode($responseJson); //decodifico la response dal json
    if ($response->message == true) //response == true vuol dire sessione senza errori
    {
        return 1;
    } else {
        return -1;
    }
}

?>