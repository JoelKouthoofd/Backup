<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASSWORD', 'Iet66O^D');
define('DB_NAME', 'md509597db496750');

$dbm = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;

try {
    $dbs = new PDO($dbm, DB_USER, DB_PASSWORD);
    $dbs->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
    $dbs->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>