<?php
session_start();

// Initialisation de la partie
if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-')); // Crée une grille vide de 3x3
    $_SESSION['joueur'] = 'X'; // Le joueur X commence
    $_SESSION['victoire'] = '';
}

// Vérification si quelqu'un a gagné
function verifierVictoire($grille) {
    // Vérifie les lignes, les colonnes et les diagonales
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] == $grille[$i][1] && $grille[$i][1] == $grille[$i][2] && $grille[$i][0] != '-') {
            return $grille[$i][0]; // Gagnant sur une ligne
        }
        if ($grille[0][$i] == $grille[1][$i] && $grille[1][$i] == $grille[2][$i] && $grille[0][$i] != '-') {
            return $grille[0][$i]; // Gagnant sur une colonne
        }
    }
    // Vérifie les diagonales
    if ($grille[0][0] == $grille[1][1] && $grille[1][1] == $grille[2][2] && $grille[0][0] != '-') {
        return $grille[0][0]; // Gagnant sur la diagonale principale
    }
    if ($grille[0][2] == $grille[1][1] && $grille[1][1] == $grille[2][0] && $grille[0][2] != '-') {
        return $grille[0][2]; // Gagnant sur l'autre diagonale
    }

    // Vérifie si la grille est pleine (match nul)
    foreach ($grille as $ligne) {
        if (in_array('-', $ligne)) {
            return ''; // La partie n'est pas terminée
        }
    }

    return 'nul'; // Match nul
}

// Fonction pour réinitialiser la partie
function reinitialiserPartie() {
    $_SESSION['grille'] = array_fill(0, 3, array_fill(0, 3, '-')); // Réinitialise la grille
    $_SESSION['joueur'] = 'X'; // Recommence avec X
    $_SESSION['victoire'] = ''; // Aucune victoire
}

// Gestion des clics sur les boutons
if (isset($_POST['case'])) {
    $case = $_POST['case'];
    $ligne = (int)($case / 3);
    $colonne = $case % 3;

    // Si la case est vide, on joue
    if ($_SESSION['grille'][$ligne][$colonne] == '-') {
        $_SESSION['grille'][$ligne][$colonne] = $_SESSION['joueur']; // Remplace le bouton par X ou O
        $_SESSION['victoire'] = verifierVictoire($_SESSION['grille']); // Vérifie si un joueur a gagné
        $_SESSION['joueur'] = ($_SESSION['joueur'] == 'X') ? 'O' : 'X'; // Change de joueur
    }
}

// Réinitialisation de la partie
if (isset($_POST['reset'])) {
    reinitialiserPartie();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        td {
            width: 100px;
            height: 100px;
            text-align: center;
            vertical-align: middle;
            border: 1px solid black;
        }
        button {
            width: 80px;
            height: 80px;
            font-size: 24px;
        }
        .reset-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>

<h1 style="text-align: center;">Jeu du Morpion</h1>

<?php if ($_SESSION['victoire']): ?>
    <h2 style="text-align: center;">
        <?php
        if ($_SESSION['victoire'] == 'nul') {
            echo "Match nul!";
        } else {
            echo $_SESSION['victoire'] . " a gagné!";
        }
        ?>
    </h2>
<?php endif; ?>

<form method="post" style="text-align: center;">
    <table>
        <?php for ($i = 0; $i < 3; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < 3; $j++): ?>
                    <td>
                        <button type="submit" name="case" value="<?= $i * 3 + $j ?>">
                            <?= $_SESSION['grille'][$i][$j] ?>
                        </button>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>

    <br>

    <button type="submit" name="reset" class="reset-button">Réinitialiser la partie</button>
</form>

</body>
</html>
