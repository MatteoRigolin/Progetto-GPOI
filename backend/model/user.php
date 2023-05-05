<?php

require __DIR__ . " /../common/errorHandler.php";

set_exception_handler("errorHandler::handleException");
set_error_handler("errorHandler::handleError");

class User
{

    protected $conn;
    public function __construct($db)
    {
        $this->conn = $db;
    }


    function login($email, $pw)
    {
        $sql = sprintf("SELECT email, pw, id
        FROM `user`
        where user_active = 1 ");
        $result = $this->conn->query($sql);
        while ($row = $result->fetch_assoc()) {
            if ($this->conn->real_escape_string($email) == $this->conn->real_escape_string($row["email"]) && $this->conn->real_escape_string($row["pw"]) == $this->conn->real_escape_string($pw)) {
                return $this->conn->real_escape_string($row["id"]);
            }
        }

        return false;
    }

    function registration($email, $pw)
    {
        $sql = sprintf(
            "INSERT INTO user (email, pw, user_active)
        VALUES ('%s', '%s', 1)",
            $this->conn->real_escape_string($email),
            $this->conn->real_escape_string($pw),
        );

        $result = $this->conn->query($sql);
        return $result;
    }
    
}
?>