<?php

require_once '../config.php';
require_once '../session.inc.php';

$username   = $_POST['username'];
$password   = $_POST['password'];
$password   = md5($password);

// Checking Query
$query = "SELECT * FROM users  WHERE username = '$username' AND password = '$password'";

// Initiate Query
$result = mysqli_query($mysqli, $query);

// Control for correct login
if (mysqli_num_rows($result) == 1)
{
    // start on correct login
    session_start();

    // save username in session
    $_SESSION['username'] = $username;

    echo "U bent ingelogen!<br>";
    echo "Click op deze <a href='../index.php'>link</a> Om weer terug te gaan naar het overzicht.";

} else {

    // On incorrect login send back too the login page
    header("Location:login.php");
    exit;
}