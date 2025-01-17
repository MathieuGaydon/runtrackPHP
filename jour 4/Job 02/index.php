<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire GET</title>
</head>
<body>
    <h2>Formulaire de test</h2>
    <form action="index.php" method="GET">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom"><br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom"><br><br>

        <label for="age">Âge :</label>
        <input type="text" id="age" name="age"><br><br>

        <input type="submit" value="Envoyer">
    </form>
</body>
</html>
<?php
// Vérifier si $_GET contient des valeurs
if (!empty($_GET)) {
    echo "<h2>Paramètres GET :</h2>";
    echo "<table border='1'>";
    echo "<tr><th>Nom</th><th>Valeur</th></tr>";

    // Parcours de tous les éléments de $_GET et affichage dans le tableau HTML
    foreach ($_GET as $key => $value) {
        echo "<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "<p>Aucun paramètre GET n'a été envoyé.</p>";
}
?>
