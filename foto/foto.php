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

    if (strlen($_SESSION['username']) > 0 )
    {

        echo "<form action='foto_verwerk.php' method='post' enctype='multipart/form-data'>";

        echo "<input type='hidden' name='id' value='" . $id . "'>";

        echo "<p>";
        echo "<label for='flag'>Vlag:</label>";
        echo "<input type='file' name='flag' id='flag' required>";
        echo "</p>";

        echo "<p>";
        echo "<input type='submit' name='submit' id='submit' value='uploaden'>";
        echo "<button onclick='history.back();return false;'>annuleren</button>";
        echo "</p>";

        echo "</form>";


    }


    if (file_exists('../uploads/' . $id . '.jpg'))
    {

        echo "<p><img src='../uploads/" . $id . ".jpg' alt='flag'></p>";

    }

?>

</body>
</html>
