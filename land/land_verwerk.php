<?php
session_start();
require '../config.php';

$name       = $_POST['name'];
$coach      = $_POST['coach'];
$attendees  = $_POST['attendees'];
$bronze     = $_POST['bronze'];
$silver     = $_POST['silver'];
$gold       = $_POST['gold'];

// Prepare The Database
/* $pdo = $db->prepare('SELECT * FROM landen ORDER by id');
$pdo->execute();

// Only returns the associative array - In this instance, everything
$result = $pdo->fetchAll(PDO::FETCH_ASSOC); */

// Check if the source of data is from the correct location
/* if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] ==
    "https://79912.ict-lab.nl/BACK2vervang/land/land_new.php")
{

    echo "correct source<br>";

} else {

    echo "Incorrect source<br>";
    echo "Click this link Too head to the correct location <a href='../register/user_new.php'>Link</a> too Visit the correct page";

}
*/

if (strlen($name)       > 0 &&
    strlen($coach)      > 0 &&
    strlen($attendees)  > 0)
{



} else {

    header("Location:../index.php");
    exit;

}

// INSTERT INTO DATABASE
$query  = "INSERT INTO landen (naam, vlag, coach, deelnemers, brons, zilver, goud) 
           VALUES ('$name', '$flag', '$coach', '$attendees', '$bronze', '$silver', '$gold')";

$result = mysqli_query($mysqli, $query);


// HANDLING IMAGE
$flag = $_FILES['flag'];

if (isset($_FILES['flag']) && $_FILES['flag']['error'] == 0)
{
    //Check Filetype
    if ($_FILES['flag']['type'] == "image/jpg"  ||
        $_FILES['flag']['type'] == "image/jpeg" ||
        $_FILES['flag']['type'] == "image/pjpeg")
    {
        //Give upload directory location
        $map  = "../uploads/";

        //Link filename to ID
        $file = $_POST['id'] . '.jpg';

        //Move upload to the specified location
        move_uploaded_file($_FILES['flag']['tmp_name'], $map . $file);

    } else {

        echo "Verkeerde bestandstype, probeer jpg's<br>";
        echo "Click op deze <a href='foto.php'>link</a> Om het weer opnieuw te proberen";

    }

} else {

    echo "Er is een fout opgetreden bij het uploaden.<br>";
    echo "Click op deze <a href='../index.php'>link</a> Om weer terug te gaan naar het overzicht.";

}

//IMAGE HANDLING DONE


//When everything is completed
if ($query) {

    echo "Nieuw land aangemaakt!<br>";
    echo "Click op deze <a href='../index.php'>link</a> Om weer terug te gaan naar het overzicht.";

} else {

    echo "Error occured with country creation";

}