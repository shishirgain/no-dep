<?php
namespace App\Models\Helper;
use PDO;
use PDOException;

class Connection
{
    protected $db;
    protected $server;
    protected $user;
    protected $password;
    protected $connection;

    function __construct($db, $server, $user, $password)
    {
        $this->db = $db;
        $this->server = $server;
        $this->user = $user;
        $this->password = $password;
        $this->connect();
    }
    
    public function get_connection()
    {
        return $this->connection;
    }

    public function connect()
    {
        try {
            $this->connection = new PDO("mysql:host=$this->server;dbname=$this->db", $this->user, $this->password);
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }
}