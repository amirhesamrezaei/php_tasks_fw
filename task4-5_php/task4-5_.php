<?php

class students {

    public $firstName ;
    public $lastName ;
    protected $id;
    protected $melliId;

    function __construct($fname,$lname) {
        $this -> firstName = $fname;
        $this -> lastName = $lname;
    }

    function get_firstName() {
        return $this -> firstName;
    }

    function get_lastName() {
        return $this -> lastName;
    }

    function get_melliId() {
        return $this -> melliId;
    }

    function get_id() {
        return $this -> id;
    }


    function set_fname($fname){
        $this -> firstName = $fname;
    }

    function set_lname($lname){
        $this -> lastName = $lname;
    }

    function set_id($id){
        $this -> id = $id;
    }

    function set_melliId($melliId){
        $this -> melliId = $melliId;
    }


}


$student = new students($_POST['fname'], $_POST['lname']);



var_dump($_POST);
echo "<hr>";





if(!empty($_POST['stdid'])){

    if (is_numeric($_POST['stdid'])) {

        echo "<br>";
        $student -> set_id($_POST['stdid']);
        echo $_POST['stdid'];
    
    }
    elseif (!is_numeric($_POST['stdid'])) {
        
       echo "attention to wrong format";
       
    }

}
else{

    echo "attention to fild empty";


}

echo "<br>";


if(!empty($_POST['stdmeli'])){

    if (is_numeric($_POST['stdmeli'])) {

        echo "<br>";
        $student -> set_melliId($_POST['stdmeli']);
        echo $_POST['stdmeli'];
    
    }
    elseif (!is_numeric($_POST['stdmeli'])) {
        
       echo "attention to wrong format";
       
    }

}
else{

    echo "attention to fild empty";


}



echo "<br>";



if(!empty($_POST['fname'])){

    if (!is_numeric($_POST['fname'])) {

        echo "<br>";
        $student -> set_fname($_POST['fname']);
        echo $_POST['fname'];
    
    }
    elseif (is_numeric($_POST['fname'])) {
        
       echo "attention to wrong format";
       
    }

}
else{

    echo "attention to fild empty";


}




echo "<br>";



if(!empty($_POST['lname'])){

    if (!is_numeric($_POST['lname'])) {

        echo "<br>";
        $student -> set_lname($_POST['lname']);
        echo $_POST['lname'];
    
    }
    elseif (is_numeric($_POST['lname'])) {
        
       echo "attention to wrong format";
       
    }

}
else{

    echo "attention to fild empty";


}


//w

$myfile = fopen("information.txt", "a") or die("Unable to open file!");
$txt = $student -> get_firstName() . "\n" ;
fwrite($myfile, $txt);


$txt = $student -> get_lastName() . "\n" ;
fwrite($myfile, $txt);

$txt = $student -> get_melliId() . "\n" ;
fwrite($myfile, $txt);

$txt = $student -> get_id() . "\n" ;
fwrite($myfile, $txt);

fclose($myfile);




