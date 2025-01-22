<?php
// Vérifier si l'utilisateur est connecté en vérifiant la présence du cookie
$prenom = null;
if (isset($_COOKIE['prenom'])) {
    $prenom = $_COOKIE['prenom'];
}

// Déconnexion : supprimer le cookie
if (isset($_POST['deco'])) {
    $_COOKIE['prenom'] = ''; // Supprimer le cookie
    setcookie('prenom', '', time() - 3600, '/'); // Supprimer le cookie immédiatement
    $prenom = null; // Réinitialiser la variable prénom
}

// Traitement du formulaire de connexion
if (isset($_POST['connexion']) && isset($_POST['prenom'])) {
    $prenom = trim($_POST['prenom']);
    if ($prenom !== '') {
        $_COOKIE['prenom'] = $prenom; // Sauvegarder le prénom dans le cookie
        setcookie('prenom', $prenom, time() + 86400, '/'); // Cookie valable pendant 1 jour
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
</head>
<body>

<?php if ($prenom === null): ?>
    <!-- Formulaire de connexion -->
    <form action="" method="post">
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php else: ?>
    <!-- Affichage du message de bienvenue et bouton de déconnexion -->
    <p>Bonjour <?= $prenom ?> !</p>
    <form action="" method="post">
        <button type="submit" name="deco">Déconnexion</button>
    </form>
<?php endif; ?>

</body>
</html>
