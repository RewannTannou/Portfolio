<?php

session_start(); // Pour éviter erreurs SESSIONS
ob_start(); // Pour éviter erreur COOKIES
//session_destroy();
//ini_set('display_errors', 0);
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'ModelePDO.class.php';
require_once Chemins::CONFIGS . 'variables_globales.class.php';
require_once Chemins::CONTROLEURS . 'ControleurContact.class.php';
require_once Chemins::VUES_PERMANENTES . 'v_header.inc.php';

if (!isset($_REQUEST['controleur'])) {
    require  Chemins::VUES . 'v_accueil.inc.php';
} else {


    // Gestion dynamique du contrôleur
    $classeControleur = 'Controleur' . $_REQUEST['controleur']; // ex : ControleurProduits
    $fichierControleur = $classeControleur . ".class.php"; // ex : ControleurProduits.class.php
    require_once(Chemins::CONTROLEURS . $fichierControleur);

    // Vérifiez si l'action est définie
    if (isset($_REQUEST['action'])) {
        $action = $_REQUEST['action']; // ex : afficher
        $objetControleur = new $classeControleur(); // ex : $objetControleur = new ControleurProduits();
        // Vérifiez que l'action existe dans le contrôleur
        if (method_exists($objetControleur, $action)) {
            $objetControleur->$action(); // ex : $objetControleur->afficher();
        } else {
            // Gérer le cas où l'action n'existe pas
            echo "Action non valide : " . htmlspecialchars($action);
        }
    } else {
        // Gérer le cas où aucune action n'est spécifiée
        echo "Aucune action spécifiée.";
    }
}

require Chemins::VUES_PERMANENTES . 'v_pied.inc.php'; // Footer commun
