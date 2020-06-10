<?php
session_start();

$_SESSION['lastname'] = 'Doe';
$_SESSION['firstname'] = 'John';
$_SESSION['age'] = 28;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice2</title>
</head>
<body>
    <h1>exercice2</h1>
    <p>Sur la page index, faire un lien vers une autre page. Passer d'une page à l'autre le contenu 
    des variables lastname, firstname et age grâce aux sessions.</p>
    <p>Ces variables auront été définies directement dans le code.</p>
    <p>Il faudra afficher le contenu de ces variables sur la deuxième page.</p>

    <a href='user.php'>Espace utilisateur</a>
</body>
</html>