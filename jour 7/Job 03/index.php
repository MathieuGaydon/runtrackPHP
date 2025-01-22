<?php
// Démarre la session
session_start();

// Vérifie si le bouton de réinitialisation est pressé
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];  // Vide la session des prénoms
}

// Vérifie si un prénom est soumis via le formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['prenom']) && $_POST['prenom'] != '') {
    if (!isset($_SESSION['prenoms'])) {
        $_SESSION['prenoms'] = [];  // Initialise la session si elle n'existe pas
    }
    $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);  // Ajoute le prénom à la session
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de prénoms</title>
</head>
<body>

<h1>Ajouter un prénom</h1>

<form method="post">
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>
    <button type="submit">Ajouter</button>
    <button type="submit" name="reset">Réinitialiser</button>
</form>

<h2>Liste des prénoms :</h2>
<?php
// Vérifie si des prénoms existent dans la session
if (isset($_SESSION['prenoms']) && $_SESSION['prenoms'] != []) {
    echo '<ul>';
    foreach ($_SESSION['prenoms'] as $prenom) {
        echo '<li>' . htmlspecialchars($prenom) . '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>Aucun prénom ajouté.</p>';
}
?>

</body>
</html>
