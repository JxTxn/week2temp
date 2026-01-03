<?php
    include "translation.php";
    $translation = new translation("nl");
?>
<DOCTYPE html>
    <html>
    <head>
        <title>Opdracht4 GET</title>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <h1><?php 
            echo $translation->get_title();
            echo "<br>";
            echo $translation->get_explanation();
            echo "<br>";
            echo $translation->get_convert();
        ?></h1>
    </body>

    </html>