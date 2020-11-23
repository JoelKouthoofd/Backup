<?php

require_once "config.php";
session_start();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview Pagina</title>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="main.css" rel="stylesheet" type="text/css">
    <script>

        function link() {

            document.location = 'land/land_new.php';

        }

    </script>
</head>
<body>

<div class="container-lg">

    <?php

        if (strlen($_SESSION['username']) > 0 ) {

            echo "U bent ingelogd als <strong>" . $_SESSION['username'] . "</strong><br>";

        }

    ?>

    <button type="button" class="btn btn-outline-success" style="margin: 1.5rem 0rem 2.5rem 0rem" onclick="document.location = 'login/login.php'">Inloggen</button>
    <button type="button" class="btn btn-outline-secondary"    style="margin: 1.5rem 0rem 2.5rem 0rem" onclick="document.location = 'login/logout.php'">Uitloggen</button>
    <button type="button" class="btn btn-outline-warning" style="margin: 1.5rem 0rem 2.5rem 0rem" onclick="document.location = 'register/user_new.php'">Registreren</button>

    <?php

        if (strlen($_SESSION['username']) > 0)
        {

            echo "<button type='button' class='btn btn-outline-info'    style='margin: 1.5rem 0rem 2.5rem 0rem' onclick='link()'> Nieuw Land</button>";

        }

    ?>


    <h2>Overzicht Landen Olympische Spelen</h2>
    



<?php

$result = mysqli_query($mysqli, "SELECT * FROM landen ORDER BY naam");

// Maak tabel aan
echo "<table class='table table-dark'>";


// Rij maken per land
echo "<tr>";

// echo "<th scope='col'><strong>#</strong></th>";
echo "<th scope='col'>Land</th>";
echo "<th scope='col'>Vlag</th>";
echo "<th scope='col'>Coach</th>";
echo "<th scope='col'>Deelnemers</th>";
echo "<th scope='col'>Bronze Medailles</th>";
echo "<th scope='col'>Zilvere Medailles</th>";
echo "<th scope='col'>Gouden Medailles</th>";
echo "<th scope='col'></th>";
echo "<th scope='col'></th>";

// Rij Afsluiten
echo "</tr>";



while ($row = mysqli_fetch_array($result)) {

    echo "<tr>";

// Roep  de gegevens van de tabellen op
    // echo "<td><strong>" . $row['id']        . "</strong></td>";
    echo "<td><a href='detail.php?id=" . $row['id'] . "'><strong>" . $row['naam'] . "</strong></a></td>";
    echo "<td><a href='foto/foto.php?id=" . $row['id'] . "'><strong>Foto</strong></a></td>";
    echo "<td>" . $row['coach']     . "</td>";
    echo "<td>" . $row['deelnemers']. "</td>";
    echo "<td>" . $row['brons']     . "</td>";
    echo "<td>" . $row['zilver']    . "</td>";
    echo "<td>" . $row['goud']      . "</td>";

    if (strlen($_SESSION['username']) > 0)
    {

    echo "<td><a href='land/land_bewerk.php?id=" . $row['id'] . "'>Bewerken</a></td>";
    echo "<td><a href='land/land_verwijder.php?id=" . $row['id'] . "'>verwijderen</td>";

    } else {



    }

    echo "</tr>";

}

echo "</table>";


?>

</div>
</body>
</html>


