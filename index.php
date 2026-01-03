<?php
require 'Modele.php'; 
try{  // accès BD
$billets = getBillets(); // récupère les billets
require 'vueAccueil.php'; 
}catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require 'vueErreur.php';
}// affiche la vue
