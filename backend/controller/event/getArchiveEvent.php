<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../common/connect.php';
include_once dirname(__FILE__) . '/../../model/event.php';


$db = new Database();
$conn = $db->connect();

$event = new Event($conn);
$query = $event->getArchiveEvent();
$result = $conn->query($query);

if (mysqli_num_rows($result) > 0) {
    $events_arr = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $event_arr = array(
            'id' => $id,
            'name' => $name,
            'date_event' => $date_event,
            'start_hour' => $start_hour,
            'end_hour' => $end_hour,  
            'description' => $description,   
            'room_description' => $room_description,      
        );
        array_push($events_arr, $event_arr);
    }
    http_response_code(200);
    echo (json_encode($events_arr, JSON_PRETTY_PRINT));
} else {
    http_response_code(400);
    echo json_encode(["message" => "Non sono stati trovati eventi"]);
}

$conn->close();
die();
?>