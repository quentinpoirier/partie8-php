<?php
if (isset($_POST['userLogin']) && ($_POST['userPassword'])) {
    setcookie('pseudo', $_POST['userLogin'], time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('password', $_POST['userPassword'], time() + 365 * 24 * 3600, null, null, false, true);
    header('Location: user.php');
    exit;
}
$message = 'Ton pseudo : ' . $_COOKIE['pseudo'] . ' / Ton mot de passe : ' . $_COOKIE['password'];
var_dump($_COOKIE);
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user exercice4</title>
</head>

<body>
    <div><?= $message ?></div>
</body>

</html>