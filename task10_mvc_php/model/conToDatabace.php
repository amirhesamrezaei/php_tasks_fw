<?php

class baceModel{

    protected  $host ;
    protected $dbname;
    protected  $username ; 
    protected $password ;
  
  
    function __construct($host,$dbname,$username,$password) {
      $this -> host = $host;
      $this -> dbname = $dbname;
      $this -> username = $username;
      $this -> password = $password;
  }
     
  }

  class connectToDatabase extends baceModel{

    protected function connectdatabase(){ 
  
      $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      return $conn;
   }
  
  }