<?php
class Database
{
    //credentials localhost
    private $server_local = "localhost";
    private $user_local = "root";
    private $password_local = "";
    private $db_local = "disco";

    //common credentials
    private $port = "3306";
    public $conn;
    public function connect() //effettua la connessione al server
    {
        try {
            $this->conn = new mysqli($this->server_local, $this->user_local, $this->password_local, $this->db_local, $this->port);
        }
        //la classe mysqli non estende l'interfaccia Throwable e non può essere usata come un'eccezione. 
        catch (Exception $ex) {
            die("Error $ex\n\n");
        }
        return $this->conn;
    }
}

?>