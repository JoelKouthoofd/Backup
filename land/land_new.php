<?php

require_once '../session.inc.php';
session_start();
$id = $_GET['id'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0,
          maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land Registratie</title>
</head>
<body style="text-align: center">

<h2>Land Toevoegen</h2>

<form action="land_verwerk.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id; ?>">;

    <p>
        <label for="name">Landnaam:</label><br>
        <input type="text" id="name" name="name" required>
    </p>

    <p>
        <label for="flag">Foto van vlag:</label>
        <input type="file" name="flag" id="flag" required>
    </p>

    <p>
        <label for="coach">coach:</label>
        <input type="text" name="coach" id="coach" required>
    </p>

    <p>
        <label for="attendees">Aantal deelnemers:</label>
        <input type="number" name="attendees" id="attendees" required>
    </p>

    <p>
        <label for="bronze">Aantal bronze medailles:</label>
        <input type="number" name="bronze" id="bronze" required>
    </p>

    <p>
        <label for="silver">Aantal zilveren medailles:</label>
        <input type="number" name="silver" id="silver" required>
    </p>

    <p>
        <label for="gold">Aantal gouden medailles:</label>
        <input type="number" name="gold" id="gold" required>
    </p>

    <p>
        <button onclick="history.back();return false;">Annuleren</button>
        <input type="submit" name="submit" id="submit" value="Land Toevoegen">
    </p>

</form>

</body>
</html>
