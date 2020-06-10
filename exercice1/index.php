<?php
var_dump($_SERVER);
$userAgent = $_SERVER['HTTP_USER_AGENT'];
$ipAdress = $_SERVER['SERVER_ADDR'];
$serverName = $_SERVER['SERVER_NAME'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice1</title>
</head>
<body>
    <h1>exercice1</h1>
    <p>Faire une page HTML permettant de donner à l'utilisateur :</p>
    <ul>
        <li>son User Agent</li>
        <li>son adresse ip</li>
        <li>le nom du serveur</li>
    </ul>
    <?= $userAgent . '<br>' . $ipAdress . '<br>' . $serverName ?>


</body>
</html>