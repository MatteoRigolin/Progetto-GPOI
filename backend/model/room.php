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

}
?>