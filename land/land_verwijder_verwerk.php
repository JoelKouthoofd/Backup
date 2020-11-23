<?php

require_once '../session.inc.php';
require_once '../config.php';

// Read ID from url
$id = $_GET['id'];

// Numeric ID & country check
if (is_numeric($id))
{

    $result = mysqli_query($mysqli, "DELETE FROM landen WHERE id = $id");

    // If a member has been found
    if ($result)
    {

        echo "Land succesful verwijderd!<br>";
        echo "Click op deze <a href='../index.php'>link</a> om weer terug te gaan naar het overzicht.";

    } else {

        echo "Er is een fout opgetreden met het verwijderen";
        echo "Click op deze <a href='../index.php'>link</a> om weer terug te gaan naar het overzicht.";

    }

} else {

    echo "Incorrect ID";
    echo "Click op deze <a href='../index.php'>link</a> om weer terug te gaan naar het overzicht.";


}
