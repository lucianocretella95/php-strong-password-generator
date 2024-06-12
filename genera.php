<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Genera</title>
</head>
<body>
    <?php
    $caratteri_permessi = [
        "minuscole" => "q", "w", "e", "r", "t", "y",
        "maiuscole" => "A", "S", "D", "F", "G", "H",
        "numeri" => "1", "2", "3", "4", "5", "6",
        "speciali" => "!", "?", "-", "_", "#", "*",
    ]
    ?>
    <?php  ?>
    <h1>Password generata</h1>
<?php
    $passlenght = $_GET["name"];
    $mypassword = rand(0, $passlenght);
    for ($i=0; $i < $passlenght ; $i++) {
        echo $caratteri_permessi['minuscole']. $caratteri_permessi['maiuscole']. $caratteri_permessi['numeri']. $caratteri_permessi['speciali'];
        echo $mypassword;
    }
    ?>
</body>
</html>