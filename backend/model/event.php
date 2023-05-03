<?php
class Event
{
    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }

    function getArchiveEvent()
    {
        $sql = "SELECT e.id, e.name, e.date_event, e.start_hour, e.end_hour, e.description, r.room_description 
        FROM `event` e 
        LEFT JOIN room r ON r.id = e.id_room 
        WHERE e.event_active = 1;
                ";
        return $sql;
    }

}
?>