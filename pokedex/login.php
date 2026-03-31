<?php
/* Author: Bas den Dekker
 * Date: 31/03/2026
 *
 * inlog pagina voor de pokédex website
 * */
?>

<?php
session_start();

$error = "";

// Simpele vaste login (normaal haal je dit uit een database)
$correct_username = "admin";
$correct_password = "1234";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    // Validatie
    if (empty($username) || empty($password)) {
        $error = "Vul alle velden in.";
    } elseif ($username === $correct_username && $password === $correct_password) {
        $_SESSION["user"] = $username;
        $loggedIn++;
        header("Location: index.php");
        exit();
    } else {
        $error = "Onjuiste gebruikersnaam of wachtwoord.";
    }
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: Arial; background: #f4f4f4; }
        .container {
            width: 300px;
            margin: 100px auto;
            padding: 20px;
            background: white;
            border-radius: 5px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #28a745;
            color: white;
            border: none;
        }
        .error { color: red; }
    </style>
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <?php if ($error): ?>
        <p class="error"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="username" placeholder="Gebruikersnaam">
        <input type="password" name="password" placeholder="Wachtwoord">
        <button type="submit">Inloggen</button>
    </form>
</div>

</body>
</html>