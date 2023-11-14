<?php
namespace App\Models\Helper;
require __DIR__ . '/../../../helper/database.php';

class SQLExecutor
{
    protected $schema;
    function __construct($schema)
    {
        $this->schema = $schema;
    }
    public function getShema()
    {
        return $this->schema;
    }
    
    public function execute()
    {
        global $db_connontion;
        $connection =$db_connontion->get_connection();
        $isSuccess = $connection->query($this->schema);
        // if ($isSuccess === TRUE) {
        //     echo "execution successfully";
        // } else {
        //     echo "Error: " . $connection->error;
        // }
    }
}
