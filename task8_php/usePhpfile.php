<?php


//نحوه استفاده به این صورته که شما با ایجاد یک 
//process task
//به دیتابیس خودتون وصل میشین وبعد از فانکشن های موجود عملیات هایی که نیاز دارین رو روی دیتابیس انجام می دین
//در توابع
//fetch
//خروجی به صورت جدول هست

include('./task8.php');
$use = new processTask("localhost","task8","root","");
// $use->creatTables("formInformation");
$use->addtoDatabase($_POST['fname'],$_POST['lname'],$_POST['stdid'],$_POST['stdmeli'],"formInformation");
$use->fetchAll("formInformation");
// $use->fetchOneById("testTable",25);