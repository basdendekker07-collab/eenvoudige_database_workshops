<!doctype html>
<?php
    /*
     * Author: Bas den Dekker
     * 6-2-2026
     * Homepage Workshop Week 1
     * */
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
    <body>

        <?php
            echo "<h1>Hello World!</h1>";
        ?>

        <h2>
            Koptekst
        </h2>

        <?php
            echo "<p>Hello World!</p>";

            echo "hello world!";
            echo "hello world!";
        ?>

        <?php
            $firstName = "Bas"; //string
            $lastName = "den Dekker";
            $age = 18; //integer
            $isStudent = true; //Boolean

            echo "<p>Mijn naam is $firstName $lastName en mijn leeftijs is $age</p>";

            $ageToekomst = $age + 10;

            echo "<p>Over 10 jaar ben ik $ageToekomst</p>";
        ?>

    </body>
</html>

