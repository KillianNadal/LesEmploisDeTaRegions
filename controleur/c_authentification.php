<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){
    $racine="..";
}

$msgErreur = "";

if (isset($_POST["login"]) && isset($_POST["password"])){
    if($_POST["login"] !== "" && $_POST["password"] !== ""){
      
        $login = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    }else{
        $msgErreur = "Erreur, tous les champs du formulaire doivent être complétés";
    }
}else{
    $msgErreur = "Erreur, tous les champs du formulaire doivent être complétés";
}

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Authentification Utilisateur";
//include "$racine/vue/entete.html.php";
include "$racine/vue/v_authentificationUtilisateur.php";
//include "$racine/vue/pied.html.php";
?>