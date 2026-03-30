<?php
/*
 * Author: Bas den Dekker
 * Date: 23/03/2026
 *
 * een pokémon in de index pagina bewerken
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
    <title>Bewerken</title>
</head>

<body>

<?php

    $pokemonNumber = $_GET["pokemonNumber"];

    $query = "SELECT * FROM pokemon WHERE number = $pokemonNumber;";

    include "../includes/db_functions.php";

    startConnection("pokemondb");

    $result = executeSelectQuery($query);
    $current = $result[0];

    $currentName = $current["name"];
    $currentNumber = $current["number"];
    $currentType1 = $current["type1"];
    $currentType2 = $current["type2"];
    $currentAbility = $current["ability"];
    $currentSpecies = $current["species"];
    $currentPicture = $current["picture"];



    if(isset($_POST["submitForm"]))
    {
        $name = $_POST ["pokemonName"];
        $number = $_POST ["pokemonNumber"];
        $type1 = $_POST ["pokemonType1"];
        $type2 = $_POST ["pokemonType2"];
        $ability = $_POST ["pokemonAbility"];
        $species = $_POST ["pokemonSpecies"];
        $picture = $_POST ["pokemonPicture"];

        echo $updateQuery = "UPDATE pokemon SET name = '$name', number = '$number', type1 = '$type1', type2 = '$type2', ability = '$ability', species = '$species', picture = '$picture' WHERE 'number' = $pokemonNumber;";

    }
?>

    <a href="index.php">Pokédex</a>

    <form action="pokemon_bewerken.php?pokemonNumber=<?php echo $pokemonNumber;?>" method="POST">
        <fieldset>
            <legend>Pokemon bewerken</legend>
            <p>
                <label for="name">Name</label>
                <input type="text" name="pokemonName" id="name" value="<?php echo $currentName; ?>">
            </p>
            <p>
                <label for="number">Number</label>
                <input type="text" name="pokemonNumber" id="number" value="<?php echo $currentNumber; ?>">
            </p>
            <p>
                <label for="type1">Type1</label>
                <input type="text" name="pokemonType1" id="type1" value="<?php echo $currentType1; ?>">
            </p>
            <p>
                <label for="type2">Type2</label>
                <input type="text" name="pokemonType2" id="type2" value="<?php echo $currentType2; ?>">
            </p>
            <p>
                <label for="ability">Ability</label>
                <input type="text" name="pokemonAbility" id="Ability" value="<?php echo $currentAbility; ?>">
            </p>
            <p>
                <label for="species">Species</label>
                <input type="text" name="pokemonSpecies" id="species" value="<?php echo $currentSpecies; ?>">
            </p>
            <p>
                <label for="picture">Picture</label>
                <input type="text" name="pokemonPicture" id="picture" value="<?php echo $currentPicture; ?>">
            </p>
            <p>
                <input type="submit" name="submitForm">
            </p>
        </fieldset>
    </form>
</body>
