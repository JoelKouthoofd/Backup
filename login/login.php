<?php

require_once '../config.php'

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log-in</title>
</head>
<body>

    <h2>Inloggen</h2>

    <form action="login_verwerk.php" method="post">

    <p>
        <label for="username">Username:</label><br>
        <input type="text" name="username" id="username" required>
    </p>

    <p>
        <label for="password">Wachtwoord:</label><br>
        <input type="text" name="password" id="password" required>
    </p>

    <p>
        <button onclick="history.back();return false;">Annuleren</button>
        <input type="submit" name="submit" id="submit" value="Inloggen">
    </p>

    </form>

</body>
</html>
