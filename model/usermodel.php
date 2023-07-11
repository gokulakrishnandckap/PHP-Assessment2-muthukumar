<?php

require "connection.php";



class UserModel extends Database{
   
    //create function to create the databse
    public function create($data) {

        $name = $data['DBname'];
        $con = new PDO
        (
            'mysql:host=127.0.0.1',
            'admin',
            'welcome'
        );

        $query = "CREATE DATABASE $name";
        $con->query($query);
        $_SESSION["created"] = "Database created successfully";
        header("location:/adds");
    
    }
    //showing function to show all database name in PHPmyadmin

    public function showing() {
        $sql = "SHOW DATABASES";
        $val = $this->db->query($sql);
        $all=$val->fetchAll();
        return $all;
  
  }

  //insertcolumns function to create the table and adding the columns in the selected database

    public function insertcolumns($data){


      $db = $data["db"];
      $tableName = $data["tablename"];
      $colname = $data["colname"];
      $type = $data["type"];
            $con = new PDO
        (
            'mysql:host=127.0.0.1;dbname='.$db,
            'admin',
            'welcome'
        );
      $statement = $con->prepare("CREATE TABLE $tableName(id int auto_increment,primary key (id));");
      $statement->execute();
      
      for ($i=0; $i <count($colname); $i++) {
        $con->query("USE $db; ALTER TABLE $tableName ADD COLUMN $colname[$i] $type[$i]");
    }
    $_SESSION["created"] = "Table created successfully";
    header("location:/tables");

        
        


    }



      //tablelist function to send backend datad to frontend

    public function tableList($data){

      // var_dump($data);
          $result = "SHOW TABLES FROM $data"; 
          $row =  $this->db->prepare($result);
          $row->execute();
          $details = $row->fetchAll();
          // var_dump($details);
          $allData = [];
          foreach($details as $detail){
              $allData[] = $detail['Tables_in_'.$data];
              // var_dump($detail);

          }
         

          echo  json_encode($allData);




  }


 //columnlist function to send backend datad to frontend

  public function columnlist($db,$tablename){



   $con = new PDO
        (
            'mysql:host=127.0.0.1;dbname='.$db,
            'admin',
            'welcome'
        );

      $result = "SHOW COLUMNS FROM $tablename"; 

        $rows =  $con->prepare($result);
        $rows->execute();
        $details = $rows->fetchAll();
        $allData = [];
        $key;
        foreach($details as $key=>$detail){
     
        $allData[$detail["Field"]] = $detail["Type"];
       


        }

        echo  json_encode($allData);




}

//insertValue function to insert the values dynamically in the selected database and table


  public function insertValue($data)
  {
    // var_dump($data);
    $db = $data["databaseName"];
    $tables = $data["table"];
    unset($data["databaseName"]);
    unset($data["table"]);

    $con = new PDO
    (
        'mysql:host=127.0.0.1;dbname='.$db,
        'admin',
        'welcome'
    );

    $key = array_keys($data);

    $val = array_values($data);

        $sql = "INSERT INTO $tables (" . implode(', ', $key) . ") "
        . "VALUES ('" . implode("', '", $val) . "')";
    $con->query($sql);

  }






  
}