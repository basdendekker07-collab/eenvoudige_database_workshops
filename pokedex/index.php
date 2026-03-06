<?php
/*
 * Author: Bas den Dekker
 * Date: 06-03-2026
 * pokedex indexpagina
 * */

//includen van de db_functions map
include "../includes/db_functions.php";

//datebase connection aanmaken
startConnection("pokemondb");

//query voor alle date uit de datebase
//$query = "SELECT * FROM pokemon; WHERE type1 = 'fire' OR type1 = 'water'";
$query = "SELECT * fROM pokemon;";
//query uitvoeren
$result = ExecuteSelectQuery($query);

//Lopen door elke rij en per rij gegeven tonen
foreach($result as $row)
{

    $img = $row["picture"];
    $name = $row["name"];

    echo "<article>";
    echo $name;
    echo "<img src='$img' alt='$name' width='50'>";
    echo "</article>";
}

