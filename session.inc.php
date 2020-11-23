<?php

session_start();
require_once "config.php";

if (!isset($_SESSION['naamveld']) || !isset($_SESSION['username']) == 0)
{
    //Invalid login, send back to login
    echo "Ongeldige Login, klick op deze <a href='../login/login.php'>Link</a> om het opnieuw te proberen<br>";

}