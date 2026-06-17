<?php

require 'db.php';

$nom = $_POST['nom'];
$email = $_POST['email'];
$largeur = $_POST['largeur'];
$hauteur = $_POST['hauteur'];
$description = $_POST['description'];
$support = $_POST['support'];

$stmt = $pdo->prepare("
    INSERT INTO devis (
        nom,
        email,
        largeur,
        hauteur,
        description,
        type_support
    )
    VALUES (
        :nom,
        :email,
        :largeur,
        :hauteur,
        :description,
        :type_support
    )
");

$stmt->execute([
    'nom' => $nom,
    'email' => $email,
    'largeur' => $largeur,
    'hauteur' => $hauteur,
    'description' => $description,
    'type_support' => $support
]);

echo "Devis enregistré";