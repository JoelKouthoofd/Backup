<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
</head>
<body style="text-align: center">

<h2>Lid Toevoegen</h2>

<form action="user_verwerk.php" method="post">

    <p>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required>
    </p>

    <p>
        <label for="username">Inlognaam aanmaken:</label><br>
        <input type="text" name="username" id="username" required>
    </p>

    <p>
        <label for="password">Wachtwoord:</label><br>
        <input type="text" name="password" id="password" required>
    </p>

    <p>
        <button onclick="history.back();return false;">Annuleren</button>
        <input type="submit" name="submit" id="submit" value="Aanmaken">
    </p>

</form>

</body>
</html>
