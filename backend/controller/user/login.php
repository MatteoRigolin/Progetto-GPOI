<?php
require("../../common/connect.php");
require("../../model/user.php");

header("Content-type: application/json; charset=UTF-8");

$data = json_decode(file_get_contents("php://input"));

if (empty($data->email) || empty($data->pw)) {
    http_response_code(400);
    echo json_encode(["message" => "Fill every field"]);
    die();
}

$db = new Database();
$conn = $db->connect();
$user = new User($conn);

$result = $user->login($data->email, $data->pw);

if ($result != false) {
    http_response_code(200);
    echo json_encode(["response" => true, "userID" => $result]);
} else {
    http_response_code(401);
    echo json_encode(["response" => false]);
}
die();
?>