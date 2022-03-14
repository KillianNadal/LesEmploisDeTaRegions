<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}



// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Création Entreprise";
//include "$racine/vue/entete.html.php";
include "$racine/vue/v_creationEntreprise.php";
//include "$racine/vue/pied.html.php";
?>