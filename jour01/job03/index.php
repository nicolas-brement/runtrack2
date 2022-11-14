<!DOCTYPE html>
<html lang=fr>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<?php

$prenom = 'Nicolas';  // Type string (chaine de caractères)
$age = 25;    // Type entier
$estEtudiant = true;  // Type booléen
$a = 1.234; // Type float (nombre à virgule)

?>

<table>
    <tr>
        <td>Type</td>
        <td>Nom</td>
        <td>Valeur</td>
    </tr>
    <tr>
        <td>Boolean</td>
        <td>$estEtudiant</td>
        <td><?php echo $estEtudiant ?></td>
    </tr>
    <tr>
        <td>Entier</td>
        <td>$age</td>
        <td><?php echo $age ?></td>
    </tr>
    <tr>
        <td>Chaine de caractère</td>
        <td>$prenom</td>
        <td><?php echo $prenom ?></td>
    </tr>
    <tr>
        <td>Nombre à virgule</td>
        <td>$a</td>
        <td><?php echo $a ?></td>
    <tr>
</table>
