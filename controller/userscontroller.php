<?php

require_once 'model/usermodel.php';

class UserController
    {

    private $userModel;

    //magic method construct
    public function __construct()
    {
        $this->userModel = new UserModel();
    }



    public function view() 
    {

        require "view/create.php";
    }



    public function showing() 
    { 
       $alldbnames =  $this->userModel->showing();
        require "view/create.php";

    }

    public function views() 
    {
       
        require "view/create.php";
      

    }
    public function create() 
    {
        // var_dump($_POST);

        $this->userModel->create($_POST);


    }

    public function createtabel($create) 
    {

       $this->userModel->insertcolumns($_POST);

 
    }

    public function insertValue($datas) {

       $this->userModel->insertValue($datas);
   

    }

    public function insertrow() {
        $alldbnames =  $this->userModel->showing();
     
        require "view/create.php";


    }
    

       public function tableListUsingAjax(){

        $tables = array_keys($_REQUEST)[0];
        // var_dump($tables);

        $this->userModel->tableList($tables);
        }


       public function showcolumn(){

        $tables = array_values($_REQUEST)[0];
        $table = array_values($_REQUEST)[1];

        $this->userModel->columnlist($tables,$table);
        }



}
