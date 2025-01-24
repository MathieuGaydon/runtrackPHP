<?php
// Création de la connexion
$conn = new PDO("mysql:host=localhost;dbname=jour 08", "root", "");

// Requête SQL pour récupérer la moyenne de la capacité
$sql = "SELECT prénom , nom, naissance from étudiants Where naissance BETWEEN '1998-01-01' AND '2018-12-31'";
$result = $conn->query($sql);

// Vérification si la requête renvoie des résultats
if ($result->rowCount() > 0) { 
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>Prénom</th>";
    echo "<th>Nom</th>";
    echo "<th>Naissance</th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) { 
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['prénom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
        echo "<td>" . htmlspecialchars($row['naissance']) . "</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";

}
