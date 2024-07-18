<?php


//نحوه استفاده به این صورته که شما با ایجاد یک 
//process task
//به دیتابیس خودتون وصل میشین وبعد از فانکشن های موجود عملیات هایی که نیاز دارین رو روی دیتابیس انجام می دین
//در توابع
//fetch
//خروجی به صورت جدول هست

include('../model/crudDatabaceFunc.php');
include('../controller/formInformation.php');

$student = new students($_POST['fname'], $_POST['lname'],$_POST['stdid'],$_POST['stdmeli']);
$useTest = new processInDatabace("localhost","task8","root","");


// $useTest->addtoDatabase($student->get_firstName(),$student->get_lastName(),$student->get_id(),$student->get_melliId(),"salmtest");
// $useTest->fetchAll("salmtest");
// $useTest->fetchOneByLastname("salmtest","kmali");
$useTest->fetchOneById("salmtest",8558);

//وقتی که بخوای از دو تا فانکشن همزمان استفاده کنی یه خطایی میده



//همینو چرا خطا می ده این خطای چیه ؟؟؟؟؟؟؟؟؟؟؟
//میخوای اطلاعات رو بیاری این ور جدول بسازی چرا خطا میده
// echo "<table border=3 cellpadding=3  align=center  cellspacing=0 style='border: solid 3px red;'>";
// echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th><th>melli</th></tr>";

// foreach ($useTest->fetchAll("salmtest") as $value) {

  
//   echo "<tr>";  
//   $constVal = $value['id'];
//   echo"<td> $constVal</td>";

//   $constVal = $value['firstname'];
//   echo"<td> $constVal</td>";

//   $constVal = $value['lastname'];
//   echo"<td> $constVal</td>";

//   $constVal = $value['melli'];
//   echo"<td> $constVal</td>";
//   echo "</tr>";  


// }



