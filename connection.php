<?php

class Database
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO
            (
                'mysql:host=127.0.0.1;dbname=image_upload',
                'admin',
                'welcome'
            );
        }
        catch(PDOException $e){
            // die("connection error");
           echo $e->getMessage();
        }
    }

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute($statement);

        return $statement;
    }
}

