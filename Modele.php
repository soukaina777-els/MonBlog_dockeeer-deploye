<?php
// Modele.php

// Fonction qui récupère tous les billets
function getBillets() {
    $bdd = new PDO(
        'mysql:host=db;dbname=monblog;charset=utf8',
        'bloguser',      // utilisateur MySQL du conteneur
        'blogpass'       // mot de passe MySQL du conteneur
    );

    $billets = $bdd->query(
        "SELECT BIL_ID as id, BIL_DATE as date,
                BIL_TITRE as titre, BIL_CONTENU as contenu
         FROM T_BILLET
         ORDER BY BIL_ID DESC"
    );

    return $billets;
}
