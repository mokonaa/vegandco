<?php

// Démarre une session s'il n'y a pas de login et idUtil et idTypeUtilisateur
if (!isset($_SESSION['idUtilisateur'])) {
    session_start();
}

/*echo (!isset($_COOKIE['idUtilisateur']));
var_dump($_COOKIE);
if(isset($_COOKIE['idUtilisateur'])){
    setcookie('idUtilisateur','0',
    [
        'expires' => time() + 365*24*3600,
        'secure' => true,
        'httponly' => true,
    ]
);
}
echo $_COOKIE['idUtilisateur'];*/

//Pour la portabilité du projet
require_once __DIR__.'/config/path.php';

 $url = '';
// Récupere l'URL dans un tableau qui prendra les arguments de l'URL
if (isset($_GET['url'])) {
    $url = explode('/', $_GET['url']);
}

// Recupère la page si argument 0 de l'url pas vide, sinon on renvoie que la page est la page d'accueil
if (isset($url[0])) {
    $page = $url[0];
} else {
    $page = 'home';
}

// Si c'est une page n'appartenant pas au module
if (!in_array($page, array('connexion', 'recette', 'espace-utilisateur', 'actualite', 'blog'))) {
    // Si c'est une page static
    if (in_array($page, array('home', 'a-propos', 'cgu','oops', 'contact'))) {
        ob_start();
        $pageTitle = ucfirst($page) . ' - Veg & Co\'';
        require "includes/$page.php";
        $pageContent = ob_get_clean();
        require 'layout.php';
    }else if (in_array($page, array('forum'))) {
        ob_start();
        $pageTitle = ucfirst($page) . ' - Veg & Co\'';
        require "includes/oops.php";
        $pageContent = ob_get_clean();
        require 'layout.php';
    } else { // Ni module ni page static
        //TODO : gestion des erreurs sur le site, 404 et d'autres s'ils en existent avec une variable $error
        ob_start();
        require_once 'includes'.DIRECTORY_SEPARATOR.'error.php';
        $pageContent = ob_get_clean();
        require_once 'layout.php';
        //TODO : voir à quoi cela peut servir :http_response_code(404);
        //die;
    }
} else { // Module
    $pageTitle = ucfirst($page) . ' - Veg & Co\'';
    ob_start();
    require_once "modules/$page/mod_$page.php";
    $pageContent = ob_get_clean();
    require_once 'layout.php';
}

?>