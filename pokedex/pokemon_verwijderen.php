<?php
/*
 * Author: Bas den Dekker
 * Date: 30/03/2026
 *
 * verwijder pagina voor de pokémon
 * */
?>

<?php
$verwijder = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/style.css">
    <title>Verwijderen</title>
</head>

<body>
    <form action="pokemon_verwijderen.php?pokemonNumber=<?php echo $_GET["pokemonNumber"]; ?>" method="POST">
        <fieldset>
            <legend>Pokémon Verwijderen</legend>
                <input type="submit" name="annuleer" value="Annuleer">
                <input type="submit" name="verwijder" value="Verwijder">
        </fieldset>
    </form>

</body>

<?php
if(isset($_POST["verwijder"])) {
    echo $pokemonNumber = $_GET["pokemonNumber"];

    $query = "DELETE FROM pokemon Where number = '$pokemonNumber';";

    include "../includes/db_functions.php";

    StartConnection("pokemondb");

    $rowsAffected = ExecuteQuery($query);

    if ($rowsAffected >= 1) {
        echo "succesvol verwijderd";
    } else {
        echo "Er is iets misgegaan";
    }
} elseif (isset($_POST["annuleer"]))
{
    header('location: index.php');
}
?>