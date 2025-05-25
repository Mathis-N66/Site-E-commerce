<?php

$host = "localhost";
$user = "mathis1";
$password = "XXKa7TF1B6N0B94E";
$dbname = "seiko_craft";

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", username: $user, password: $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Si la connexion réussit, on peut afficher un message de succès (optionnel)
    echo "Connexion à la base de données réussie !";

} catch (PDOException $e) {
    // En cas d'erreur, on affiche le message d'erreur
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
