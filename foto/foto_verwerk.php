<?php

require_once '../config.php';
session_start();
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

        //Send back to page
        header("Location:foto.php?id=" . $_POST['id']);

    } else {

        echo "Verkeerde bestandstype, probeer jpg's<br>";
        echo "Click op deze <a href='foto.php'>link</a> Om het weer opnieuw te proberen";

    }

} else {

    echo "Er is een fout opgetreden bij het uploaden.<br>";
    echo "Click op deze <a href='../index.php'>link</a> Om weer terug te gaan naar het overzicht.";

}

