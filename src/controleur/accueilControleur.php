<?php
function accueilControleur($twig, $db) {
    $produit1 = array();
    $produit2 = array();
    $produit3 = array();
    $poduim = new Poduim($db);
    $produit1 = $poduim->selectname(1);
    $produit2 = $poduim->selectname(2);
    $produit3 = $poduim->selectname(3);
    echo $twig->render('accueil.html.twig', array('produit1'=>$produit1[0], 'produit2'=>$produit2[0], 'produit3'=>$produit3[0]));
}

function contactControleur() {
    global $twig;
    echo $twig->render('contact.html.twig');
}

function mentionsControleur() {
    global $twig;
    echo $twig->render('mentions_legales.html.twig');
}

function aProposControleur() {
    global $twig;
    echo $twig->render('a_propos.html.twig');
}


function maintenanceControleur() {
    global $twig;
    echo $twig->render('maintenance.html.twig');
}



?>