<?php
/*
 * Author: Bas den dekker
 * Date: 18-03-2026
 *
 * toevoegen van pokemon aan de database
 * */
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Pokedex</title>
</head>

<body>

    <?php
    if(isset($_POST["submitForm"]))
    {
        //var_dump($_POST);
        $name = $_POST ["pokemonName"];
        $number = $_POST ["pokemonNumber"];
        $type1 = $_POST ["pokemonType1"];
        $type2 = $_POST ["pokemonType2"];
        $ability = $_POST ["pokemonAbility"];
        $species = $_POST ["pokemonSpecies"];
        $picture = $_POST ["pokemonPicture"];

        $query = "INSERT INTO pokemon VALUES ('$name', '$number', '$type1', '$type2', '$ability', '$species', '$picture')";

        include"../includes/db_functions.php";

        startConnection("pokemondb");

        $rowsEffected = executeQuery($query);

        if($rowsEffected >= 1)
            {
                echo "U heeft $name toegevoegd";
            }
        else
            {
                echo "er is iets mis gegaan";
            }
    }

    ?>

    <a href="index.php">pokédex</a>

    <form action="pokemon_toevoegen.php" method="POST">
    <fieldset>
        <legend>Pokemon toevoegen</legend>
        <p>
            <label for="name">Name</label>
            <input type="text" name="pokemonName" id="name">
        </p>
        <p>
            <label for="number">Number</label>
            <input type="text" name="pokemonNumber" id="number">
        </p>
        <p>
            <label for="type1">Type1</label>
            <input type="text" name="pokemonType1" id="type1">
        </p>
        <p>
            <label for="type2">Type2</label>
            <input type="text" name="pokemonType2" id="type2">
        </p>
        <p>
            <label for="ability">Ability</label>
            <input type="text" name="pokemonAbility" id="Ability">
        </p>
        <p>
            <label for="species">Species</label>
            <input type="text" name="pokemonSpecies" id="species">
        </p>
        <p>
            <label for="picture">Picture</label>
            <input type="text" name="pokemonPicture" id="picture">
        </p>
        <p>
            <input type="submit" name="submitForm">
        </p>
    </fieldset>
    </form>
</body>