<?php

require_once '../session.inc.php';
require_once '../config.php';

// Read ID from url
$id = $_GET['id'];

// read country from database
$result = mysqli_query($mysqli,"SELECT * FROM landen WHERE id = $id");

//Has a country with this id been found
if (mysqli_num_rows($result) == 1) {

    $row = mysqli_fetch_array($result);

} else {

    echo "Geen land gevonden";
    exit;

}

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

<h2>Land Bewerken</h2>

<form action="land_bewerk_verwerk.php" method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $id; ?>">

    <p>
        <label for="name">Landnaam:</label><br>
        <input type="text" id="name" name="name" required
        value="<?php echo $row['naam']; ?>">
    </p>

    <p>
        <label for="flag">Foto van vlag:</label>
        <input type="file" name="flag" id="flag" required
               value="<?php echo $row['vlag']; ?>">
    </p>

    <p>
        <label for="coach">coach:</label>
        <input type="text" name="coach" id="coach" required
               value="<?php echo $row['coach']; ?>">
    </p>

    <p>
        <label for="attendees">Aantal deelnemers:</label>
        <input type="number" name="attendees" id="attendees" required
               value="<?php echo $row['deelnemers']; ?>">
    </p>

    <p>
        <label for="bronze">Aantal bronze medailles:</label>
        <input type="number" name="bronze" id="bronze" required
               value="<?php echo $row['brons']; ?>">
    </p>

    <p>
        <label for="silver">Aantal zilveren medailles:</label>
        <input type="number" name="silver" id="silver" required
               value="<?php echo $row['zilver']; ?>">
    </p>

    <p>
        <label for="gold">Aantal gouden medailles:</label>
        <input type="number" name="gold" id="gold" required
               value="<?php echo $row['goud']; ?>">
    </p>

    <p>
        <button onclick="history.back();return false;">Annuleren</button>
        <input type="submit" name="submit" id="submit" value="Register">
    </p>

</form>

</body>
</html>
