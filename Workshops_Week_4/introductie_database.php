<?php
/*
 * Author: Bas den Deker
 * Date: 05-03-2026
 *
 * verbinding maken met een database
 */

//includen van de db_functions map
include "../includes/db_functions.php";

//database verbinding starten
StartConnection("world");

$query = "SELECT * FROM country";

//uirvoering van query in variabelen
$result = ExecuteSelectQuery($query);

//loop resultaten

foreach($result as $row){
    echo $row["name"]."<br>";

}