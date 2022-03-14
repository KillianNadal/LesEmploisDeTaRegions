<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Modele {

    // préfixe de toutes les tables
    public static $prefixe;
    // classe technique permettant d'accéder au SGBD
    private static $monPdo;
    // pointeur sur moi-même (pattern singleton)
    private static $moi = null;
    // active l'enregistrement des logs
    private $modeDebug = true;
    private $monLog;

    /**
     * Constructeur privé, crée l'instance de PDO qui sera sollicitée
     * pour toutes les méthodes de la classe
     */
    private function __construct($serveur, $bdd, $user, $mdp, $pprefixe) {
        self::$prefixe = $pprefixe;
        self::$monPdo = new PDO($serveur . ';' . $bdd, $user, $mdp);
        self::$monPdo->query("SET CHARACTER SET utf8");
        // initialise le fichier log
        $this->monLog = new MakeLog("erreurSQL", "./log/", MakeLog::APPEND);
    }
}