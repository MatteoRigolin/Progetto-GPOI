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
        $sql = "SELECT name, `role`,  team
              FROM `event` e
              WHERE 1=1
              order by quotation DESC;
                ";
        return $sql;
    }

}
?>