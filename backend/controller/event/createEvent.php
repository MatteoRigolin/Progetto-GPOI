<?php
require("../../common/connect.php");
require("../../model/event.php");

header("Content-type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

if (empty($data->name) || empty($data->date_event) || empty($data->start_hour) || empty($data->end_hour) || empty($data->description) || empty($data->id_room)) {
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
    die();
}

$db = new Database();
$conn = $db->connect();

$event = new Event($conn);

$result = $event->createEvent($data->name, $data->date_event, $data->start_hour, $data->end_hour, $data->description, $data->id_room);

if ($result != false) {
    http_response_code(200);
    echo json_encode(["message" => true]);
} else {
    http_response_code(401);
    echo json_encode(["message" => false]);
}
die();
?>