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
      
      
  require '../model/redbean_php/rb.php';
      
 

  
      $conn = R::setup( "mysql:host=$this->host;dbname=$this->dbname",$this->username, $this->password );
      return $conn;
   }
  
  }