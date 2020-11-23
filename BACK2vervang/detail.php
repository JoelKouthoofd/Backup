<?php

session_start();
$id = $_GET['id'];

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Foto</title>
</head>
<body>

<?php


if (file_exists('uploads/' . $id . '.jpg'))
{

    echo "<p><img src='uploads/" . $id . ".jpg' alt='flag'></p>";

}

?>

</body>
</html>
