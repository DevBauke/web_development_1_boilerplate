<?php

namespace App\Repositories;

use PDO;
use App\Config;

class BaseRepository
{
    protected PDO $connection;

    public function __construct()
    {
            $connectionString = "mysql:host=" . Config::DB_SERVER_NAME . ";dbname=" . Config::DB_NAME . ";charset=utf8mb4";
            $this->connection = new PDO(dsn: $connectionString, username: Config::DB_USERNAME, password: Config::DB_PASSWORD);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

?>