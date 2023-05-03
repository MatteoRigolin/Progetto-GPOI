<?php
require("../../common/connect.php");
require("../../model/room.php");

header("Content-type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

if (empty($data->capacity) || empty($data->room_description)) {
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
    die();
}

$db = new Database();
$conn = $db->connect();

$room = new Room($conn);

$result = $room->createRoom($data->capacity, $data->room_description);

if ($result != false) {
    http_response_code(200);
    echo json_encode(["message" => true]);
} else {
    http_response_code(401);
    echo json_encode(["message" => false]);
}
die();
?>