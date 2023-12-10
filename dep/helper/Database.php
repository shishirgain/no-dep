<?php
include_once __DIR__ . '/../../app/Models/Helper/Connection.php';

use App\Models\Helper\Connection;

class Database
{
    private static $connection = null;

    protected function __construct() {}
    
    public static function connect($dbname, $servername, $username, $password){
        if (!isset(self::$connection)) {
            $conn = new Connection($dbname, $servername, $username, $password);
            self::$connection = $conn->get_connection();
        }
        return self::$connection;
    }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
}
