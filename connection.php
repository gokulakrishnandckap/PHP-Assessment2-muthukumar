<?php

class Database
{
    public $db;
    public $con;
    public function __construct()
    {
        try
        {
           $this->db = new PDO
            (
                'mysql:host=127.0.0.1;""',
                'admin',
                'welcome'
            );



        }
        catch(PDOException $e)
        {
            die("connection failed");
        }


    }
    // public function conn()
    // {
    //     $this->con = new PDO
    //     (
    //         'mysql:host=127.0.0.1;dbname='.$dbname,
    //         'admin',
    //         'welcome'
    //     );
    // }
}




?>