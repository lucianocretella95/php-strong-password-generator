<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Genera</title>
</head>
<body>
    <h1>Password generata</h1>
<?php
    $passlenght = $_GET["name"];
    for ($x = 0; $x < $passlenght; $x++) {
        echo "X";
      }
    ?>
</body>
</html>