<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php
        /*
         * To change this license header, choose License Headers in Project Properties.
         * To change this template file, choose Tools | Templates
         * and open the template in the editor.
         */

        $cnx = 'mysql:host=localhost;dbname=LesEmploisDeTaRegion;port=3306;charset=utf8';

        try {
            $pdo = new PDO($cnx, 'root', '');
        } catch (Exception $ex) {

            echo('Erreur de connexion à la base de données');
        }

        $query = $pdo->query("select * from `utilisateur`");

        $resultat = $query->fetchAll();

        print("<table border=\"1\">");

        foreach ($resultat as $key => $variable) {
            print("<tr>");
            print("<td>" . $resultat[$key]['idUtilisateur'] . "</td>");
            print("<td>" . $resultat[$key]['nomUtilisateur'] . "</td>");
            print("<td>" . $resultat[$key]['prenomUtilisateur'] . "</td>");
            print("<td>" . $resultat[$key]['emailUtilisateur'] . "</td>");
            print("<td>" . $resultat[$key]['motDePasseUtilisateur'] . "</td>");
            print("<td>" . $resultat[$key]['dateCreationCompteUtilisateur'] . "</td>");
            print("<tr>");
        }

        print("<tables>");
        ?>
    </body>
</html>


<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include "getRacine.php";
include "$racine/controleur/c_principal.php";


if (isset($_GET["action"])){
    $action = $_GET["action"];
}
else{
    $action = "defaut";
}

$fichier = controleurPrincipal($action);
include "$racine/controleur/$fichier";

?>
     