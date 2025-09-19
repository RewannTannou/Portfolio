<?php

session_start(); // Pour éviter erreurs SESSIONS
ob_start(); // Pour éviter erreur COOKIES
//session_destroy();
//ini_set('display_errors', 0);
require_once 'configs/chemins.class.php';
require_once Chemins::CONFIGS . 'mysql_config.class.php';
require_once Chemins::MODELES . 'ModelePDO.class.php';
require_once Chemins::CONFIGS . 'variables_globales.class.php';

// Vérifiez si l'utilisateur est connecté

// Inclure le menu par défaut pour les utilisateurs non connectés
require Chemins::VUES_PERMANENTES . 'v_header.inc.php';
require Chemins::VUES . 'v_accueil.inc.php';


require Chemins::VUES_PERMANENTES . 'v_pied.inc.php'; // Footer commun
