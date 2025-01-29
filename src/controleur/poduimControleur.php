<?php

function poduimControleur($twig, $db){
 $form = array();
 $poduim = new Poduim($db);
 $listename = $poduim->selectname();
 var_dump($listename);
 echo $twig->render('accueil.html.twig', array('form'=>$form,'listename'=>$listename));
}

?>