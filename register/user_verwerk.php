<?php
session_start();
require '../config.php';

$email      = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$username   = $_POST['username'];
// $password   = htmlentities($_POST['password'], ENT_QUOTES);
$password   = $_POST['password'];
$password   = md5($password);


// Prepare The Database
/*$pdo = $DB->prepare('SELECT * FROM users ORDER by username');
$pdo->execute();

// Only returns the associative array - In this instance, everything
$result = $pdo->fetchAll(PDO::FETCH_ASSOC); */

// Checking And Troubleshooting

    // Check if the source of data is from the correct location
    if (isset($_SERVER["HTTP_REFERER"]) && $_SERVER["HTTP_REFERER"] ==
        "https://79912.ict-lab.nl/BACK2vervang/register/user_new.php")
    {

        echo "correct source<br>";

    } else {

        echo "Incorrect source<br>";
        echo "Click this link Too head to the correct location <a href='user_new.php'>Link</a> too Visit the correct page";

    }

    // Check if spots are really filled in

if (strlen($email)       > 0 &&
    strlen($username)      > 0 &&
    strlen($password)  > 0)
{



} else {

    header("Location:../index.php");
    exit;

}


    // Clean up data
    if ($email)
    {
        echo "valid email address<br>";

    } else {

        echo "Invalid email address<br>";

    }

    // INSTERT INTO DATABASE

    $query = "INSERT INTO users (email, username, password) VALUES ('$email', '$username', '$password')";

    if ($query) {

        //Go back to homepage on successful insertion
        header("location:../index.php");

    } else {

        echo "Error occured with account creation";

    }


   $result = mysqli_query($mysqli, $query);
