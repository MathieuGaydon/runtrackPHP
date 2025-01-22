<?php
// Vérifier si le cookie "nbvisites" existe, sinon le créer et l'initialiser à 1
if (isset($_COOKIE['nbvisites'])) {
    // Si le cookie existe, on incrémente sa valeur
    $nbvisites = $_COOKIE['nbvisites'] + 1;
} else {
    // Si le cookie n'existe pas, on l'initialise à 1
    $nbvisites = 1;
}

// Créer ou mettre à jour le cookie "nbvisites" avec la nouvelle valeur
setcookie('nbvisites', $nbvisites, time() + 3600); // Le cookie expire dans 1 heure

// Si le formulaire de réinitialisation a été soumis, on réinitialise le compteur
if (isset($_POST['reset'])) {
    setcookie('nbvisites', 1, time() + 3600); // Réinitialise le cookie à 1
    $nbvisites = 1; // Mettre à jour la variable $nbvisites pour afficher la valeur réinitialisée
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
    <h1>Nombre de visites : <?php echo $nbvisites; ?></h1>

    <!-- Formulaire pour réinitialiser le compteur -->
    <form method="POST">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>
</html>
