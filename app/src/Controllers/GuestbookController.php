<?php

namespace App\Controllers;

use App\Config;
use PDO;

class GuestbookController
{
    public function getAll()
    {
        
        try{
            $connectionString = "mysql:host=" . Config::DB_SERVER_NAME . ";dbname=" . Config::DB_NAME . ";";

            $connection = new PDO(dsn: $connectionString, username: Config::DB_USERNAME, password: Config::DB_PASSWORD);

            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Database connection established successfully!";
            
            $result = $connection->query(query: "SELECT id, posted_at, name, email, message FROM posts");
            $posts = $result->FetchAll(mode: PDO::FETCH_ASSOC);
            //var_dump(value: $posts);
            require(__DIR__ . '/../Views/guestbook.php');
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    
    public function submitForm($name, $email, $message)
    {
        $var_dump = var_dump("POST");
        echo $var_dump;
    }
}