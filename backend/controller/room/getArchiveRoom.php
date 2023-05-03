<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once dirname(__FILE__) . '/../../common/connect.php';
include_once dirname(__FILE__) . '/../../model/room.php';


$db = new Database();
$conn = $db->connect();

$room = new Room($conn);
$query = $room->getArchiveRoom();
$result = $conn->query($query);

if (mysqli_num_rows($result) > 0) {
    $rooms_arr = array();
    while ($row = $result->fetch_assoc()) {
        extract($row);
        $room_arr = array(
            'id' => $id,
            'capacity' => $capacity,
            'room_description' => $room_description,      
        );
        array_push($rooms_arr, $room_arr);
    }
    http_response_code(200);
    echo (json_encode($rooms_arr, JSON_PRETTY_PRINT));
} else {
    http_response_code(400);
    echo json_encode(["message" => "Non sono stati trovati eventi"]);
}

$conn->close();
die();
?>