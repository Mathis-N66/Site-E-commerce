<?php
function categoriesControleur($twig, $db) {
    global $twig;
    $cate1 = array();
    $cate2 = array();
    $cate3 = array();
    $cate4 = array();
    $cate5 = array();
    $cate6 = array();
    $cate7 = array();
    $cate8 = array();
    $Categories = new Categories($db);
    $cate1 = $Categories->selectcat(1);
    $cate2 = $Categories->selectcat(2);
    $cate3 = $Categories->selectcat(3);
    $cate4 = $Categories->selectcat(4);
    $cate5 = $Categories->selectcat(5);
    $cate6 = $Categories->selectcat(6);
    $cate7 = $Categories->selectcat(7);
    $cate8 = $Categories->selectcat(8);
    echo $twig->render('categories.html.twig', array('categorie1'=>$cate1[0], 'categorie2'=>$cate2[0], 'categorie3'=>$cate3[0], 'categorie4'=>$cate4[0],'categorie5'=>$cate5[0],'categorie6'=>$cate6[0],'categorie7'=>$cate7[0], 'categorie8'=>$cate8[0]));
}
