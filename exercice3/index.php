<?php

if (isset($_POST['userLogin']) && ($_POST['userPassword'])) {
    setcookie('pseudo', $_POST['userLogin'], time() + 365 * 24 * 3600, null, null, false, true);
    setcookie('mdp', $_POST['userPassword'], time() + 365 * 24 * 3600, null, null, false, true);
    $message = 'informations valides';
} else {
    $message = 'Veuillez entré un pseudo et un mot de passe';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice3</title>
</head>

<body>
    <h1>exercice3</h1>
    <p>Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur.
        A la validation du formulaire, stocker les informations dans un cookie.</p>

    <form action="index.php" method="post" enctype="multipart/form-data">
        <p>Login : <input type="text" name="userLogin"></p>
        <p>Mot de passe : <input type="password" name="userPassword"></p>
        <p><input type="submit" value="OK"></p>
    </form>
    <div><?= $message ?></div>

</body>

</html>