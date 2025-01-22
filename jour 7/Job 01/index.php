<?php
session_start(); // Démarre ou reprend la session

// Si la variable 'nbvisites' n'existe pas encore dans la session, on l'initialise à 0
if (!isset($_SESSION['nbvisites'])) {
    $_SESSION['nbvisites'] = 0;
}

// À chaque chargement de la page, on incrémente le compteur
$_SESSION['nbvisites']++;

// Si le bouton reset est pressé, on réinitialise le compteur à 0
if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de visites</title>
</head>
<body>
    <p>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></p>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>
</html>
