<?php
setcookie('pseudo', 'Dude', time() + 365*24*3600, null, null, false, true);
header('Location: user.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user exercice5</title>
</head>
<body>
</body>
</html>