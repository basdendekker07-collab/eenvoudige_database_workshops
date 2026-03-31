<?php
/*
 * Author: Bas den Dekker
 * Date: 06-03-2026
 * pokedex indexpagina
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

    <header>
        <h1>
            De Pokédex
        </h1>
    </header>

    <a href="pokemon_toevoegen.php">Pokémon toevoegen</a>

    <main>
        <form action="index.php" method="GET">
            <fieldset>
                <legend>Zoeken</legend>
               <!-- <label>Zoeken</label> -->
                <input type="text" name="searchName">

                <input type="submit"  name="searchForm" value="Zoeken...">

            </fieldset>
        </form>

        <article id="overview">
            <?php
            session_start();

            //includen van de db_functions map
            include "../includes/db_functions.php";

            //datebase connection aanmaken
            startConnection("pokemondb");

            //query voor alle date uit de datebase
            //$query = "SELECT * FROM pokemon; WHERE type1 = 'fire' OR type1 = 'water'";

            //code om het zoek veld te laten functioneren
            if(isset($_GET["searchForm"]))
            {
                $searchName = $_GET["searchName"];

                $query = "SELECT * FROM pokemon WHERE name LIKE '%$searchName%';";

                echo "U heeft gezocht op $searchName";
            }
            else
            {
                $query = "SELECT * fROM pokemon;";
            }

            //query uitvoeren
            $result = ExecuteSelectQuery($query);

            //Lopen door elke rij en per rij gegeven tonen
            foreach($result as $row)
            {

                $img = $row["picture"];
                $name = $row["name"];
                $number = $row["number"];

                echo "<article>";
                echo $name;
                echo "<img src='$img' alt='$name' width='100'>";
                if(isset()
                {
                    echo "<a href='pokemon_bewerken.php?pokemonNumber=$number'>bewerken</a><br>";
                    echo "<a href='pokemon_verwijderen.php?pokemonNumber=$number'>verwijder</a>";
                }
                echo "</article>";
            }
            ?>
        </article>
    </main>

    <footer>

    </footer>

</body>
</html>