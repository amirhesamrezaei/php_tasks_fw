<?php
include('../model/conToDatabace.php');


class processInDatabace extends connectToDatabase{



    public function addToDatabase($fname, $lname , $id , $meli ,$tabelName){

      $this->connectdatabase();


      //استفاده از orm
      $tablePropertiy = R::dispense( $tabelName );
      $tablePropertiy->firstname = $fname ;
      $tablePropertiy->lastname = $lname;
      $tablePropertiy->studentId =  $id;
      $tablePropertiy->meliId = $meli ;
  
      $id = R::store( $tablePropertiy );

    }

    public function fetchAll($tablename){

        $this->connectdatabase();
        $information =  R::findAll($tablename); 

       echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
       echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";
      
            
        foreach ($information as $value) {

        echo "<tr>";  
        $constVal = $value['studentId'];
        echo"<td> $constVal</td>";

        $constVal = $value->firstname;
        echo"<td> $constVal</td>";


        $constVal = $value['lastname'];
        echo"<td> $constVal</td>";

        $constVal = $value->meliId;
        echo"<td> $constVal</td>";
        echo "</tr>";  


     }

    }




    public function fetchOneByLastname($tablename,$lastname){

      $this->connectdatabase();
      $information =  R::findAll($tablename); 

     echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
     echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";
    
          
      foreach ($information as $value) {

        if($value['lastname']==$lastname){


            echo "<tr>";  
            $constVal = $value['studentId'];
            echo"<td> $constVal</td>";

            $constVal = $value->firstname;
            echo"<td> $constVal</td>";


            $constVal = $value['lastname'];
            echo"<td> $constVal</td>";

            $constVal = $value->meliId;
            echo"<td> $constVal</td>";
            echo "</tr>";  


        }

      
   }
   
  }


  public function fetchOneById($tablename,$id){

    $this->connectdatabase();
    $information =  R::findAll($tablename); 

   echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
   echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";
  
        
    foreach ($information as $value) {

      if($value['studentId']==$id){


          echo "<tr>";  
          $constVal = $value['studentId'];
          echo"<td> $constVal</td>";

          $constVal = $value->firstname;
          echo"<td> $constVal</td>";


          $constVal = $value['lastname'];
          echo"<td> $constVal</td>";

          $constVal = $value->meliId;
          echo"<td> $constVal</td>";
          echo "</tr>";  


      }

    
 }
 
}




  
















    // public function fetchOneByLastname($tablename,$lastname){

    //   $conn = $this->connectdatabase();

    //   $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE lastname='$lastname'");
    //   $stmt->execute();

      
    //   return $stmt->fetchAll();

    //   }
    

    // public function fetchOneById($tablename,$Id){

    //   $conn = $this->connectdatabase();

    //   $stmt = $conn->prepare("SELECT id , firstname, lastname , melli FROM $tablename WHERE id=$Id");
    //   $stmt->execute();

    //   return $stmt->fetchAll();

    // }


}
