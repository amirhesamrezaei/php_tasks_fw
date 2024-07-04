<?php

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "";

try {
  $conn = new PDO("mysql:host=localhost;dbname=task7", "root","");


  // $sql = "CREATE TABLE MyGuests (
  //   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  //   firstname VARCHAR(30) NOT NULL,
  //   lastname VARCHAR(30) NOT NULL,
  //   email VARCHAR(50),
  //   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  //     )";

  //   $conn->exec($sql);

    


  $stmt = $conn->prepare("INSERT INTO dataInfo (firstname, lastname, stdid, stdmeli)
  VALUES (:firstname, :lastname, :stdid , :stdmeli)");
  $stmt->bindParam(':firstname', $firstname);
  $stmt->bindParam(':lastname', $lastname);
  $stmt->bindParam(':stdid', $stdid);
  $stmt->bindParam(':stdmeli', $stdmeli);


  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $stdid = $_POST['stdid'];
  $stdmeli = $_POST['stdmeli'];
  $stmt->execute();

  

  echo "New records created successfully";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


