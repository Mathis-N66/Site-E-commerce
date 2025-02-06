<?php
function getPage($db) {
    $lesPages = [
        'accueil' => "accueilControleur",
        'categories' => "categoriesControleur",
        'contact' => "contactControleur",
        'maintenance' => "maintenanceControleur",
        'test' => "poduimControleur",
        'inscription' => "inscrireControleur",
        'connexion' => "connexionControleur"

    ];
    if ($db !=null) {
    $page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

    if (isset($lesPages[$page])) {
        $contenu = $lesPages[$page];
    } else {
        $contenu = $lesPages['accueil'];
    }

    }
    else{
        $contenu = $lesPages['maintenance'];
    }
        return $contenu;
}
?>
