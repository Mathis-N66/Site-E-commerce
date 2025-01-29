<?php
// index.php
session_start();
require_once '../lib/vendor/autoload.php'; // Autoloader de Composer
require_once '../config/parametre.php'; // Paramètres généraux
require_once '../config/connexion.php'; // Connexion à la base de données
require_once '../src/controleur/_Controleurs.php'; // Ensemble des contrôleurs
require_once '../config/routes.php'; // Gestion des routes
require_once '../src/modele/_classes.php';
$db = connect($config);

// Initialisation de Twig
$loader = new \Twig\Loader\FilesystemLoader('../src/vue/');
$twig = new \Twig\Environment($loader, []);


// Appel du contrôleur avec $twig

$contenu = getPage($db);  // Appelle la fonction qui retourne le contrôleur à charger
$contenu($twig, $db);  // Charge le contrôleur et passe Twig à la fonction

?>
