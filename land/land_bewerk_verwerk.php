<?php

require_once '../session.inc.php';
session_start();
require '../config.php';

$id         = $_POST['id'];
$name       = $_POST['name'];
$flag       = $_POST['flag'];
$coach      = $_POST['coach'];
$attendees  = $_POST['attendees'];
$bronze     = $_POST['bronze'];
$silver     = $_POST['silver'];
$gold       = $_POST['gold'];



// Prepare The Database
/*$pdo = $DB->prepare('SELECT * FROM users ORDER by username');
$pdo->execute();

// Only returns the associative array - In this instance, everything
$result = $pdo->fetchAll(PDO::FETCH_ASSOC); */



// Check if the source of data is from the correct location
/* if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] ==
    "https://79912.ict-lab.nl/BACK2vervang/register/user_new.php")
{

    echo "correct source<br>";

} else {

    echo "Incorrect source<br>";
    echo "Click this link Too head to the correct location <a href='user_new.php'>Link</a> too Visit the correct page";

}

// Verify if the Identity of the form is correct
if (isset($_POST['username'])   &&
    isset($_POST['password'])   &&
    isset($_POST['email'])      &&
    isset($_POST['submit']))
{

    echo "received a valid form<br>";

} else {

    echo "received an invalid form<br>";
    echo "Click on this <a href='user_new.php'>link to try again";

}


// Clean up data
if ($email)
{
    echo "valid email address<br>";

} else {

    echo "Invalid email address<br>";

} */

// INSTERT INTO DATABASE

$query = "UPDATE landen SET naam = '$name', vlag = '$flag', coach = '$coach', 
          deelnemers = '$attendees', brons = '$bronze', 
          zilver = '$silver', goud = '$gold' WHERE id = $id";

if ($query) {

    //Go back to homepage on successful insertion
    header("location:../index.php");

} else {

    echo "Error occured with account creation";

}


$result = mysqli_query($mysqli, $query);
