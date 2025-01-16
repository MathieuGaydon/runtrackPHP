<?php
$str = "Dans l'espace, personne ne vous entend crier";
$length = 0;

while (isset($str[$length])) {
    $length++;
}

echo "<br>Le nombre de caractères dans la chaîne est : " . $length;
?>