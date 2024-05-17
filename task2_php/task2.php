<?php


function getPrice($price){

    if($price > 0 && $price < 1500)
    {

        for ($i=0; $i < 10 ; $i++) { 

            echo " this is cheaper than that";
            echo "<br>";
            echo "<hr>";

        }    
    }

    elseif($price > 1500 && $price < 2500)
    {

        for ($i=0; $i < 10 ; $i++) { 

            echo " this is eqauls than that";
            echo "<br>";
            echo "<hr>";

        }

    }

    else {

        for ($i=0; $i < 10 ; $i++) { 

            echo " this is expensive than that";
            echo "<br>";
            echo "<hr>";

        }
    }
}

    getPrice(2500);
    echo "<hr>";




    function getday($day){

        switch($day){
            case "saturday":
                return 1 ; 
            break;
            case "sunday":
                return 2 ; 
            break;
            case "monday":
                return 3 ; 
            break; 
            case "tuesday":
                return 4 ; 
            break;
            case "wednesday":
                return 5 ; 
            break;
            case "thursday":
                return 6 ; 
            break;
            case "friday":
                return 7 ; 
            break;
                default:
                return 0 ;
           }


    }

    $d = getDay(6);
    echo "<br> $d of week";









?> 