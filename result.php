<?php
    $temp = $_GET["temp"];
    $from = $_GET["from"];
    $to = $_GET["to"];
?>
<DOCTYPE html>
    <html>

    <head>
        <title>Opdracht4 GET</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include "head.php";?>
            <?php
            switch (true) {
                case ($from == "Celsius" && $to == "Fahrenheit"):
                    echo $temp * 1.8 + 32;
                    break;
                case ($from == "Celsius" && $to == "Kelvin"):
                    echo $temp + 273.15;
                    break;
                case ($from == "Fahrenheit " && $to == "Kelvin"):
                    echo ($temp - 32) / 1.8 + 273.15;
                    break;
                case ($from == "Fahrenheit " && $to == "Celsius"):
                    echo ($temp - 32) / 1.8;
                    break;
                case ($from == "Kelvin" && $to == "Fahrenheit"):
                    echo ($temp - 273.15) * 1.8 + 32;
                    break;
                case ($from == "Kelvin" && $to == "Celsius"):
                    echo $temp - 273.15;
                    break;
            }
            ?>
        <?php include "footer.php";?>
    </body>
    </html>