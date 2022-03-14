<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function controleurPrincipal(string $action){
    $lesActions = array();
    $lesActions["defaut"] = "c_authentification.php";
    $lesActions["authentificationEntre"] = "c_authentificationEntreprise.php";
    $lesActions["creationEntre"] = "c_creationEntreprise.php";  
    $lesActions["creationUtil"] = "c_creationUtilisateur.php";  

    if (array_key_exists( $action , $lesActions )){
        return $lesActions[$action];
    }
    else{
        return $lesActions["defaut"];
    }
}
?>