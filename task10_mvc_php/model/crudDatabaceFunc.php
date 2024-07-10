<?php
include('../model/conToDatabace.php');


class processInDatabace extends connectToDatabase{



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


    public function addToDatabase($fname, $lname , $id , $meli,$tabelName){

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

      return $stmt->fetchAll();


    }



    public function fetchOneByLastname($tablename,$lastname){

      $conn = $this->connectdatabase();

      $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE lastname='$lastname'");
      $stmt->execute();

      
      return $stmt->fetchAll();

      }
    

    public function fetchOneById($tablename,$Id){

      $conn = $this->connectdatabase();

      $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE id=$Id");
      $stmt->execute();

      return $stmt->fetchAll();

    }


}
