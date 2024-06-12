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
    $caratteri = [
        "permessi" => ["q", "w", "e", "r", "t", "y","A", "S", "D", "F", "G", "H", "1", "2", "3", "4", "5", "6", "!", "?", "-", "_", "#", "*",],
    ];
    ?>
    <?php  ?>
    <h1>Password generata</h1>
    <p>la tua paassword é: </p>
<?php
    $passlenght = $_GET["name"];
    // $mypassword = rand(0, $passlenght);
    for ($i=0; $i < $passlenght ; $i++) {
        echo "X";
    }
    ?>
</body>
</html>