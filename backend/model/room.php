<?php
class Room
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function getArchiveRoom()
    {
        $sql = "SELECT id, capacity, room_description 
        FROM room 
        WHERE room_active = 1;
                ";
        return $sql;
    }

    function createRoom($capacity, $room_description)
    {
        $sql = "INSERT INTO room (capacity, room_description, room_active)
                VALUES ('$capacity', '$room_description', 1); 
                ";

        $result = $this->conn->query($sql);
        return $result;
    }

}
?>