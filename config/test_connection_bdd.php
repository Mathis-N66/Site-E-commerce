<?php
$config = [
    'serveur' => '10.50.0.82',
    'login' => 'mathis1',
    'mdp' => 'XXKa7TF1B6N0B94E',
    'db' => 'seiko_mods'
];

try {
    // Connexion à la base de données
    $pdo = new PDO(
        'mysql:host=' . $config['serveur'] . ';dbname=' . $config['db'] . ';charset=utf8',
        $config['login'], 
        $config['mdp']
    );

    // Définir le mode d'erreur PDO pour l'affichage des erreurs
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion à la base de données réussie !";
} catch (PDOException $e) {
    // En cas d'erreur, afficher un message d'erreur
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>