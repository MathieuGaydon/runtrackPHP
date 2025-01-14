<?php
$str ="hello world ";
$bool = true ;
$int = 10 ;
$float =1.2 ;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des Variables</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px 12px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Tableau des Variables PHP</h1>
    <table>
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($bool); ?></td>
                <td>$booleanVar</td>
                <td><?php echo var_export($bool, true); ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($int); ?></td>
                <td>$intVar</td>
                <td><?php echo $int; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($str); ?></td>
                <td>$stringVar</td>
                <td><?php echo $str; ?></td>
            </tr>
            <tr>
                <td><?php echo gettype($float); ?></td>
                <td>$floatVar</td>
                <td><?php echo $float; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>