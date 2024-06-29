<?php

class dataBase{

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

class connectToDatabase extends dataBase{

  protected function connectdatabase(){ 

    $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
    return $conn;
 }

}


class processTask extends connectToDatabase{


    public function creatTables($tablenName){

    $sql = "CREATE TABLE $tablenName (
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    id INT(6)  ,
    melli INT(6)
      )";
    $conn = $this->connectdatabase();
    $conn->exec($sql);


    }


    public function addtoDatabase($fname, $lname , $id , $meli,$tabelName){

      $conn = $this->connectdatabase();
      $stmt = $conn->prepare("INSERT INTO $tabelName (firstname, lastname, id, melli)
      VALUES (:firstname, :lastname, :id , :melli)");
      
      $stmt->bindParam(':firstname', $fname);
      $stmt->bindParam(':lastname', $lname);
      $stmt->bindParam(':id', $id);
      $stmt->bindParam(':melli', $meli);
      $stmt->execute();

    }

    public function fetchAll($tablename){

      $conn = $this->connectdatabase();

      $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename");
      $stmt->execute();


      echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
      echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";


      foreach ($stmt->fetchAll() as $value) {

        
        echo "<tr>";  
        $constVal = $value['id'];
        echo"<td> $constVal</td>";

        $constVal = $value['firstname'];
        echo"<td> $constVal</td>";

        $constVal = $value['lastname'];
        echo"<td> $constVal</td>";

        $constVal = $value['melli'];
        echo"<td> $constVal</td>";
        echo "</tr>";  


      }
    }



    public function fetchOneByLastname($tablename,$lastname){

      $conn = $this->connectdatabase();

      $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE lastname='$lastname'");
      $stmt->execute();

      echo "<hr>";
      
      foreach ($stmt->fetchAll() as $value) {

        echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";
  
        echo "<tr>";  
        $constVal = $value['id'];
        echo"<td> $constVal</td>";

        $constVal = $value['firstname'];
        echo"<td> $constVal</td>";

        $constVal = $value['lastname'];
        echo"<td> $constVal</td>";

        $constVal = $value['melli'];
        echo"<td> $constVal</td>";
        echo "</tr>";  
        echo"<hr>";



      }
    }

    public function fetchOneById($tablename,$Id){

      $conn = $this->connectdatabase();

      $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE id=$Id");
      $stmt->execute();

      
      foreach ($stmt->fetchAll() as $value) {

        echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
        echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";
  
        echo "<tr>";  
        $constVal = $value['id'];
        echo"<td> $constVal</td>";

        $constVal = $value['firstname'];
        echo"<td> $constVal</td>";

        $constVal = $value['lastname'];
        echo"<td> $constVal</td>";

        $constVal = $value['melli'];
        echo"<td> $constVal</td>";
        echo "</tr>";  
        echo"<hr>";

      }
    }


}




