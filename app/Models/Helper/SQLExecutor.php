<?php
namespace App\Models\Helper;
class SQLExecutor
{
    protected $schema;
    protected $connection;

    function __construct($schema)
    {
        $this->connection = $GLOBALS['db_connection'];
        $this->schema = $schema;
    }
    public function getShema()
    {
        return $this->schema;
    }

    public function execute()
    {
        $isSuccess = $this->connection->query($this->schema);

        if ($isSuccess) {
            echo "execution successfully\n";
        } else {
            echo "Error: " . $this->connection->error;
        }
    }
}
