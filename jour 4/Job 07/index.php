<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Maison</title>
    <style>
        pre {
            font-family: monospace;
            white-space: pre-wrap;
        }
    </style>
</head>
<body>
    <h2>Formulaire de la Maison</h2>

    <!-- Formulaire pour entrer largeur et hauteur -->
    <form method="post">
        <label for="largeur">Largeur :</label>
        <input type="number" id="largeur" name="largeur" required min="3">
        <br><br>
        <label for="hauteur">Hauteur :</label>
        <input type="number" id="hauteur" name="hauteur" required min="1">
        <br><br>
        <input type="submit" value="Dessiner la Maison">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupérer la largeur et la hauteur
        $largeur = (int)$_POST['largeur'];
        $hauteur = (int)$_POST['hauteur'];

        // Condition pour éviter une largeur ou une hauteur trop petite
        if ($largeur < 3 || $hauteur < 1) {
            echo "Les valeurs de largeur et de hauteur sont trop petites.";
        } else {
            // Dessin de la maison
            echo "<pre>";
            
            // Dessin du toit (partie triangulaire)
            for ($i = 0; $i < $hauteur; $i++) {
                // Espaces avant la première barre
                echo str_repeat(' ', $hauteur - $i - 1);
                // Lignes du toit
                echo '/' . str_repeat('_', (2 * $i + 1)) . '\\' . "\n";
            }
            
            // Dessin du corps (partie carrée)
            for ($i = 0; $i < $hauteur; $i++) {
                // Corps de la maison avec la largeur spécifiée
                echo '|' . str_repeat(' ', $largeur - 2) . '|' . "\n";
            }
            
            // Dessin du bas de la maison
            echo '|' . str_repeat('_', $largeur - 2) . '|' . "\n";

            echo "</pre>";
        }
    }
    ?>
</body>
</html>
