<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $day = " ";

    switch ($day)
    {
        case "sunday":
            echo "2 day of the week";
            break;

             case "monday":
                echo "3 day of the week";
                break;

                case "tuesday":
                    echo "4 day of the week";
                    break;

                    case "thursday":
                        echo "5 day of the week";
                        break;

                        case "friday":
                            echo "6 day of the week";
                            break;

                            case "sateday":
                                echo "7 day of the week";
                                break;

                                default:
                                     echo "none day of the week";
                                     break;
    }


    ?>
</body>
</html>