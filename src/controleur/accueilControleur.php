<?php
function accueilControleur() {
    global $twig;
    echo $twig->render('accueil.html.twig');
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
function categoriesControleur() {
    global $twig;
    echo $twig->render('categories.html.twig');
}

function maintenanceControleur() {
    global $twig;
    echo $twig->render('maintenance.html.twig');
}



?>