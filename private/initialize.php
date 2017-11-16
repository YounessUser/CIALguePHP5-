<?php

ob_start(); // output buffering is turned on

session_start(); // turn on sessions

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define("E_MAIL", "cialgues2018@gmail.com");
define("PASSWORD_MAIL", "mimounelkaoua");    



require_once('functions.php');


// Assign file paths to PHP constants
// __FILE__ returns the current path to this file
//dirname() returns the path to the parent diractory

define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH . '/public');
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("UTIL_PATH", PRIVATE_PATH . '/util');
define("MAIL_UTIL_PATH", PRIVATE_PATH . '/mail_util');


// Assign the root URL to a PHP constant
// * Do not need to include the domain
// * Use same document root as webserver
// * Can set a hardcoded value:
// define("WWW_ROOT", '/~kevinskoglund/globe_bank/public');
//define("WWW_ROOT", '/projects/Congres_Algues_WebSite/public/web/');
// * Can dynamically find everything in URL up to "/public"


$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);


require_once('database.php');
require_once('auth_functions.php');
require_once('recapatcha.php');
require_once('validation_functions.php');
require_once('services/article_services.php');
require_once('services/commite_services.php');
require_once('services/users_services.php');
require_once('services/inscription_services.php');
require_once('services/calendar_services.php');
require_once('services/theme_services.php');
require_once('services/accueil_services.php');
require_once('services/frais_services.php');
require_once('services/programme_services.php');
require_once('services/contactme_service.php');
require_once('util/doc_reader_util.php');
require_once('mail_util/PHPMailerAutoload.php');



$db = db_connect();
$langUrl='langs/fr.php';
if (isset($_GET['lang']) && $_GET['lang'] == 'En') {
    $langUrl='langs/en.php';
} 
require_once $langUrl;

?>
