<?php


$inArray = array(8,7,6,5,4,3,2,1,0,78);
$asArray = array ( "car" => " benz", "year" => "2014", "girboxes" => "auto");
$arr = [58 , "john" , false ];
$newArr = [];


var_dump($inArray) ;
echo "<br>";
echo  "number of array" . count($inArray);
echo "<br>";
var_dump($asArray) ;
echo "<br>";
echo  "number of array" . count($asArray);
echo "<br>";
var_dump($arr) ;
echo "<br>";
echo  "number of array" . count($arr);
echo "<hr>";



//چرخیدن رو اعضای ارایه 
//این نکته که اگر در حلقه اول & نباشه خود ارایه اصلی تغییر نمی کنه
foreach($inArray as &$val) {
    $val = $val + 1 ;
    echo $val ;
    echo "<br>";
}
echo "<hr>";
foreach($asArray as $key => $val) {
    echo $val ;
    echo "<br>";
}
echo "<hr>";
// اضافه کردن ایتم به ارایه با دستور 
 array_push($newArr,"new item");

function addtoarray($newItem){

    array_push($newArr,"new item");

}


 // با دستور بالا شما می تونی چند مقدار درجا اضافه کنی
 var_dump($newArr) ;
 echo "<br>";
 $newArr[] = "new item 2";
 var_dump($newArr) ;
 echo "<br>";
 $asArray["plus item"] = "new item3";
 var_dump($asArray) ;
 echo "<hr>";
 //اضافه کردن چند مقدار واسه ارایه انجمنی با دستور زیر امکان پذیره 
 $asArray += ["test1" => "1" , "test2" => "2","test3" => "3","test4" => "4"];
 var_dump($asArray) ;
 echo "<hr>";

 
 //خذف کردن یک یا چند ایتم در ارایه ایندکسی
 array_splice($inArray,0,2);
  //از خونه صفرم شروع کنه و دو خونه رو حذف کنه
  var_dump($inArray);
  echo "<hr>";

  function deleteitemfromkey($Item){

    unset($asArray["$Item"]);

}

  //حذف کردن یک یا چند ایتم در ارایه انجمنی 
  unset($asArray["year"]);
  var_dump($asArray);
  echo "<hr>";
  unset($asArray["year"], $asArray["car"]);
  var_dump($asArray);
  echo "<br>";
  echo "<hr>";


  foreach($arr as $key => $val) {
    if($val == "john")
    {

        echo "find element in key" . $key;
    }
    echo "<br>";
}
echo "<hr>";


//extract the keys from the array
// کلید های ارایه رو بر میگردونه به صورت ارایه 
//می تونی پارامتر دوم مقدار بدی بهش و کلید رو بهت برگردونه
 var_dump(array_keys($arr));
 echo "<br>";
 var_dump(array_keys($inArray));
 echo "<br>";
 var_dump(array_keys($asArray));
 echo "<hr>";


 function extractTheKeysFromTheArray($arrayName){

    var_dump(array_keys($arrayName));
    return array_keys($arrayName);
 }

 //extract the values from the array
 //مقادیر ارایه رو بهت بر می گردونه به صورت ارایه 
 var_dump(array_values($arr));
 echo "<br>";
 var_dump(array_values($inArray));
 echo "<br>";
 var_dump(array_values($asArray));
 echo "<hr>";

 function extractTheValuesFromTheArray($arrayName){

    var_dump(array_values($arrayName));
    return array_values($arrayName);
 }



 echo "<hr>";

var_dump($inArray);
echo "<br>";

var_dump($asArray);
echo "<br>";

var_dump($newArr);
echo "<br>";
echo "<hr>";

 //پیدا کردن تفاوت چند ارایه اولا که بهت ارایه بر میگرونه و همه رو با ارایه اول مقایسه میکنه مقادیر مقایسه میکنه در هر چند ارایه و مقادیری که در ارایه اول نیست رو بر می گردونه
 var_dump(array_diff($inArray , $asArray , $newArr));
 //میاد مقادیر ارایه اولو با ارایه های دیگه مقایسه میکنه مشترک پیدا کنه با بقیه اون رو از ارایه اول حذف می کنه و در اخر ارایه اول بدون مشترک ها ریترن می کنه
 echo "<hr>";

 function diff2Array($a1 , $a2){

  var_dump(array_diff($a1, $a2));
  return array_diff($a1, $a2);
    
 }



//این فانکشن میاد تمام کلید های ارایه اول رو با باقی ارایه ها چک میکنه و و کلید های مشابه رو ریترن می کنه
$arr1 = [58 , 65 , 63 ];
$arr2 = [32 , 25 , 63];
var_dump(array_intersect($arr1 , $arr2 ));
echo "<br>";
var_dump(array_intersect_key($arr1 , $arr2 ));
echo "<hr>";

function intersect2Array($a1 , $a2){
    var_dump(array_intersect($a1, $a2));
    return array_intersect($a1, $a2);
   }


 //با فانکشن زیر می تونی دو یا چند ارایه رو ادغام کنی
 var_dump(array_merge($inArray , $asArray , $newArr));

function mergeArray(...$a1){

    $arr3 = [0,25];
    foreach($a1 as $a2){
        var_dump($a1);
        return array_merge($a2, $arr3);
    }
    echo "<hr>";
    var_dump($arr3);
    
 }
 mergeArray( [58 , 65 , 63 ] ,  $arr2 );






 







