<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2 user</title>
</head>
<body>
    <div><?= 'Tu t\'appel(le) ' . $_SESSION['firstname'] . ' ' . $_SESSION['lastname'] . ' et tu as ' . $_SESSION['age'] . ' ans.' ?></div>
</body>
</html>