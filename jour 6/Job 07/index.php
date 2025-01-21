<?php
function bubblesort($tab, $croissant) {
    $n = count($tab);  // Nombre d'éléments dans le tableau

    // Tri à bulles
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            // Comparer les éléments adjacents
            if (($croissant && $tab[$j] > $tab[$j + 1]) || (!$croissant && $tab[$j] < $tab[$j + 1])) {
                // Échanger les éléments si nécessaire
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    
    return $tab;
}
// Vérification de la soumission du formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les chaînes de caractères depuis le formulaire
    $tab = explode(',', $_POST['chaines']); // Séparer les chaînes par une virgule

    // Récupérer le choix du tri (croissant ou décroissant)
    $croissant = ($_POST['croissant'] === 'non') ? false : true; // "oui" = croissant, "non" = décroissant
    // Effectuer le tri
    $resultat = bubblesort($tab, $croissant);
    echo "Résultat du tri : " . implode(", ", $resultat) . "<br>";
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tri de chaînes de caractères</title>
</head>
<body>
    <h1>Tri de chaînes de caractères</h1>
    <form method="POST">
        <label for="chaines">Entrez vos chaînes de caractères (séparées par une virgule) :</label><br>
        <input type="text" id="chaines" name="chaines" required><br><br>

        <label for="croissant">Tri croissant :</label><br>
        <input type="radio" id="croissant" name="croissant" value="oui" required> Oui
        <input type="radio" id="decroissant" name="croissant" value="non" required> Non<br><br>

        <input type="submit" value="Trier">
    </form>
</body>
</html>
