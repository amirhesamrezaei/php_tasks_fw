<?php

//اولین چیز اینه که شما چطوری باید به دیتابیس وصل بشی 
//1

try {
    $conn = new PDO("mysql:host=localhost;dbname=task9", "root", "");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  
  //اگر بخوای یه دیتابیس بسازی تو کدن دستوران زیر اضافه می کنی که اس کیو ال هست
//   $sql = "CREATE DATABASE databasename";
//   $conn->exec($sql);



  //2
  //دستور دوم ساخت یک جدول در دیتابیس شماست با pdo  و sql

// CREATE TABLE people (
//  name TEXT,
//  age, INTEGER,
//  PRIMARY KEY(name));
 echo"<br/>";

// $sql = "CREATE TABLE forTest (
//     id INT(6),
//     firstname VARCHAR(30) ,
//     lastname VARCHAR(30),
//     email VARCHAR(50)
//     )";

//      $conn->exec($sql);
//     echo "Table MyGuests created successfully";



//3
//مرحله بعدی  اینزرت یا درج دیتا داخل جدولی که ساختی هست که با پی دی و اس کیو به شرح زیره

// INSERT INTO اسم جدول(name, اسم ستون) VALUES('Joe', 102);



// $sql = "INSERT INTO forTest (firstname, lastname, email,id)
//   VALUES ('John', 'Doe', 'john@example.com',55)";
//   $conn->exec($sql);
//   echo "New record created successfully";



//حالا اگه بخوایم چندتا رکورد با هم اضافه کنیم شرح زیر هست
// از اینجا به بعد از قابیلت جدید استفاده می کنیم که دستورات 
$stmt = $conn->prepare("INSERT INTO forTest (firstname, lastname, email,id)
VALUES (:firstname, :lastname, :email , :id)");
$stmt->bindParam(':firstname', $firstname);
$stmt->bindParam(':lastname', $lastname);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':id', $id);


// $firstname = "John";
//   $lastname = "Doe";
//   $email = "john@example.com";
//   $stmt->execute();

//   $firstname = "Mary";
//   $lastname = "Moe";
//   $email = "mary@example.com";
//   $stmt->execute();
//   echo "New records created successfully";



//4
//حالا یاد میگیریم چگونه دیتا رو بخونیم از جدوالمون

//SELECT اسم ستون, name FROM اسم جدول;
// SELECT * FROM table;

//این رو تعریف و سپس دستورات اس کی ال داخلش تعریف می کنی
$stmt = $conn->prepare("SELECT id, firstname, lastname , email FROM forTest");
$stmt->execute();
echo"<hr/>";
$stmt->setFetchMode(PDO::FETCH_ASSOC);

// var_dump($stmt->setFetchMode(PDO::FETCH_ASSOC));
// echo"<br/>";
// var_dump($stmt->fetchAll());

echo"<br/>";

// foreach ($stmt->fetchAll() as $value) {

//     echo "<tr>";  
//     $constVal = $value['id'];
//     echo"<td> $constVal</td>";

//     $constVal = $value['firstname'];
//     echo"<td> $constVal</td>";

//     $constVal = $value['lastname'];
//     echo"<td> $constVal</td>";
//     echo"<hr/>";

 
//   }

echo"<hr/>";


//5
// استفاده از شرط برای خواندن داده ها

//SELECT age, name FROM people WHERE age > 10;
//SELECT age, name FROM people WHERE age > AND age < 20;
//SELECT age, name FROM people WHERE age > 10 OR name = 'Joe';


$stmt = $conn->prepare("SELECT id, firstname, lastname ,email FROM forTest WHERE lastname='Doe' and id = 55");
$stmt->execute();
var_dump($stmt->fetchAll());


//6
//دستورات مرتب سازی 

//SELECT name, age FROM people ORDER BY age DESC;
//SELECT name, age FROM people ORDER BY name ASC, age DESC

echo"<br/>";
$stmt = $conn->prepare("SELECT id, firstname, lastname FROM forTest ORDER BY lastname");
  $stmt->execute();
  var_dump($stmt->fetchAll());


  //7
//دستور حذف
//DELETE FROM people;
// DELETE FROM people WHERE name = 'Joe';

  $sql = "DELETE FROM forTest WHERE firstname='John'";
  $conn->exec($sql);
  //حذف همه رکورها
  //DROP TABLE people;


  //8
  //اپدیت یه داده بروزرسانی یه داده
  //UPDATE people SET name = 'Joe', age = 101;
//   UPDATE people SET name = 'Joe', age = 101 WHERE name = 'James';
//UPDATE people SET name = 'Joe', age = 101 WHERE (name = 'James' AND age = 100) OR name = 'Ryan'
echo"<hr/>";
$sql = "UPDATE forTest SET lastname='rozita' WHERE firstname='Mary'";
$stmt = $conn->prepare($sql);
$stmt->execute();
//دستور پایین تعداد سطرهایی که تغییر می کنه رو بهت میده 
var_dump($stmt->rowCount());



//ساخت جدول دوم برای تست
// $sql = "CREATE TABLE forTest2 (
//     firstname VARCHAR(30) ,
//     price VARCHAR(50)
//     )";

//      $conn->exec($sql);
//     echo "Table forTest2 created successfully";
// $stmt = $conn->prepare("INSERT INTO forTest2 (firstname,price )
// VALUES (:firstname, :price)");
// $stmt->bindParam(':firstname', $firstname);
// $stmt->bindParam(':price', $price);


// $firstname = "John";
// $price = 55;
// $stmt->execute();






//9
//دستور جوین برای الحاق داده های مرتبط که در چند جدول ذخیره شده اند 
//جدول دوم به جدول اول ملحق می شود و تعیین می شود که داده ها باهم چگونه در ارتباطند

//SELECT age, name, height FROM people LEFT JOIN جدولی که بهش ملحق بشه USING (name);
// توضیحات داخل سایت فرادرس

//SELECT age, name, height FROM people LEFT JOIN heights ON (namea = nameb);



$sql = "SELECT firstname, lastname, email FROM forTest FULL JOIN forTest2 USING (firstname)";
$stmt = $conn->prepare($sql);
$stmt->execute();






//10
//دستور نام مستعار
//این دستور برای تغییر نام یک جدول استفاده می‌شود.
//در واقع این تغییر نام بیشتر شبیه یک نام مستعار است، چون این نام جدید صرفاً درون تراکنشی از پایگاه داده که شما اجرا کرده‌اید، وجود دارد. در ادامه مثالی برای استفاده آن ذکر کرده‌ایم:
//SELECT A.Age FROM people A;
//رای نام مستعار می‌توان از هر نامی استفاده کرد؛ اما ترجیح داده می‌شود که از حروف الفبا استفاده شود. پیش از نام ستون، این نام مستعار به صورت پیشوند استفاده می‌شود. نام مستعار
//بلافاصله پس از آنکه اعلان شود به جدول انتساب می‌یابد. دستور فوق دقیقاً معادل دستور زیر است
//SELECT people.Age FROM people;
//SELECT A.Age, A.Name, B.Age, B.Name FROM staff A, customers B;



//11
//دستور Union (ترکیب)
//یک دستور بسیار عالی است. این دستور امکان ترکیب ردیف‌ها با یکدیگر را می‌دهد.
//برخلاف دستور joins
//که ستون‌های مطابق را به هم الحاق می‌کرد، دستور
//ی‌تواند ردیف‌های نامرتبط را به این شرط که تعداد و نام ستون یکسانی داشته باشند، به همدیگر ملحق کند. نحوه استفاده از آن در مثال زیر مشخص شده است:
//SELECT age, name FROM customers
//UNION SELECT age, name FROM staff;
//را می‌توان نوعی ترکیب نتایج دو کوئری دانست
//نتایجی را بازمی‌گرداند که یک ردیف منحصربه‌فرد بین دو کوئری وجود داشته باشد.
//می‌توان از عبارت “UNION ALL” برای بازیابی همه داده‌ها، صرف‌نظر از موارد تکراری استفاده کرد:
//SELECT age, name FROM customers
//UNION ALL
//SELECT age, name FROM staff;
//داده‌های بازیابی شده ممکن است ترتیب متفاوتی داشته باشند
