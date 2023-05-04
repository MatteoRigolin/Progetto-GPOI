<?php

function getArchiveEvent()
{

    $url = 'http://localhost/Progetto-GPOI/backend/controller/event/getArchiveEvent.php';

    $json_data = file_get_contents($url);

    if ($json_data != false) {
        $decode_data = json_decode($json_data, $assoc = true);
        $event_data = $decode_data;
        $events_arr = array();
        if (!empty($event_data)) {
            foreach ($event_data as $event) {
                $event_record = array(
                    'id' => $event['id'],
                    'name' => $event['capacity'],
                    'date_event' => $event['date_event'],
                    'start_hour' => $event['start_hour'],
                    'end_hour' => $event['end_hour'],
                    'description' => $event['description'],
                    'room_description' => $event['room_description'],
                );
                array_push($events_arr, $event_record);
            }
            return $events_arr;
        } else {
            return -1;
        }
    } else {
        return -1;
    }
}


function createEvent($data)
{
    $url = 'http://localhost/Progetto-GPOI/backend/controller/event/createEvent.php';

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