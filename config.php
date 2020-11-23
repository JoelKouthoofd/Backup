<?php

    // OLD METHOD

$db_hostname = 'localhost';
$db_username = 'vervang_79912';
$db_password = '79912';
$db_database = 'vervang_79912';

$mysqli = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);


if(!$mysqli){

    echo "Fout geen connectie naar database. <br>";
    echo "Errno: ". mysqli_connect_errno() . "<br>";
    echo "Error: ". mysqli_connect_error() . "<br>";

    exit;
}
else {

}

    // NEW METHOD BY USE OF PDO


// Below method is for forbidden access through url input but turned off for development
/*  if (!defined('SITE_URL')) {
    //Send forbidden access response.
    header($_SERVER["SERVER_PROTOCOL"] / " 403 Forbidden", true, 403);
    //Kill the script
    exit;
} */

/* const HOST       = 'localhost';
const USER       = 'vervang_79912';
const PASSWORD   = '79912';
const NAME       = 'vervang_79912';

$dbm = 'mysql:host' . HOST . ';dbname=' . NAME;
// $dbm = mysqli_connect(HOST, USER, PASSWORD, NAME);

try {

    $db = new PDO($dbm, USER, PASSWORD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db->exec('SET NAMES utf8');

} catch (PDOException $e) {

    die($e->getMessage());

} */

