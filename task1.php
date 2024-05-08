<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $age = 14 ; 

    if ($age > 0){

        if ($age < 15){

            for ($i=0; $i < $age ; $i++) { 
        
                echo " your age is $age => not greater than 18";
            }

        }
        elseif ($age > 15 and $age <= 25 ){

            
            echo " your age is $age => accessible to content";

        }

        else{

            echo " your age is $age =>  please  leave this ";

        }

    }







    // $age = 14;


    //     echo "My first PHP script!";
    //     echo "<br>";
    //     echo "hello world";
    //     echo "<br>";
    //     echo phpversion();

    ?>
</body>
</html>