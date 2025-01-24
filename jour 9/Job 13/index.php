<?php
// Création de la connexion
$conn = new PDO("mysql:host=localhost;dbname=jour 08", "root", "");
// Requête SQL pour récupérer les informations des colonnes spécifiées
$sql = "SELECT salles.nom AS nom_salle, étage.nom AS nom_etage FROM salles JOIN étage ON salles.id_etage = étage.id;
";
$result = $conn->query($sql);

// Vérification si la requête renvoie des résultats
if ($result->rowCount() > 0) { 
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th> nom salle</th>";
    echo "<th> nom étage</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['nom_salle']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nom_etage']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

}

?>
