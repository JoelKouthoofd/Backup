<?php

require_once '../session.inc.php';
require_once '../config.php';

// Read ID from url
$id = $_GET['id'];

// Numeric ID & country check
if (is_numeric($id))
{

    $result = mysqli_query($mysqli, "SELECT * FROM landen WHERE id = $id");

    // If a member has been found
    if (mysqli_num_rows($result) == 1)
    {
        // Read the country from the database
        $row = mysqli_fetch_array($result);

    } else {

        echo "No country found";
        exit;

    }

} else {

    echo "Incorrect ID";
    exit;

}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Land Verwijderen</title>
</head>
<body>

    <p>
        Weet je zeker dat je het land
        <strong><?php echo $row['naam']; ?></strong>
        Wilt verwijderen?
    </p>

    <p>
        <a href="land_verwijder_verwerk.php?id=<?php echo $id; ?>">Verwijder Land</a>
    </p>

    <p>
        <a href="../index.php">Nee, Terug naar het overzicht</a>
    </p>

</body>
</html>
